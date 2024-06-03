<?php
    require_once 'Database.php';
    class Carrito{
        public $ID;
        public $UsuarioID;
        public $AutoID;
        public $Precio;
        private $conn;

        public function __construct() {
            $db = new Database();
            $this->conn = $db->conn;
        }

        public function setID($ID) {$this ->ID = $ID;}
        public function setUsuarioID($UsuarioID) {$this ->UsuarioID = $UsuarioID;}
        public function setAutoID($AutoID) {$this ->AutoID = $AutoID;}
        public function setPrecio($Precio) {$this ->Precio = $Precio;}

        public function GetAllCarrito (){
            $sql = "SELECT * FROM carrito";
            $result = $this->conn->query($sql);
            $carritoElementos = array();

            while ($row = $result->fetch_assoc()) {
                $carrito = new Carrito();
                $carrito->setID($row['id']);
                $carrito->setUsuarioID($row['UsuarioID']);
                $carrito->setAutoID($row['AutoID']);
                $carrito->setPrecio($row['Precio']);

                $carritoElementos[] = $carrito;
            }
            return $carritoElementos;
        }

        public function GetCarritoByID($id) {
            // Crear la consulta SQL para obtener el auto por su ID
            $sql = "SELECT * FROM carrito WHERE UsuarioID = $id";

            $result = $this->conn->query($sql);
            $carritoElementos = array();
            
            if ($result->num_rows > 0) {

                // Crear un nuevo objeto Auto y establecer sus propiedades
                while ($row = $result->fetch_assoc()) {

                    $carrito = new Carrito();

                    $carrito->setID($row['id']);
                    $carrito->setUsuarioID($row['UsuarioID']);
                    $carrito->setAutoID($row['AutoID']);
                    $carrito->setPrecio($row['Precio']);
                    
                    $carritoElementos[] = $carrito;
                }
                // Devolver el objeto Auto
                return $carritoElementos;
            } else {
                // Si no se encuentra ningún auto con el ID proporcionado, devolver null
                return null;
            }
        }
    }
?>