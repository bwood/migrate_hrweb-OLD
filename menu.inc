<?php
/**
 * Class HrwebMenuMigration
 *
 */

class HrwebMenuMigration extends DrupalMenu6Migration {
  public function __construct(array $arguments) {
    parent::__construct($arguments);
  }

  public function mapHrwebMenu($current_row) {
    switch ($current_row->menu_name) {
      case 'primary-links':
        $current_row->menu_name = 'main-menu';
        $current_row->title = "Main menu";
        break;
      case 'secondary-links':
        $current_row->menu_name = 'menu-secondary-menu';
        $current_row->title = "Secondary menu";
        break;
      case 'menu-footer':
        $current_row->menu_name = 'menu-footer-menu';
        $current_row->title = "Footer menu";
        break;
    }
    return $current_row;
  }

  public function prepareRow($current_row) {
    /*
     * Not respecting parent::prepareRow() because it skips menus based on menu
     * machine_names, and we want more control over which menus are imported.
     * It skips the Primary Links menu.  We want to map this menu to


     if (parent::prepareRow($current_row) === FALSE) {
       return FALSE;
     }
    */
    $current_row = $this->mapHrwebMenu($current_row);
    if ($current_row === FALSE) {
      return FALSE;
    }
    return TRUE;
  }
}

class HrwebMenuLinksMigration extends DrupalMenuLinks6Migration {

  public function __construct(array $arguments) {
    parent::__construct($arguments);
  }

  public function preImport() {
    parent::preImport();
    if (!module_exists('site_map')) {
      drupal_set_message("'Site Map' link not added to Footer menu since site_map.module is not installed.", "warning");
    }
    else {
      module_enable(array('site_map'));
    }

    if (!module_exists('contact')) {
      module_enable(array('contact'));
    }

    if (!views_get_view('avc_corner')) {
      drupal_set_message("'From the AVC' link not added to Footer menu, since the corresponding view doesn't exist.", "warning");
    }
  }

  public function prepareRow($current_row) {

    if (parent::prepareRow($current_row) === FALSE) {
      return FALSE;
    }

    $current_row = HrwebMenuMigration::mapHrwebMenu($current_row);
    if ($current_row === FALSE) {
      return FALSE;
    }
    return TRUE;
  }
}