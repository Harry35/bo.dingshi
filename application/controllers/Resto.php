<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Resto extends MY_Controller {

    public function __construct() 
    {
        parent::__construct();
        $this->load->model('resto_model');
    }
    
    public function restos() 
    {
        $restos = $this->resto_model->findRestos();        
        $this->twig->display('listRestos', [
            'restos'    => $restos
        ]);
    }

    public function edit($restoId) 
    {
        $resto = $this->resto_model->findRestoById($restoId); 
        $this->twig->display('editResto', [
            'resto'     => $resto
        ]);
    }

}
