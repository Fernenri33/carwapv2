<!DOCTYPE html>
<!-- AutoView.php -->
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Catálogo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://localhost/carwap/View/css/stylesAutoView.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php
    // Incluir el archivo de la clase Auto
    require_once 'C:\xampp\htdocs\carwap\Model\Auto.php';

    // Instanciar la clase Auto para obtener todos los autos
    $autoVista = new Auto();
    $autos = $autoVista->getAll();

    // Verificar si se han recibido autos
    if (count($autos) > 0) {
    ?>
    <div class="bigcontainer">
        <!-- Formulario de filtro -->
        <div class="filter">
            <form id="filterForm">
                <p>Filtro</p>
                <p>Marca</p>
                <!-- Crear checkbox para cada marca -->
                <span>Todas</span> <input type="checkbox" name="todas"> <br>
                <span>Toyota</span> <input type="checkbox" name="marca_toyota"> <br>
                <span style="padding-left: 20px;">Yaris</span> <input type="checkbox" name="modelo_yaris"> <br>
                <span style="padding-left: 20px;">Corolla</span> <input type="checkbox" name="modelo_corolla"> <br>
                <span>Honda</span> <input type="checkbox" name="marca_honda"> <br>
                <span style="padding-left: 20px;">Civic</span> <input type="checkbox" name="modelo_civic"> <br><br>
                <!-- Inputs para filtrar por precio -->
                <label for="minPrecio">Precio mínimo $:</label>
                <input type="number" id="minPrecio" name="minPrecio" min="10000" max="50000" style="width: 60px;" step="10"> <br>
                <label for="maxPrecio">Precio máximo $:</label>
                <input type="number" id="maxPrecio" name="maxPrecio" min="50000" max="100000" style="width: 60px;" step="10"> <br><br>
                <!-- Inputs para filtrar por año -->
                <label for="minAnio">Año mínimo:</label>
                <input type="number" id="minAnio" name="minAnio" min="1990" max="2024" style="width: 50px;"> <br>
                <label for="maxAnio">Año máximo:</label>
                <input type="number" id="maxAnio" name="maxAnio" min="1990" max="2024" style="width: 50px;"> <br><br>

                <input type="submit" value="Enviar"> 

            </form>
        </div>


        <?php
    
    // Verificar si se han recibido datos desde Query.js
    if($_GET['data'] ?? ""){
        $data = $_GET['data'] ?? "";
        $dataDecodificado = json_decode(urldecode($data)); // Decodificar el JSON como un array asociativo
    
        // Mostrar los datos enviados para verificar que se hayan recibido correctamente
        //echo "<h2>Datos enviados:</h2>";
        // echo "<pre>";
        // print_r($dataDecodificado);
        // echo "</pre>";
    
        $autos = $dataDecodificado;
    }
        ?>  
        <!-- Contenedor de autos -->

        <div class="auto-container">
            <?php
            foreach ($autos as $auto) { 
            ?>
                <div class="auto-card">
                    <img src="<?= $auto->ImagenURL ?>" alt="Imagen del auto">
                    <h2><?= $auto->Marca ?> - <?= $auto->Modelo ?></h2>
                    <p>Año: <?= $auto->Año ?></p>
                    <p>Precio: $<?= $auto->Precio ?></p>
                    <p>Descripción: <?= $auto->Descripción ?></p>
                    <input type="button" value="Agregar al carrito">
                    <input type="button" value="Comprar">
                </div>
            <?php
            }
            ?>
        </div>
    </div>
     <!-- Agregar jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Agregar Query.js -->
    <script src="http://localhost/carwap/View/Query.js"></script>

    <?php
    } else {
        echo "No se encontraron autos.";
    }
    ?>
</body>
</html>