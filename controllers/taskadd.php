<?php

class TaskAdd extends Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->view->render("taskadd/index");
    echo "<br> vista taskadd";
  }

  /**
   * Crea una nota
   * @param mixed[] $params
   */
  public function createNote()
  {
    echo "<p>Nota creada</p>";
    $this->model->insertNote();
  }
}
