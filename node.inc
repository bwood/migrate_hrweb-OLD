<?php

/**
 * Common mappings for the Drupal 6 node migrations.
 */
class HrwebNodeMigration extends DrupalNode6Migration {
  public function __construct(array $arguments) {
    parent::__construct($arguments);
    //Map D6 input formats to OB text formats
    $this->addFieldMapping('body:format', 'format')->callbacks(array($this, 'migrate_hrweb_get_text_format_by_id'));

  }

  /**
   * Translate between D6 input format id and D7 text format name.
   * For use with prepare_row()
   */
  protected function migrate_hrweb_get_text_format_by_id($id) {
    $output = '';

    switch ($id) {
      /*
        case 1:
          //D6: filtered html
        case 2:
          //D6: full html
          case 4:
          //D6: Editor
      */
      case 3:
        //D6: Webmaster
        $output = 'panopoly_html_text';
        break;

      default:
        $output = 'editor';
      //'panopoly_wysiwyg_text';
    }

    return $output;
  }

 /*
    public function prepareRow($current_row) {
      // Always start your prepareRow implementation with this clause. You need to
      // be sure your parent classes have their chance at the row, and that if
      // they return FALSE (indicating the row should be skipped) you pass that
      // on.
      if (parent::prepareRow($current_row) === FALSE) {
        return FALSE;
      }

      //Best to change body:format in __construc() using addFieldMapping
      //resorted to using the prepare() method instead.
      $current_row->format = $this->migrate_hrweb_get_text_format_by_id($current_row->format);
      //$current_row->format = 'panopoly_wysiwyg_text';

      return TRUE;
    }


    public function prepare($node, stdClass $row) {
      // TIP: Note that the Migration prepare method is called after all other
      // prepare handlers. Most notably, the field handlers have had their way
      // and created field arrays, so we have to save in the same format.

      //If format is not editor, set to wysiwyg
      //Could've done this in prepareRow, but easier to let mapFormat do it's thing first

      $node->body[LANGUAGE_NONE][0]['format'] = $this->migrate_hrweb_get_text_format_by_name($node->body[LANGUAGE_NONE][0]['format']);
    }
*/

}

class HrwebAvccornerMigration extends HrwebNodeMigration {
  public function __construct(array $arguments) {

    parent::__construct($arguments);

    //Map non-standard body field
    $this->addFieldMapping('body', 'field_body');

  }
}

class HrwebGlossaryMigration extends HrwebNodeMigration {
  public function __construct(array $arguments) {

    parent::__construct($arguments);

    //Map non-standard body field
    $this->addFieldMapping('body', 'field_body');

  }
}

class HrwebRelatedLinkMigration extends HrwebNodeMigration {
  public function __construct(array $arguments) {

    parent::__construct($arguments);

    //Map non-standard body field
    $this->addFieldMapping('body', 'field_body');

    //Related links categoies vocab id = 5 in source
    $this->addFieldMapping('field_link_category', 5)
      ->sourceMigration('related_links_categories')
      ->arguments(array('source_type' => 'tid'));


  }
}

class HrwebRelatedLinkAttachmentMigration extends HrwebRelatedLinkMigration {

  public function __construct(array $arguments) {
    parent::__construct($arguments);
  }

  /*
   * When you transform the contents of a field, you seem to need to use prepare() as opposed to prepareRow()
   */
  public function prepare($node, stdClass $row) {

   if ((strpos($node->body[LANGUAGE_NONE][0]['summary'], 'hrweb.berkeley.edu/files')) ||
      (strpos($node->body[LANGUAGE_NONE][0]['summary'], 'href="/files'))) {
      $node->body[LANGUAGE_NONE][0]['summary'] = str_replace('/files', '/sites/default/files', $node->body[LANGUAGE_NONE][0]['summary']);
    }

    return TRUE;
  }
}

class HrwebSlideMigration extends HrwebNodeMigration {
  public function __construct(array $arguments) {

    parent::__construct($arguments);

    //Map non-standard body field
    $this->addFieldMapping('field_slide_pager_item_text', 'field_pager_item_text');
    $this->addFieldMapping('field_slide_url', 'field_url');

    $this->addFieldMapping('field_slide_image', 'field_image')
      ->sourceMigration('AllFiles');
    $this->addFieldMapping('field_slide_image:file_class')
      ->defaultValue('MigrateFileFid');
    $this->addFieldMapping('field_slide_image:preserve_files')
      ->defaultValue(TRUE);
  }
}

class HrwebFaqMigration extends HrwebNodeMigration {
  public function __construct(array $arguments) {
    parent::__construct($arguments);

    //Related links categoies vocab id = 5 in source
    $this->addFieldMapping('field_faq_category', 4)
      ->sourceMigration('faqs')
      ->arguments(array('source_type' => 'tid'));

  }

