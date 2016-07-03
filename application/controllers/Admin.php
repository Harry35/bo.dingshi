<?php

class Admin extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('resto');
    }
    
    public function index() {
      $this->twig->display('resto');
    }

    
    public function restos() {
        $restos = $this->resto->findRestos();
        var_dump($restos);die;
    }
    
    public function resto($id) {
        
    }
}
