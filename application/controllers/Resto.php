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
    
    public function add()
    {
        $this->twig->display('addResto');
    }

    public function edit($restoId) 
    {
        $resto = $this->resto_model->findRestoById($restoId); 
        $this->twig->display('editResto', [
            'resto'     => $resto
        ]);
    }
    
    public function foods($restoId)
    {
        $foods = $this->resto_model->findFoodsByRestoId($restoId);
        $this->twig->display('listFoods', [
            'foods'     => $foods,
            'restoId'   => $restoId
        ]);
    }
    
    public function addFood($restoId)
    {
        $this->twig->display('addFood', [
            'restoId'   => $restoId
        ]);
    }
    
    public function editFood($restoId, $foodId)
    {
        $food = $this->resto_model->findFoodByFoodId($foodId);
        $this->twig->display('editFood', [
            'restoId'   => $restoId,
            'food'      => $food
        ]);
    }

}
