<?php
/**
 * Created by JetBrains PhpStorm.
 * User: bwood
 * Date: 8/30/13
 * Time: 3:27 PM
 * To change this template use File | Settings | File Templates.
 */

/**
 * There are four essential components to set up in your constructor:
 *  $this->source - An instance of a class derived from MigrateSource, this
 *    will feed data to the migration.
 *  $this->destination - An instance of a class derived from MigrateDestination,
 *    this will receive data that originated from the source and has been mapped
 *    by the Migration class, and create Drupal objects.
 *  $this->map - An instance of a class derived from MigrateMap, this will keep
 *    track of which source items have been imported and what destination
 *    objects they map to.
 *  Field mappings - Use $this->addFieldMapping to tell the Migration class what
 *    source fields correspond to what destination fields, and additional
 *    information associated with the mappings.
 */
class HrwebPathRedirectMigration extends DrupalMigration {

  /**
   * @param array $arguments
   */
  public function __construct(array $arguments) {
    parent::__construct($arguments);

    // Create our three main objects - source, destination, and map
    $this->source = new MigrateSourceSQL($this->query(), $this->sourceFields,
      NULL, $this->sourceOptions);

    $this->destination = new MigrateDestinationRedirect();

    $this->map = new MigrateSQLMap($this->machineName,
      array(
        'rid' => array(
          'type' => 'int',
          'length' => 11,
          'not null' => TRUE,
          'description' => 'Primary Key: Unique key for redirect paths.',
          'alias' => 'pr',
        ),
      ),
      MigrateDestinationRedirect::getKeySchema()
    );

    // The mappings are straightforward 1-to-1
    $this->addSimpleMappings(array('source', 'redirect'));
    $this->addFieldMapping('access', 'last_used', FALSE);
    // Defaults
    $this->addFieldMapping('type')->defaultValue('redirect');
    $this->addFieldMapping('source_options')->defaultValue(array());
    $this->addFieldMapping('redirect_options')
      ->defaultValue(array());
    $this->addFieldMapping('status_code')->defaultValue(0);
    $this->addFieldMapping('hash')->defaultValue('none');
    $this->addFieldMapping('uid')->defaultValue(1);
    $this->addFieldMapping('count')->defaultValue(0);
    $this->addFieldMapping('language')->defaultValue(LANGUAGE_NONE);

    // Unmapped destination fields
    /*
    $this->addFieldMapping('hash')->issueGroup(t('DNM'));
    $this->addFieldMapping('uid')->issueGroup(t('DNM'));
    $this->addFieldMapping('count')->issueGroup(t('DNM'));
    */
  }

  /**
   * Query for the basic redirect data.
   *
   * @return QueryConditionInterface
   */
  protected function query() {
    $query = Database::getConnection('default', $this->sourceConnection)
      ->select('path_redirect', 'pr')
      ->fields('pr');
    return $query;
  }


  /**
   * Review a data row after fetch, returning FALSE to skip it.
   *
   * @param $row
   * @return bool

  public function prepareRow($row) {
  if (parent::prepareRow($row) === FALSE) {
  return FALSE;
  }
  }
   */
}

/**
 * Destination class implementing migration into {redirect}.
 *
 * Adapted from MigrateDestinationMenu -bw
 *
 */
class MigrateDestinationRedirect extends MigrateDestination {
  static public function getKeySchema() {
    return array(
      'redirect' => array(
        'type' => 'int',
        'length' => 11,
        'not null' => TRUE,
        'description' => 'Primary Key: Unique key for redirects.',
      ),
    );
  }

  public function __construct() {
    parent::__construct();
  }

  public function __toString() {
    $output = t('Redirect');
    return $output;
  }

  /**
   * Returns a list of fields available to be mapped for redirects.
   *
   * @param Migration $migration
   *  Optionally, the migration containing this destination.
   * @return array
   *  Keys: machine names of the fields (to be passed to addFieldMapping)
   *  Values: Human-friendly descriptions of the fields.
   */
  public function fields($migration = NULL) {
    $fields = array(
      'rid' => t('The redirect id. Primary key.'),
      'hash' => t('A unique hash based on source, source options and language.'),
      'type' => t(''),
      'uid' => t(''),
      'source' => t(''),
      'source_options' => t(''),
      'redirect' => t(''),
      'redirect_options' => t(''),
      'language' => t(''),
      'status_code' => t(''),
      'count' => t(''),
      'access' => t(''),

    );
    return $fields;
  }

  private function redirect_load_by_source_custom($source) {

    $rid = db_select("redirect", "r")
      ->fields("r", array("rid"))
      ->condition("r.source", $source, "=")
      ->execute()
      ->fetchField();

    return redirect_load($rid);
  }

