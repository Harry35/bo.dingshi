<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Alerts_model
 *
 * @author d.liu
 */
class Alerts_model extends CI_Model {

  public function add($message, $status, $dismissible = true) {
    $_SESSION['page_alerts'][] = array(
      'message' => $message,
      'status' => $status,
      'dismissible' => $dismissible,
    );
  }

  public function display() {
    $alerts = empty($_SESSION['page_alerts']) ? array() : $_SESSION['page_alerts'];
    $_SESSION['page_alerts'] = array();

    return $alerts;
  }

}
