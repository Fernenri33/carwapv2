<?php 
require_once '../Model/Database.php';
require_once '../Model/Carrito.php';
require_once '../Model/Auto.php';

$carrito = new Carrito();
$id = $_GET['id'];
$success = $carrito->deleteCarritoByID($id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Carrito</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <?php if ($success): ?>
                    <div class="alert alert-success" role="alert">
                        Elemento eliminado exitosamente.
                    </div>
                <?php else: ?>
                    <div class="alert alert-danger" role="alert">
                        Error al eliminar el elemento.
                    </div>
                <?php endif; ?>
                <a href="CarritoView.php" class="btn btn-primary">Volver a la lista de carritos</a>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

