<?php
// Auto.php
require_once 'Database.php'; // Asegúrate de tener este archivo en la misma carpeta o ajusta la ruta según sea necesario

class Auto {
  public $ID;
  public $Modelo;
  public $Marca;
  public $Año;
  public $Precio;
  public $Descripción;
  public $ImagenURL;
  private $conn; // Conexión a la base de datos

  // En el constructor, crea una nueva instancia de Database y obtén la conexión
  public function __construct() {
    $db = new Database();
    $this->conn = $db->conn;
  }

  // Agrega métodos para establecer y obtener los valores de las propiedades
  public function setID($ID) { $this->ID = $ID; }
  public function setModelo($Modelo) { $this->Modelo = $Modelo; }
  public function setMarca($Marca) { $this->Marca = $Marca; }
  public function setAño($Año) { $this->Año = $Año; }
  public function setPrecio($Precio) { $this->Precio = $Precio; }
  public function setDescripción($Descripción) { $this->Descripción = $Descripción; }
  public function setImagenURL($ImagenURL) { $this->ImagenURL = $ImagenURL; }

  public function getAll() {
    // Crea la consulta SQL
    $sql = "SELECT * FROM autos";
    // Ejecuta la consulta y guarda el resultado
    $result = $this->conn->query($sql);
    // Crea un array para almacenar los objetos Auto
    $autos = array();
    // Recorre cada fila del resultado
    while ($row = $result->fetch_assoc()) {
      // Crea un nuevo objeto Auto y establece sus propiedades
      $auto = new Auto();
      $auto->setID($row['ID']);
      $auto->setModelo($row['Modelo']);
      $auto->setMarca($row['Marca']);
      $auto->setAño($row['Año']);
      $auto->setPrecio($row['Precio']);
      $auto->setDescripción($row['Descripción']);
      $auto->setImagenURL($row['ImagenURL']);
      // Agrega el objeto Auto al array
      $autos[] = $auto;
    }
    // Devuelve el array de objetos Auto
    return $autos;
  }  

  public function filtrarAutos($todas, $marca_toyota, $modelo_yaris, $modelo_corolla, $marca_honda, $modelo_civic, $minPrecio, $maxPrecio, $minAnio, $maxAnio) {
    // Si "Todas" está seleccionada, simplemente devolver todos los autos
    if ($todas == "true") {
        return $this->getAll();
    } else {
        // Crear una consulta SQL base
        $sql = "SELECT * FROM autos WHERE ";

        // Array para almacenar las condiciones del filtro
        $conditions = array();

        // Construir las condiciones del filtro basadas en las selecciones del usuario
        if ($marca_toyota == "true") {
            $conditions[] = "Marca = 'Toyota'";
        }
        if ($modelo_yaris == "true") {
            $conditions[] = "Modelo = 'Yaris'";
        }
        if ($modelo_corolla == "true") {
            $conditions[] = "Modelo = 'Corolla'";
        }
        if ($marca_honda == "true") {
            $conditions[] = "Marca = 'Honda'";
        }
        if ($modelo_civic == "true") {
            $conditions[] = "Modelo = 'Civic'";
        }

        // Agregar condiciones para el rango de precio y año si se proporcionan
        if ($minPrecio && $maxPrecio) {
            $conditions[] = "Precio >= $minPrecio AND Precio <= $maxPrecio";
        }
        if ($minAnio && $maxAnio) {
            $conditions[] = "Año >= $minAnio AND Año <= $maxAnio";
        }

        // Combinar todas las condiciones con "AND" y agregarlas a la consulta SQL
        $sql .= implode(" AND ", $conditions);

        // Ejecutar la consulta y devolver los resultados
        $result = $this->conn->query($sql);
        $autos = array();
        while ($row = $result->fetch_assoc()) {
            $auto = new Auto();
            $auto->setID($row['ID']);
            $auto->setModelo($row['Modelo']);
            $auto->setMarca($row['Marca']);
            $auto->setAño($row['Año']);
            $auto->setPrecio($row['Precio']);
            $auto->setDescripción($row['Descripción']);
            $auto->setImagenURL($row['ImagenURL']);
            $autos[] = $auto;
        }
        return $autos;
    }
}

}
?>