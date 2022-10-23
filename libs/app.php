<?php

require_once "controllers/errorcustom.php";

class App
{
  function __construct()
  {
    echo "<p>Esta es la vista de la clase app</p>";

    // Este parámetro get, es el que tenemos definido como $1 en el htaccess.
    $url = isset($_GET["url"]) ? $_GET["url"] : null;
    $url = rtrim($url, "/");
    $url = explode("/", $url);

    // Llamamos al controlador de la ruta que venga en la url,
    $dirController = "controllers/" . $url[0] . ".php";

    // Si no se ha especificado una ruta, devolvemos main,
    if (strlen($url[0]) === 0) {
      require_once "controllers/main.php";
      $controller = new Main();
    }

    // Si se ha especificado una pero no existe, error.
    if (strlen($url[0]) !== 0 && !file_exists($dirController)) {
      $controller = new ErrorCustom();
    }


    // Si existe devolvemos la vista.
    if (file_exists($dirController)) {
      require_once $dirController;
      $controller = new $url[0];
      $controller->loadModel($url[0]);
    }

    // Si existe método, lo ejecutamos, si no lo dejamos con error php por ahora.
    if (file_exists($dirController) && isset($url[1])) {
      $controller->{$url[1]}();
    }
  }
}
