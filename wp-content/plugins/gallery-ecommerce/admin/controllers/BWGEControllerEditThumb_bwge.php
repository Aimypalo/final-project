<?php

class BWGEControllerEditThumb_bwge {
  ////////////////////////////////////////////////////////////////////////////////////////
  // Events                                                                             //
  ////////////////////////////////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////////////////
  // Constants                                                                          //
  ////////////////////////////////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////////////////
  // Variables                                                                          //
  ////////////////////////////////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////////////////
  // Constructor & Destructor                                                           //
  ////////////////////////////////////////////////////////////////////////////////////////
  public function __construct() {
  }
  ////////////////////////////////////////////////////////////////////////////////////////
  // Public Methods                                                                     //
  ////////////////////////////////////////////////////////////////////////////////////////
  public function execute() {
    $type = (isset($_GET['type']) ? esc_html($_GET['type']) : 'display');
    $edit_type = (isset($_GET['edit_type']) ? esc_html($_GET['edit_type']) : '');
    $image_id = (isset($_GET['image_id']) ? esc_html($_GET['image_id']) : 0);
    $this->display($type);
  }

  public function display($type) {
    require_once WD_BWGE_DIR . "/admin/models/BWGEModelEditThumb_bwge.php";
    $model = new BWGEModelEditThumb_bwge();
    require_once WD_BWGE_DIR . "/admin/views/BWGEViewEditThumb_bwge.php";
    $view = new BWGEViewEditThumb_bwge($model);
    $view->$type();
  }

  ////////////////////////////////////////////////////////////////////////////////////////
  // Getters & Setters                                                                  //
  ////////////////////////////////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////////////////
  // Private Methods                                                                    //
  ////////////////////////////////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////////////////
  // Listeners                                                                          //
  ////////////////////////////////////////////////////////////////////////////////////////
}