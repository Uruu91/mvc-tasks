<?php
class View
{
  function __construct()
  {
    echo "<p>Vista base</p>";
  }

  /**
   * Renderiza la vista indicada en el parámetro.
   * @param string $viewName
   * @return View
   */
  function render($viewName)
  {
    require_once "views/" . $viewName . ".php";
  }
}
