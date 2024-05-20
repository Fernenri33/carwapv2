<!DOCTYPE html>
<!-- CarritoView.php -->
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Carrito</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://localhost/carwap/View/css/AutoSelectStyle.css">   
  </head>
<body>
<?php
include 'Header.php';
// Incluir la clase Auto
require_once 'C:\xampp\htdocs\carwap\Model\Auto.php';

// Obtener el ID del auto desde la URL
$auto_id = $_GET['id'] ?? null;

// Verificar si se proporcionó un ID de auto
if ($auto_id) {
    // Crear una instancia de la clase Auto
    $autoVista = new Auto();
    // Obtener el auto por su ID
    $autos = $autoVista->GetByID($auto_id);

    // Verificar si se encontraron autos
    if (!empty($autos)) {
        // Iterar sobre cada auto y mostrar sus detalles
        foreach ($autos as $auto) {
            ?>
            <div class = "titleAS">
              <h1 class = "mainTitle"><?= $auto->Marca . '-' . $auto->Modelo ?></h1>
            </div>
            
            <div class="container">
                <div class="card">
                    <img src="<?= $auto->ImagenURL ?>" class="card-img-top" alt="Imagen del auto">
                    
                    <div class="card-body">
                        <h5 class="card-title"><?= $auto->Marca . ' ' . $auto->Modelo ?></h5>
                        <p class="card-text">Año: <?= $auto->Año ?></p>
                        <p class="card-text">Precio: <?= $auto->Precio ?></p>
                        <p class="card-text"><?= $auto->Descripción ?></p>
                        <a class="buttonAS" href="Building.php?id=<?= $auto->ID ?>"><input type="button" value="Agregar al carrito"></a><p></p>
                        
                        <a class="buttonAS" href="Building.php?id=<?= $auto->ID ?>"><input type="button" value="Comprar"></a>
                    </div>
                </div>
            </div>
            <?php
        }

    } else {
        echo "<p>No se encontraron autos.</p>";
    }
} else {
    echo "<p>No se proporcionó un ID de auto.</p>";
}
?>
<?php include 'Footer.php'; ?>
</body>
</html>
