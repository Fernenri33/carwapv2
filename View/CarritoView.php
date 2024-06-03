<!DOCTYPE html>
<!-- CarritoView.php -->
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Carrito</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  </head>
<body>
    <style>
        .TableContenedor{
            margin-top: 50px;
            display: flex;
            justify-content: center;
        }
        .table.table-striped{
            width: 100%;
        }

        .table th, .table td {
            text-align: center;
        }
    </style>
<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    // Redirigir a la página de login si el usuario no está logueado
    echo("Logeese por favor");
    header("Location: ../View/LoginView.php");
    exit();
}

// echo($_SESSION['user_id']);
// echo($_SESSION['user_name']);

require_once '../Model/Database.php';
require_once '../Model/Carrito.php';

include 'Header.php';
// Incluir la clase Auto
require_once 'C:\xampp\htdocs\carwap\Model\Auto.php';

// Obtener el ID del auto desde la URL
$auto_id = $_GET['id'] ?? null;

// Verificar si se proporcionó un ID de auto

    $carrito = new Carrito();
    $carritoItems = $carrito->GetCarritoByID($_SESSION['user_id']);

    ?>
    <div class="TableContenedor">
    <table class="table table-striped">
        <thead>
        <tr>
        <th scope="col">Marca</th>
        <th scope="col">Modelo</th>
        <th scope="col">Año</th>
        <th scope="col">Precio</th>    
        <th scope="col">Eliminar</th>
        </tr>
        </thead>
        <tbody>
        
    <?php

    $autoVista = new Auto();

        foreach ($carritoItems as $carritoItem) {
            
                $carritoItem->AutoID;
                $carritoItem->Precio;
                $autos = $autoVista->GetByID($carritoItem->AutoID);

                if (!empty($autos)) {
                    foreach ($autos as $auto) {
                        ?>
                            <tr>
                            <td><?= $auto->Marca?></td>
                            <td><?= $auto->Modelo?></td>
                            <td><?= $auto->Año?></td>
                            <td><?= $auto->Precio?></td>
                            <td><button type="button" class="btn btn-danger">Eliminar</button></td>
                            </tr>
                        <?php
                    }

                } else {
                    echo "<p>No se encontraron autos.</p>";
                }
        }
?>
            </tbody>
        </table>
    </div>

<?php include 'Footer.php'; ?>
</body>
</html>
