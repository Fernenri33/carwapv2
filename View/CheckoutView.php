<?php
include 'Header.php';

require_once '../Model/Carrito.php';
require_once '../Model/Auto.php';

//session_start(); // Asegúrate de que la sesión esté iniciada

// Verificar si el usuario está autenticado
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php"); // Redirigir al usuario a la página de inicio de sesión si no está autenticado
    exit();
}

$carrito = new Carrito();
$user_id = $_SESSION['user_id'];
$carritoItems = $carrito->GetCarritoByID($user_id); // Obtener los elementos del carrito del usuario

$autoVista = new Auto();
$carritoItems = $carrito->GetCarritoByID($_SESSION['user_id']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Estilo adicional */
        .carrito-table th, .carrito-table td {
            vertical-align: middle;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Checkout</h1>

        <div class="table-responsive">
            <table class="table table-striped carrito-table">
                <thead>
                    <tr>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Año</th>
                        <th>Precio</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($carritoItems as $carritoItem): ?>
                        <?php 
                        $autos = $autoVista->GetByID($carritoItem->AutoID);
                        if (!empty($autos)) {
                            foreach ($autos as $auto) {
                                ?>
                                <tr>
                                    <td><?= $auto->Marca ?></td>
                                    <td><?= $auto->Modelo ?></td>
                                    <td><?= $auto->Año ?></td>
                                    <td>$<?= $auto->Precio ?></td>
                                </tr>
                                <?php
                            }
                        }
                        ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        
        <a href="CompraExitosa.php" class="btn btn-primary">Confirmar compra</a>
        <a href="CarritoView.php" class="btn btn-secondary">Volver al carrito</a>
    </div>

    <footer>
    <?php include 'Footer.php'; ?>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

