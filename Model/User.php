<?php

require_once 'Database.php';

class User {
    public $ID;
    public $password;
    public $nombre;
    public $apellidos;
    public $email;
    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->conn;
      }
    
      public function setID($ID) { $this->ID = $ID; }
      public function setPassword($password) { $this->password = $password; }
      public function setNombre($nombre) { $this->nombre = $nombre; }
      public function setApellidos($apellidos) { $this->apellidos = $apellidos; }
      public function setEmail($email) { $this->email = $email; }

      public function GetAllUsers (){

        $sql = "SELECT * FROM usuarios";
        $result = $this->conn->query($sql);
        $users = array();

        while ($row = $result->fetch_assoc()) {
            $user = new User();
            $user->setID($row['ID']);
            $user->setPassword($row['Contraseña']);
            $user->setNombre($row['Nombre']);
            $user->setApellidos($row['apellidos']);
            $user->setEmail($row['Email']);

            $users[] = $user;
        }
        return $users;
      }

    //   public function SearchUser(){
        
    //   }
    }

?>