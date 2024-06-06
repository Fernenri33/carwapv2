<?php
// Define la clase Database
class Database {
  // Declara las propiedades privadas para los detalles de la base de datos
<<<<<<< HEAD
  private $servername = "localhost";
  private $username = "root";
  private $password = "22067000";
=======
  private $servername = "127.0.0.1";
  private $username = "root";
  private $password = "";
>>>>>>> master
  private $dbname = "carwap";
  // Declara la propiedad pública para la conexión a la base de datos
  public $conn;

  // Define el constructor de la clase
  public function __construct() {
    // Crea una nueva conexión a la base de datos
    $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

    // Verifica si la conexión fue exitosa
    if ($this->conn->connect_error) {
      // Si la conexión falló, termina la ejecución del script y muestra un mensaje de error
      die("Conexión fallida: " . $this->conn->connect_error);
    }
  }

  // Define el método para obtener los nombres de todas las tablas en la base de datos
  public function getTables() {
    // Crea la consulta SQL
    $sql = "SHOW TABLES FROM $this->dbname";
    // Ejecuta la consulta y guarda el resultado
    $result = $this->conn->query($sql);
    // Devuelve el resultado
    return $result;
  }
  // Define el método para obtener los datos de una tabla específica
  public function getTableData($table) {
    // Crea la consulta SQL
    $query = "SELECT * FROM $table";
    // Ejecuta la consulta y guarda el resultado
    $table_result = $this->conn->query($query);
    // Devuelve el resultado
    
    return $table_result;
  }
}
?>