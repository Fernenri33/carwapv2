<!DOCTYPE html>
<!-- AutoView.php -->
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Catálogo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://localhost/carwap/View/css/stylesAutoView.css">   
</head>
<main>
<body>
    <?php
    include 'Header.php';
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
                <h2>Filtro</h2>
                <h5>Marca</h5>
                <!-- Crear checkbox para cada marca -->
                <span>Todas</span> <input type="checkbox" name="todas"> <br><br>

                <script>
                function toggleModelos(marca) {
                    var modelos = document.getElementById(marca + "-modelos");
                    modelos.style.display = modelos.style.display === "none" ? "block" : "none";
                    }
                </script>

                <span onclick="toggleModelos('toyota')">Toyota</span> <input type="checkbox" name="marca_toyota"> <span class="toggle-icon" onclick="toggleModelos('toyota')">▼</span> <br>
                <div id="toyota-modelos" class="modelo-lista">
                <span style="padding-left: 20px;">Yaris</span> <input type="checkbox" name="modelo_yaris"> <br>
                <span style="padding-left: 20px;">Corolla</span> <input type="checkbox" name="modelo_corolla"> <br><br>
                </div>

                <span onclick="toggleModelos('honda')">Honda</span> <input type="checkbox" name="marca_honda"> <span class="toggle-icon" onclick="toggleModelos('honda')">▼</span> <br>
                <div id="honda-modelos" class="modelo-lista">
                <span style="padding-left: 20px;">Civic</span> <input type="checkbox" name="modelo_civic"> <br><br>
                </div>

                <span onclick="toggleModelos('chevrolet')">Chevrolet</span> <input type="checkbox" name="marca_chevrolet"> <span class="toggle-icon" onclick="toggleModelos('chevrolet')">▼</span> <br>
                <div id="chevrolet-modelos" class="modelo-lista">
                <span style="padding-left: 20px;">Cruze</span> <input type="checkbox" name="modelo_cruze"> <br><br>
                </div>

                <span onclick="toggleModelos('volkswagen')">Volkswagen</span> <input type="checkbox" name="marca_volkswagen"> <span class="toggle-icon" onclick="toggleModelos('volkswagen')">▼</span> <br>
                <div id="volkswagen-modelos" class="modelo-lista">
                <span style="padding-left: 20px;">Jetta</span> <input type="checkbox" name="modelo_jetta"> <br>
                <span style="padding-left: 20px;">Golf</span> <input type="checkbox" name="modelo_golf"> <br><br>
                </div>

                <span onclick="toggleModelos('mazda')">Mazda</span> <input type="checkbox" name="marca_mazda"> <span class="toggle-icon" onclick="toggleModelos('mazda')">▼</span> <br>
                <div id="mazda-modelos" class="modelo-lista">
                <span style="padding-left: 20px;">MX5</span> <input type="checkbox" name="modelo_mx5"> <br><br>
                </div>

                <span onclick="toggleModelos('nissan')">Nissan</span> <input type="checkbox" name="marca_nissan"> <span class="toggle-icon" onclick="toggleModelos('nissan')">▼</span> <br>
                <div id="nissan-modelos" class="modelo-lista">
                <span style="padding-left: 20px;">Versa</span> <input type="checkbox" name="modelo_versa"> <br>
                <span style="padding-left: 20px;">Maxima</span> <input type="checkbox" name="modelo_maxima"> <br><br>
                </div><br>

                <!-- Inputs para filtrar por precio -->
                <label for="minPrecio">Precio mínimo $:</label>
                <input type="number" id="minPrecio" name="minPrecio" min="10000" max="100000" style="width: 80px;" step="10"> <br>
                <label for="maxPrecio">Precio máximo $:</label>
                <input type="number" id="maxPrecio" name="maxPrecio" min="10000" max="100000" style="width: 80px;" step="10"> <br><br>
                <!-- Inputs para filtrar por año -->
                <label for="minAnio">Año mínimo:</label>
                <input type="number" id="minAnio" name="minAnio" min="1990" max="2024" style="width: 65px;"> <br>
                <label for="maxAnio">Año máximo:</label>
                <input type="number" id="maxAnio" name="maxAnio" min="1990" max="2024" style="width: 65px;"> <br><br>

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
                    <div class="cardBody">
                        <h2><?= $auto->Marca ?> - <?= $auto->Modelo ?></h2>
                        <p>Año: <?= $auto->Año ?></p>
                        <p>Precio: $<?= $auto->Precio ?></p>
                        <p>Descripción: <?= $auto->Descripción ?></p>
                        <a href="CarritoView.php?id=<?= $auto->ID ?>"><input type="button" value="Agregar al carrito"></a>
                        <a href="AutoSelect.php?id=<?= $auto->ID ?>"><input type="button" value="Ver más"></a>
                    </div>
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
    <?php include 'Footer.php'; ?>
</body>
</main>
</html>