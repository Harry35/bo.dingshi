<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MY_Model
 *
 * @author d.liu
 */
class MY_Model extends CI_Model {

  protected $_table = NULL;

  function __construct() {
    parent::__construct();

    $this->load->helper('inflector');

    //fetch model table
    $this->_fetch_table();
    if (empty($this->_table)) {
      return false;
    }
  }

  /**
   * Guess the table name by pluralising the model name
   */
  private function _fetch_table() {
    if ($this->_table == NULL) {
      $this->_table = plural(preg_replace('/(_m|_model)?$/', '', strtolower(get_class($this))));
    }
  }

  public function index() {
    return $this->db->get($this->_table)->result();
  }

  /**
   * Fetch a single record based on an arbitrary WHERE call.
   * 
   * Examples of $where: 
   * 1) array('name' => $name, 'title' => $title, 'status' => $status);
   * Produces: WHERE name = 'Joe' AND title = 'boss' AND status = 'active'
   * 2) "name='Joe' AND status='boss' OR status='active'"
   * Produces: WHERE name='Joe' AND status='boss' OR status='active'
   */
  public function getOneBy($where) {
    $query = $this->db->get_where($this->_table, $where, 1);
    return $query->num_rows() > 0 ? $query->row() : NULL;
  }

  /**
   * Fetch an array of records based on an arbitrary WHERE call.
   * 
   * @param type $where :  see function getOneBy($where)
   */
  public function getManyBy($where, $limit = null, $offset = null) {
    return $this->db
        ->get_where($this->_table, $where, $limit, $offset)
        ->result();
  }

  public function insertOrUpdate($data) {

    if (!empty($data['id'])) {
      //update data
      $id = $data['id'];
      unset($data['id']);
      $this->db->update($this->_table, $data, array('id' => $id));
    } else {
      //insert data
      $data['date_creation'] = date('Y-m-d H:i:s');
      $this->db->insert($this->_table, $data);
      $id = $this->db->insert_id();
    }

    return $this->db->affected_rows() > 0 ? $id : false;
  }

}
