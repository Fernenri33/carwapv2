<?php
// AutoController.php
require_once 'Model/Auto.php';

class AutoController {
  private $model;

  public function __construct() {
    $this->model = new Auto();
  }

  public function index() {
    $autos = $this->model->getAll();
    require_once 'View/Home.php';
  }
}
?>