  /**
   * Import a single row.
   *
   * @param $redirect
   *  Redirect object to build. Prefilled with any fields mapped in the Migration.
   * @param $row
   *  Raw source data object - passed through to prepare/complete handlers.
   * @return array
   *  Array of key fields of the object that was saved if
   *  successful. FALSE on failure.
   */
  public function import(stdClass $redirect, stdClass $row) {
    // Invoke migration prepare handlers
    $this->prepare($redirect, $row);


    // redirect_save() provides no return callback, so we can't really test this
    // without running a redirect_load() check.
    migrate_instrument_start('redirect_save');
    redirect_save($redirect);
    migrate_instrument_stop('redirect_save');

    // Return the new id or FALSE on failure.
    // redirect_load_by_source() doesn't do quite what we want
    if ($data = $this->redirect_load_by_source_custom($redirect->source)) {
      $this->numCreated++;
      // Return the primary key to the mapping table.
      $return = array($data->rid);
    }
    else {
      $return = FALSE;
    }

    // Invoke migration complete handlers.
    $this->complete($data, $row);

    return $return;
  }

  /**
   * Implementation of MigrateDestination::prepare().
   */
  public
  function prepare($redirect, stdClass $row) {

    // Remove encoded chars from string like %20 which often occurs in links
    // to uploaded files named with spaces
    $redirect->redirect = rawurldecode($redirect->redirect);
    $redirect->source = rawurldecode($redirect->source);

    /**
     * Correct target paths containing "node/\d+
     *
     * In order to refactor translateNids() and related methods to UcbDrupal()--
     * a general utility class--we have to make UcbDrupal extend
     * DrupalNode6Migration. That means that UcbDrupal() requires minimal
     * arguments (source_connection, source_version, source_type,
     * destination_type) in order for the constructor to run.
     *
     * source_type and destination_type aren't actually used by UcbDrupal(),
     * in fact they can be NULL.
     *
     * @see UcbDrupal
     */
    $node_arguments = array(
      'source_connection' => 'legacy',
      'source_version' => 6,
      'source_type' => NULL,
      'destination_type' => NULL,
      'description' => 'UcbDrupal utilities.', //prevent a migrate message
    );

    // Leverage common utility functions
    // TODO: pass in the source_connection and source_version from .module?
    $ucbDrupal = new UcbDrupal($node_arguments);

    // make sure the nids in the redirects are mapped to the corresponding
    // nids in the destination db
    $redirect->redirect = $ucbDrupal->translateNids($redirect->redirect);
    // It doesn't make sense to translate the nids on the redirect source paths.
    // If in the D6 we were redirecting faq/123 to foo/bar, we should continue
    // doing that same redirect on the D7 site.
    

    // only make file path corrections on the redirect
    $redirect->redirect = $ucbDrupal->correctFilePaths($redirect->redirect);

    // Allow child classes to act.
    $migration = Migration::currentMigration();
    $redirect->migrate = array(
      'machineName' => $migration->getMachineName(),
    );

    // Call any general handlers.
    migrate_handler_invoke_all('redirect', 'prepare', $redirect, $row);
    // Then call any prepare handler for this specific Migration.
    if (method_exists($migration, 'prepare')) {
      $migration->prepare($redirect, $row);
    }
  }

  public function complete($redirect, stdClass $row) {
    // We do nothing here but allow child classes to act.
    $migration = Migration::currentMigration();
    $redirect->migrate = array(
      'machineName' => $migration->getMachineName(),
    );
    // Call any general handlers.
    migrate_handler_invoke_all('redirect', 'complete', $redirect, $row);
    // Then call any complete handler for this specific Migration.
    if (method_exists($migration, 'complete')) {
      $migration->complete($redirect, $row);
    }
  }

  /**
   * Delete a single redirect.
   *
   * @param $id
   *  Array of fields representing the key.
   */
  public function rollback(array $id) {
    $rid = reset($id);

    migrate_instrument_start('redirect_delete');
    $this->prepareRollback($rid);
    if ($redirect = redirect_load($rid)) {
      redirect_delete($rid);
    }
    $this->completeRollback($rid);
    migrate_instrument_stop('redirect_delete');
  }


  /**
   * Give handlers a shot at cleaning up before a redirect has been rolled back.
   *
   * @param $rid
   *  ID of the redirect about to be deleted.
   */
  public function prepareRollback($rid) {
    // We do nothing here but allow child classes to act.
    $migration = Migration::currentMigration();
    // Call any general handlers.
    migrate_handler_invoke_all('redirect', 'prepareRollback', $rid);
    // Then call any complete handler for this specific Migration.
    if (method_exists($migration, 'prepareRollback')) {
      $migration->prepareRollback($rid);
    }
  }

  /**
   * Give handlers a shot at cleaning up after a redirect has been rolled back.
   *
   * @param $rid
   *  ID of the redirecte which has been deleted.
   */
  public function completeRollback($rid) {
    // We do nothing here but allow child classes to act.
    $migration = Migration::currentMigration();
    // Call any general handlers.
    migrate_handler_invoke_all('redirect', 'completeRollback', $rid);
    // Then call any complete handler for this specific Migration.
    if (method_exists($migration, 'completeRollback')) {
      $migration->completeRollback($rid);
    }
  }
}
