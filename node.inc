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
