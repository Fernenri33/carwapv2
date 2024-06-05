<?php

session_start(); // Asegúrate de que la sesión esté iniciada

// Verifica si la sesión está abierta
if (isset($_SESSION['user_id'])) {
    $linkText = "Ver perfil";
    $linkUrl = "Perfil.php"; // Cambia esto al URL correcto de la página de perfil
} else {
    $linkText = "Iniciar sesión";
    $linkUrl = "../View/LoginView.php"; // URL de la página de inicio de sesión
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/carwap/View/css/headerstyle.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <main class="Principal">
        <header class="divHeader">
            <nav class="navegador">
                <a class="a" href="Home.php">
                    <img src="..\View\img\logo.jpg" alt="logo carwap" class="logo">
                </a>
                <a href="AutoView.php"><input type="button" class="btn btn-light" value="Comprar"></a>
                <a href="Vender.php"><input type="button" class="btn btn-light" value="Vender"></a>
                <a href="Conocenos.php"><input type="button" class="btn btn-light" value="Conócenos"></a>
            </nav>
            <div class="log">
                <a href="<?= $linkUrl ?>"><input type="button" class="btn btn-light" value="<?= $linkText ?>"></a>
                <a href="../View/CarritoView.php">
                    <img src="..\View\img\cart-fill.svg" alt="logo carwap" class="logobasket">
                </a>
            </div> 
        </header>
    </main>
</body>
</html>

