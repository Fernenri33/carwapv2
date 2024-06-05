<?php
session_start();
require_once 'Database.php';
require_once 'User.php';

$LoginMail = $_POST['LoginMail'];
$LoginPassword = $_POST['LoginPassword'];

$user = new User();
$users = $user->getAllUsers();

$authenticated = false;
foreach ($users as $usuario) {
    if ($LoginMail == $usuario->email && $LoginPassword == $usuario->password) {
        // Almacenar información del usuario en la sesión

        $_SESSION['user_id'] = $usuario->ID;
        $_SESSION['user_name'] = $usuario->nombre;
        $_SESSION['user_apellido'] = $usuario->apellidos;
        $_SESSION['user_mail'] = $usuario->email;

        $authenticated = true;
        header("Location: http://localhost/carwap/View/Perfil.php");
        echo("Usuario ingresado correctamente");
        break;
    }
}

if (!$authenticated) {
    include '../View/LoginView.php';
}
?>
