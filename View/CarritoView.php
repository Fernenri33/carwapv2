<?php
include 'Header.php';
// session_start();

if (!isset($_SESSION['user_id'])) {
    // Redirigir a la página de login si el usuario no está logueado
    echo("Logeese por favor");
    header("Location: ../View/LoginView.php");
    exit();
}

$user_id = $_SESSION['user_id'];

require_once '../Model/Database.php';
require_once '../Model/Carrito.php';
require_once '../Model/Auto.php';


// Verificar si se proporcionó un ID de auto

    $carrito = new Carrito();

    $auto_id = $_GET['id'] ?? null;

    if ($auto_id) {
        
    // Crear una instancia de la clase Auto
    $autoVista = new Auto();

    //Evitar preductos duplicados
    $autoselect = $autoVista->GetByID($auto_id);

    // Obtener el auto por su ID
    $autoselect = $autoVista->GetByID($auto_id);
    }   

    if (!empty($autoselect)) {
        
        $carrito = new Carrito();
        $usuarioID = $_SESSION['user_id'];

        foreach ($autoselect as $autonew) {
            // Verificar si el auto ya está en el carrito
            if (!$carrito->existsInCarrito($usuarioID, $autonew->ID)) {
                $carrito->createCarrito($usuarioID, $autonew->ID, $autonew->Precio);
                $message = '<div class="alert alert-success" role="alert">Auto agregado al carrito</div>';
            } else {
                $message = '<div class="alert alert-warning" role="alert">El auto ya está en el carrito</div>';
            }
        }
    }  

    $carritoItems = $carrito->GetCarritoByID($_SESSION['user_id']);

    ?>

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
        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        .buttons{
            display: flex;
            justify-content: center;
        }
    </style>


    <?php if (!empty($message)): ?>
        <?= $message ?>
    <?php endif; ?>

    <div class="TableContenedor">
    <table class="table table-striped">
        <thead>
        <tr>
        <th scope="col">Marca</th>
        <th scope="col">Modelo</th>
        <th scope="col">Año</th>
        <th scope="col">Precio</th>
        <th scope="col">Comprar</th>
        <th scope="col">Eliminar</th>
        </tr>
        </thead>
        <tbody>
        
    <?php
// Obtener el ID del auto desde la URL


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

                            <td>
                                <a class="btn btn-success" href="CheckoutIndividual.php?id=<?= $carritoItem->AutoID ?>">Comprar</a>
                            </td>
                            
                            <td>
                                <a class="btn btn-danger" href="DeleteCarrito.php?id=<?= $carritoItem->ID ?>">Eliminar</a>
                            </td>

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
    <br><br>


    <div class="buttons">

    <?php 
    $autoVista
    ?>
    
    <a class="btn btn-success" href="CheckoutView.php">Comprar todo</a>

    </div>


<footer>
<?php include 'Footer.php'; ?>
</footer>

</body>
</html>
