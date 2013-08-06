<?php
/**
 * Created by JetBrains PhpStorm.
 * User: bwood
 * Date: 7/29/13
 * Time: 6:08 PM
 * To change this template use File | Settings | File Templates.
 */


/**
 * Class HrwebMenuMigration
 *
 */

class HrwebMenuMigration extends DrupalMenu6Migration {
  public function __construct(array $arguments) {
    parent::__construct($arguments);
  }

  public function mapHrwebMenu($current_row) {
    switch($current_row->menu_name) {
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
      default:
        //don't import menus not handled above (like "Navigation," "Development")
        return FALSE;
    }
    return $current_row;
  }

  public function prepareRow($current_row) {
    // Always start your prepareRow implementation with this clause. You need to
    // be sure your parent classes have their chance at the row, and that if
    // they return FALSE (indicating the row should be skipped) you pass that
    // on.

    /*
     * Not respecting parent::prepareRow() because it skips menus based on menu
     * machine_names, and we want more control over which menus are imported.
     * It skips the Primary Links menu.  We want to map this menu to


     if (parent::prepareRow($current_row) === FALSE) {
       return FALSE;
     }
    */
    $current_row = $this->mapHrwebMenu($current_row);
    if($current_row === FALSE) {
      return FALSE;
    }
    return TRUE;
  }
}

class HrwebMenuLinksMigration extends DrupalMenuLinks6Migration {

  public function __construct(array $arguments) {
    parent::__construct($arguments);
  }

  public function prepareRow($current_row) {
    // Always start your prepareRow implementation with this clause. You need to
    // be sure your parent classes have their chance at the row, and that if
    // they return FALSE (indicating the row should be skipped) you pass that
    // on.

    /*
     * Not respecting parent::prepareRow() because it skips menus based on menu
     * machine_names, and we want more control over which menus are imported.


     if (parent::prepareRow($current_row) === FALSE) {
       return FALSE;
     }
    */
    $current_row = HrwebMenuMigration::mapHrwebMenu($current_row);
    if($current_row === FALSE) {
      return FALSE;
    }
    return TRUE;
  }
}