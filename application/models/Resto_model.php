<?php

/**
 * Description of Resto
 *
 * @author Xu
 */
class Resto_model extends MY_Model {

  public function __construct() {
    parent::__construct();
  }

  /**
   * 
   * @param int $id
   * 
   * @return array
   */
  public function findRestoById($id) {
    $this->db->select('*');
    $this->db->from('resto');
    $this->db->where('id', $id);
    $query = $this->db->get();

    $resto = $query->row_array();
    $resto['menu_pics'] = explode(";", $resto['menu_pics']);
    $resto['tel'] = explode(";", $resto['tel']);
    $resto['tags'] = $this->findRestoTagsByRestoId($resto['id']);
    $resto['foods'] = $this->findFoodsByRestoId($resto['id']);
    $resto['reviews'] = $this->findReviewsByRestoId($resto['id']);
    $resto['deliveries'] = $this->findDeliveriesByRestoId($resto['id']);

    return $resto;
  }

  /**
   * 
   * @param array $arrWhere
   * 
   * @return array|boolean
   */
  public function findRestos($arrWhere = null) {
    $this->db->select('*');
    $this->db->from('resto');
    if (!is_null($arrWhere)) {
      foreach ($arrWhere as $field => $value) {
        $this->db->where($field, $value);
      }
    }
    $query = $this->db->get();
    $result = $query->result_array();
    if (empty($result)) {
      return false;
    }

    $restos = array();
    foreach ($result as &$res) {
      $res['menu_pics'] = explode(";", $res['menu_pics']);
      $res['tel'] = explode(";", $res['tel']);
      $res['tags'] = $this->findRestoTagsByRestoId($res['id']);
      $res['foods'] = $this->findFoodsByRestoId($res['id']);
      $res['reviews'] = $this->findReviewsByRestoId($res['id']);
      $res['deliveries'] = $this->findDeliveriesByRestoId($res['id']);
      $restos[] = $res;
    }

    return $restos;
  }

  /**
   * 
   * @param int    $id
   * @return array|boolean
   */
  public function findRestoTagsByRestoId($id) {
    $this->db->select('*');
    $this->db->from('resto_tag');
    $this->db->where('resto_id', $id);
    $query = $this->db->get();
    $result = $query->result_array();

    if (empty($result)) {
      return false;
    }

    $tags = array();
    foreach ($result as $res) {
      $tag = array();
      $tag['id'] = $res['id'];
      $tag['tag'] = $res['tag'];
      $tags[] = $tag;
    }

    return $tags;
  }

  /**
   * 
   * @param int    $id
   * 
   * @return array|boolean
   */
  public function findFoodsByRestoId($id) {
    $this->db->select('*');
    $this->db->from('resto_food');
    $this->db->where('resto_id', $id);
    $query = $this->db->get();
    $result = $query->result_array();

    if (empty($result)) {
      return false;
    }

    $foods = array();
    foreach ($result as $res) {
      $food = array();
      $food['id'] = $res['id'];
      $food['name'] = $res['name'];
      $food['price'] = $res['price'];
      $food['pic'] = $res['pic'];
      $food['likes'] = $this->findTotalLikesByIdAndType($res['id'], "food");
      $foods[] = $food;
    }

    return $foods;
  }
  
  /**
   * 
   * @param int    $id
   * 
   * @return array|boolean
   */
  public function findFoodByFoodId($id) {
    $this->db->select('*');
    $this->db->from('resto_food');
    $this->db->where('id', $id);
    $query = $this->db->get();
    $food = $query->row_array();

    if (empty($food)) {
      return false;
    }
    
    return $food;
  }

  /**
   * 
   * @param int    $id
   * 
   * @return array|boolean
   */
  public function findDeliveriesByRestoId($id) {
    $this->db->select('*');
    $this->db->from('resto_delivery');
    $this->db->where('resto_id', $id);
    $query = $this->db->get();
    $result = $query->result_array();

    if (empty($result)) {
      return false;
    }

    $deliveries = array();
    foreach ($result as $res) {
      $deliveries[] = $res['zipcode'];
    }

    return $deliveries;
  }

  /**
   * 
   * @param int       $id
   * @param string    $type
   * 
   * @return int
   */
  public function findTotalLikesByIdAndType($id, $type) {
    $this->db->select('COUNT(id) as count');
    $this->db->from('resto_like');
    $this->db->where('target_id', $id);
    $this->db->where('type', $type);
    $query = $this->db->get();
    $result = $query->row_array();

    return $result['count'];
  }