  public function query() {
    $query = parent::query();
    $query->join('faq_questions', 'fq', 'fq.nid=n.nid');
    $query->leftJoin('faq_weights', 'w', 'w.nid=n.nid');
    $query->addField('fq', 'question');
    $query->addField('fq', 'detailed_question');
    $query->addField('w', 'weight');
    $query->addField('w', 'tid');
    //$x = Database::getConnection()->prefixTables($query);
    return $query;
  }

  public function prepareRow($current_row) {
    // Always start your prepareRow implementation with this clause. You need to
    // be sure your parent classes have their chance at the row, and that if
    // they return FALSE (indicating the row should be skipped) you pass that
    // on.
    if (parent::prepareRow($current_row) === FALSE) {
      return FALSE;
    }

    // get rid of the path that uses the source's nid. correct path will
    // be created on save
    unset($current_row->path);
    return TRUE;
  }

  /**
   * Acts right after a node has been saved.
   *
   * @param object $node
   *   A node object for the newly migrated node.
   * @param stdClass $row
   *   An object representing data from the source row.
   */
  public function complete($node, stdClass $row) {
    require_once(drupal_get_path('module', 'faq') . '/faq.module');

    // update or insert into faq_weights
    // lifted from faq.admin.inc: faq_order_settings_reorder_form_submit()
    db_merge('faq_weights')
      ->fields(array(
        'weight' => (int) $row->weight,
      ))
      ->key(array(
        'tid' => $row->tid,
        'nid' => $node->nid,
      ))
      ->execute();

    //insert into faq_question
    faq_insert($node);

  }


}

class HrwebBookPageMigration extends HrwebNodeMigration {
  public function __construct(array $arguments) {
    parent::__construct($arguments);
  }

  /**
   * Overrides parent::query to add more data to the source, in our case,
   * book hierarchy stuff.
   */
  public function query() {
    $query = parent::query();
    // Add in book parent child relationships.
    $query->join('book', 'b', 'n.nid = b.nid');
    $query->addField('b', 'bid', 'book_id');
    $query->join('menu_links', 'ml', 'b.mlid = ml.mlid');
    $query->addField('ml', 'weight', 'book_weight');
    //Query extention to get nid of parent from the link path in menu_links (could get it elsewhere)
    $query->leftJoin('menu_links', 'mm', 'ml.plid = mm.mlid');
    $query->addField('mm', 'link_path', 'parent_id');
    // Sort by depth so there is always a parent
    $query->orderBy('ml.depth');

    //$x = Database::getConnection()->prefixTables($query);
    return $query;
  }

  /**
   * Acts right after a book node has been saved. Map the book hierarchy.
   *
   * @param object $node
   *   A node object for the newly migrated book.
   * @param stdClass $row
   *   An object representing data from the source row.
   */
  public function complete($node, stdClass $row) {
    // If this is a top-level book, don't set a parent.
    $book_id = $row->nid == $row->book_id ? $node->nid : parent::handleSourceMigration('BookPage', $row->book_id);

    // bid: If this is a top-level book, don't set a parent.
    //$book_id = $row->nid == $row->book_id ? $node->nid : $this->lookupMigratedBook($row->book_id);
    // Book id - effectively, parent nid.
    $node->book['bid'] = $book_id;
    $node->book['nid'] = $node->nid;
    $node->book['weight'] = $row->book_weight;

    // We strip the "node/"-part from the link_path
    $parent_id = str_replace("node/", "", $row->parent_id);
    // If there is a parent we lookup the migrated node
    if(isset($parent_id) && $parent_id > 0) {
      $parent_node = parent::handleSourceMigration('BookPage', $parent_id);
      // We get the mlid of the migrated parent
      $query = db_select("menu_links", "ml")
        ->fields("ml")
        ->condition("ml.link_path", "node/" . $parent_node, "=")
        ->execute()
        ->fetchAssoc();
      $plid = $query['mlid'];
      // We add the parent mlid (plid)
      $node->book['plid'] = $plid;
      /**
       * left off
       * $plid is null when row->nid=78 bc mlid hasn't been created for 77
       */
    }

    _book_update_outline($node);
    node_save($node);

  }

  /**
   * Returns the book id for the book that this Page is part of
   *
   * @param int $source_book_nid
   *   Nid of book in source database to lookup.
   */
  protected function lookupMigratedParentPage($source_plid) {
    $dest_plid = parent::handleSourceMigration('BookPage', $source_plid);
    return $dest_plid;
  }


/**
   * Returns the book id for the book that this Page is part of
   *
   * @param int $source_book_nid
   *   Nid of book in source database to lookup.
   */
  protected function lookupMigratedBook($source_book_nid) {
    $dest_book_nid = parent::handleSourceMigration('BookPage', $source_book_nid);
    return $dest_book_nid;
  }

}
