<?php
// Incluye el archivo Database.php que se encuentra en la carpeta Model.
// Este archivo contiene la definición de la clase Database.
require_once 'Model/Database.php';

// Define la clase TablesController
class TablesController {
  // Declara la propiedad privada $db. Esta será una instancia de la clase Database.
  private $db;

  // Define el constructor de la clase
  public function __construct() {
    // Crea una nueva instancia de la clase Database y la asigna a la propiedad $db.
    $this->db = new Database();
  }

  // Define el método index de la clase
  public function index() {
    // Llama al método getTables de la clase Database para obtener los nombres de todas las tablas en la base de datos.
    // Guarda el resultado en la variable $tables.
    $tables = $this->db->getTables();
    // Incluye el archivo TablesView.php que se encuentra en la carpeta View.
    // Este archivo contiene el código HTML para mostrar los nombres de las tablas.
    require_once 'View/TablesView.php';
  }
}
?>