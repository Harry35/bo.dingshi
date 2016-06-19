<?php

class Admin extends BaseController {

  public function index() {
    $this->twig->display('resto');
  }

}
