<?php

class TaskStatus extends Controller
{
  function __construct()
  {
    parent::__construct();
    $this->view->render("taskstatus/index");
    echo "<br> vista taskstatus";
  }
}