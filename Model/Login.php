<?php

require_once 'Database.php';
require_once 'User.php';

$LoginMail = $_POST['LoginMail'];
$LoginPassword = $_POST['LoginPassword'];

$user = new User();
$users = $user->getAllUsers();

foreach($users as $usuario){
    if($LoginMail == $usuario->email && $LoginPassword == $usuario->password){
        echo("Usuario ingresado correctamente");
    }else{
        include '../View/LoginView.php';
    }
}

?>