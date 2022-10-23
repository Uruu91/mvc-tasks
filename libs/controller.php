<?php

class Controller{
  function __construct()
  {
    echo "<p>Soy el controlador que todo controla</p>";
    $this->view = new View();
  }

  function loadModel($model){
    $url = "models/".$model."model.php";
    if(file_exists($url)){
      require $url;
      $modelName = $model."Model";
      var_dump($modelName);
      $this->model = new $modelName();
    }
  }
}
