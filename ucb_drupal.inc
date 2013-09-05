<?php
/**
 * This is a utility class that is needed by classes with different ancestries.
 * For example it's needed by HrwebNodeMigration as well as
 * HrwebPathRedirectMigration. The calling classes can just instantiate this
 * and call its public functions.
 *
 * Since this class is not directly connected to a migration it need not be
 * registered in migrate_hrweb.module
 *
 * In order to refactor translateNids() and related methods to UcbDrupal()--
 * a general utility class--we have to make UcbDrupal extend
 * DrupalNode6Migration. That means that UcbDrupal() requires minimal
 * arguments (source_connection, source_version, source_type,
 * destination_type) in order for the constructor to run.
 *
 * If UcbDrupal doesn't extend DrupalNode6Migration() it can't access the
 * sourceType property returned by getMigrations().
 */

class UcbDrupal extends DrupalNode6Migration {
  /**
   * @param array $arguments
   */
  public function __construct(array $arguments) {
    parent::__construct($arguments);

    /*
    $this->callerObject = $arguments['caller_object'];
    $this->migrations = $arguments['migrations'];
    */
  }

  public function correctFileUrls($field) {
    //Replace href=foo.com/files/bar with href=foo.com/sites/default/files/bar
    //but don't replace href=foo.com/sites/default/files/bar
    $field = preg_replace("|(href=\"?[a-zA-Z\./:\d]*(?<!sites/default/))files/([^>]+)|", '\\1sites/default/files/\\2', $field);

    //Remove "../../" in urls
    $field = preg_replace("|(href=\"?[a-zA-Z:/\.\d]*)\.\./\.\./([^>]+)|", "$1$2", $field);
    //Remove "../" in urls
    $field = preg_replace("|(href=\"?[a-zA-Z:/\.\d]*)\.\./([^>]+)|", "$1$2", $field);
    return $field;
  }

  public function correctFilePaths($field) {
    //Replace href=foo.com/files/bar with href=foo.com/sites/default/files/bar
    //but don't replace href=foo.com/sites/default/files/bar
    // '(?<!sites/default/)' <-- "negative lookbehind"
    $field = preg_replace("|(?<!sites/default/)files/|", '/sites/default/files/', $field);

    //Remove "../../" in urls
    $field = preg_replace("|\.\./\.\./files/|", "files/", $field);
    //Remove "../" in urls
    $field = preg_replace("|\.\./files/|", "files/", $field);
    return $field;
  }

  public function translateNids($field) {
    $field = preg_replace_callback("|([^/]+)(?<=node)/(\d+)|", 'self::getDestinationNid', $field);
    $field = preg_replace_callback("|([^/]+)(?<=faq)/(\d+)|", 'self::getDestinationNid', $field);
    return $field;
  }

  protected function getDestinationNid($matches) {
    // as usual: $matches[0] is the complete match
    // $matches[1] the match for the first pattern
    // enclosed in '(...)' and so on

    //Find the node_type of the source nid
    $result = Database::getConnection('default', $this->sourceConnection)
      ->query("SELECT type FROM node WHERE nid=:nid", array(':nid' => $matches[2]));
    if ($result) {
      $source_type = $result->fetchField();
    }

    if ($source_type === FALSE) {
      /* The nid wasn't found in the source db.
       *
       * Possibilities:
       *
       * 1. The nid is part of a redirect source, and that node was deleted.
       *    This path should still be redirected.
       *
       * 2. The nid is part of a redirect destination, and that node was deleted.
       *    Ideally the redirect should not be created.
       *
       * 3. The nid was found in a body link
       *    All we can do is allow a dead link to be created
       *
       * Currently we don't know which of the 3 situations is happening.  Since
       * handleSourceMigration() is going to fail, just bail out and return
       * the path or link with the nid from the source db.
       *
       * (If we need to identify the situation we could add another argument to
       * translateNids() and then cat it onto $fields and when we get here look
       * for it in $matches[3], but oy...)
       */
      return $matches[1] . '/' . $matches[2];
    }

    $migration_machine_name = FALSE;

    /*
     * If the path contains 'faq/' we know it's a Faq node handled by the Faq
     * migration.  Otherwise, find the migration that matches the $source_type
     */
    if (strpos($matches[1], 'faq/') !== FALSE) {
      $migration_machine_name = 'Faq';
    }
    else {
      /*
       * Find the migration that operates on $source_type.
       * The nid that is linked to in the body may or may not be of the same
       * content-type (and migration) as the node that we are operating on. E.g.
       * a Basic Page may link to a Book Page.
       */
      $migrations = $this->getMigrations();
      while (list($k, $v) = each($migrations)) {
        if ($v->sourceType === $source_type) {
          $migration_machine_name = $k;
          break;
        }
      }
    }

    if ($migration_machine_name == 'Faq') {
      // Is this a link to an faq sub-category or to an individual faq node?
      // Is it a sub category link?
      $sub_cat = FALSE;
      $result = Database::getConnection('default', $this->sourceConnection)
        ->query("SELECT name FROM term_data WHERE tid=:tid", array(':tid' => $matches[2]));
      if ($result) {
        $sub_cat = $result->fetchField();
      }

      if ($sub_cat) {
        //D7 to link to a faq sub-category it's faq-page/$tid
        $matches[1] = 'faq-page/';
        //'faqs' is the machine name for the FAQ taxonomy migration
        $dest_id = parent::handleSourceMigration('faqs', $matches[2]);
      }
      else {
        //Not a sub-category link, so assume it's a link to an individual faq
        //'Faq' is the machine name for the FAQ node migration
        $matches[2] = 'node/';
        $dest_id = parent::handleSourceMigration('Faq', $matches[2]);
      }

    }
    elseif ($migration_machine_name !== FALSE) {
      //Find the destination nid that corresponds to the source nid
      $dest_id = parent::handleSourceMigration($migration_machine_name, $matches[2]);
    }
    else {
      $dest_id = "not-found";
      drupal_set_message("Source nid=" . $matches[2] . " of type $source_type could not be associated with a migration.", "error");
    }

    if (!$dest_id) {
      $dest_id = "not-found";
    }
    //return $matches[1] . $matches[2] . $dest_id;
    return $matches[1] . '/' . $dest_id;
  }

  private function getMigrations() {
    //Only look up migrations once.
    static $migrations = array();
    if (count($migrations) == 0) {
      $migrations = migrate_migrations();
      drupal_set_message("Looked up migrations. (This should only happen once.)");
    }
    return $migrations;
  }

}