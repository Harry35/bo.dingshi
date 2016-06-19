<?php

$config = array(
  'game/signup' => array(
    array('field' => 'lastname', 'label' => 'Prénom', 'rules' => 'trim|required'),
    array('field' => 'firstname', 'label' => 'Nom', 'rules' => 'trim|required'),
    array('field' => 'email', 'label' => 'Email', 'rules' => 'trim|required|valid_email'),
    array('field' => 'boucherie_name', 'label' => 'Nom de votre boucherie', 'rules' => 'trim'),
    array('field' => 'boucherie_city', 'label' => 'Ville de votre boucherie', 'rules' => 'trim'),
    array('field' => 'boucherie_zip', 'label' => 'CP de votre boucherie', 'rules' => 'numeric'),
    array('field' => 'accept_terms', 'label' => 'Acceptataion du réglement', 'rules' => 'required'),
  )
);




