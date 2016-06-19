<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BaseController
 *
 * @author d.liu
 */
class BaseController extends CI_Controller {

  private $pageData = array();

  //put your code here
  public function __construct() {
    parent::__construct();
  }

  protected function addData($key, $value) {
    $this->pageData[$key] = $value;
  }

  protected function render($page, $layout = 'layout_default') {
    //set page data
    $this->pageData['page'] = $page;
    $this->pageData['page_alerts'] = $this->alertsM->display();

    $this->load->view('layouts/' . $layout, $this->pageData);
  }

}

/**
 * Description of AdminController
 *
 * @author d.liu
 */
//class AdminController extends CI_Controller {
//
//  //put your code here
//  public function __construct() {
//    parent::__construct();
//  }
//
//}
