<?php
    require_once 'Database.php';
    require_once 'Auto.php';
    
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