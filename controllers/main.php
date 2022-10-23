<?php

Class Main extends Controller{
  function __construct()
  {
    parent::__construct();
    echo "<p>Este es el controlador Main</p>";
    $this->view->render("main/index");
  }

  public function saludo(){
    echo "<p>Ola k ase</p>";
  }
}
