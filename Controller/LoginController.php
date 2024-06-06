<?php 

session_start();

if (!isset($_SESSION['user_id'])) {
    // Redirigir a la página de login si el usuario no está logueado
    header("Location: ../View/LoginView.php");
    exit();
}

?>