  /**
   * 
   * @param int    $id
   * 
   * @return array|boolean
   */
  public function findReviewsByRestoId($id) {
    $this->db->select('rre.*, u.*');
    $this->db->from('resto_review  rre');
    $this->db->where('rre.resto_id', $id);
    $this->db->join('user  u', 'u.id = rre.user_id', 'left');
    $this->db->order_by('rre.created', 'DESC');
    $query = $this->db->get();
    $result = $query->result_array();

    if (empty($result)) {
      return false;
    }

    $reviews = array();
    foreach ($result as $res) {
        $review = array();
        $review['id'] = $res['id'];
        $review['text'] = $res['text'];
        $review['created'] = $res['created'];
        $review['likes'] = $this->findTotalLikesByIdAndType($review['id'], "review");
        $review['user'] = $res['username'];
        $reviews[] = $review;
    }

    return $reviews;
  }

  /**
   * 
   * @param array $data
   * 
   * @return int
   */
  public function insertResto($data) {
    $result = $this->db->insert('resto', $data);

    if (empty($result)) {
      return false;
    }

    return $this->db->insert_id();
  }

  /**
   * 
   * @param array $data
   * 
   * @return int|boolean
   */
  public function insertFood($data) {
    $result = $this->db->insert('resto_food', $data);

    if (empty($result)) {
      return false;
    }

    return $this->db->insert_id();
  }

  /**
   * 
   * @param array $data
   * 
   * @return int|boolean
   */
  public function insertTag($data) {
    $result = $this->db->insert('resto_tag', $data);

    if (empty($result)) {
      return false;
    }

    return $this->db->insert_id();
  }

  /**
   * 
   * @param array $data
   * 
   * @return int|boolean
   */
  public function insertDelivery($data) {
    $result = $this->db->insert('resto_delivery', $data);

    if (empty($result)) {
      return false;
    }

    return $this->db->insert_id();
  }

  /**
   * 
   * @param array $where
   */
  private function updateWhere($where) {
    if (is_array($where[0])) {
      foreach ($where as $field => $value) {
        $this->db->where($field, $value);
      }
    } else {
      $field = array_keys($where);
      $value = array_values($where);
      $this->db->where($field[0], $value[0]);
    }
  }

  /**
   * 
   * @param array $data
   * @param array $where
   */
  public function updateResto($data, $where) {
    $this->updateWhere($where);
    $this->db->update('resto', $data);
  }

  /**
   * 
   * @param array $data
   * @param array $where
   */
  public function updateFood($data, $where) {
    $this->updateWhere($where);
    $this->db->update('resto_food', $data);
  }

  /**
   * 
   * @param array $data
   * @param array $where
   */
  public function updateTag($data, $where) {
    $this->updateWhere($where);
    $this->db->update('resto_tag', $data);
  }

  /**
   * 
   * @param array $data
   * @param array $where
   */
  public function updateDelivery($data, $where) {
    $this->updateWhere($where);
    $this->db->update('resto_delivery', $data);
  }

  /**
   * 
   * @param int $id
   */
  public function deleteRestoById($id) {
    $this->db->delete('resto', array('id' => $id));
  }

  /**
   * 
   * @param int $id
   */
  public function deleteFoodById($id) {
    $this->db->delete('resto_food', array('id' => $id));
  }

  /**
   * 
   * @param int $restoId
   */
  public function deleteFoodByRestoId($restoId) {
    $this->db->delete('resto_food', array('resto_id' => $restoId));
  }

  /**
   * 
   * @param int $id
   */
  public function deleteTagById($id) {
    $this->db->delete('resto_tag', array('id' => $id));
  }

  /**
   * 
   * @param int $restoId
   */
  public function deleteTagByRestoId($restoId) {
    $this->db->delete('resto_tag', array('resto_id' => $restoId));
  }

  /**
   * 
   * @param int $id
   */
  public function deleteDeliveryById($id) {
    $this->db->delete('resto_delivery', array('id' => $id));
  }

  /**
   * 
   * @param int $restoId
   */
  public function deleteDeliveryByRestoId($restoId) {
    $this->db->delete('resto_delivery', array('resto_id' => $restoId));
  }

}
