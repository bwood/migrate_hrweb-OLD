<?php

/**
 * Common mappings for the Drupal 6 node migrations.
 */
class HrwebNodeMigration extends DrupalNode6Migration {
  public function __construct(array $arguments) {
    parent::__construct($arguments);
    //defaultValue will override the format created by mapFormat
    //$this->addFieldMapping('body:format')->defaultValue('panopoly_wysiwyg_text');
  }


  public function prepareRow($current_row) {
    // Always start your prepareRow implementation with this clause. You need to
    // be sure your parent classes have their chance at the row, and that if
    // they return FALSE (indicating the row should be skipped) you pass that
    // on.
    if (parent::prepareRow($current_row) === FALSE) {
      return FALSE;
    }

    $current_row->format = migrate_hrweb_get_text_format($current_row->format);

    return TRUE;
  }


  public function prepare($node, stdClass $row) {
    // TIP: Note that the Migration prepare method is called after all other
    // prepare handlers. Most notably, the field handlers have had their way
    // and created field arrays, so we have to save in the same format.

    //If format is not editor, set to wysiwyg
    //Could've done this in prepareRow, but easier to let mapFormat do it's thing first
    if ($node->body[LANGUAGE_NONE][0]['format'] != 'editor') {
      $node->body[LANGUAGE_NONE][0]['format'] = 'panopoly_wysiwyg_text';
    }
  }

}

class HrwebAvccornerMigration extends HrwebNodeMigration {
  public function __construct(array $arguments) {

    parent::__construct($arguments);

    //Map non-standard body field
    $this->addFieldMapping('body', 'field_body');

  }
}
