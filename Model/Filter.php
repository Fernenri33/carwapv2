<?php
//Filter.php
require_once 'Database.php';
require_once 'Auto.php';

// Obtener los datos del formulario
if (isset($_POST['todas'], $_POST['marca_toyota'], $_POST['modelo_yaris'], $_POST['modelo_corolla'], $_POST['marca_honda'], $_POST['modelo_civic'], $_POST['minPrecio'], $_POST['maxPrecio'], $_POST['minAnio'], $_POST['maxAnio'])) {
    $todas = $_POST['todas'];
    $marca_toyota = $_POST['marca_toyota'];
    $modelo_yaris = $_POST['modelo_yaris'];
    $modelo_corolla = $_POST['modelo_corolla'];
    $marca_honda = $_POST['marca_honda'];
    $modelo_civic = $_POST['modelo_civic'];
    $minPrecio = $_POST['minPrecio'];
    $maxPrecio = $_POST['maxPrecio'];
    $minAnio = $_POST['minAnio'];
    $maxAnio = $_POST['maxAnio'];

    $autoModelo = new Auto();
    $autosFiltrados = $autoModelo->filtrarAutos($todas, $marca_toyota, $modelo_yaris, $modelo_corolla, $marca_honda, $modelo_civic, $minPrecio, $maxPrecio, $minAnio, $maxAnio);
    $autosJson = json_encode($autosFiltrados);
    header('Content-Type: application/json');
    echo $autosJson;
} else {
    $autoModelo = new Auto();
    $autosFiltrados = $autoModelo->filtrarAutos($todas, $marca_toyota, $modelo_yaris, $modelo_corolla, $marca_honda, $modelo_civic, $minPrecio, $maxPrecio, $minAnio, $maxAnio);
    $autosJson = json_encode($autosFiltrados);
    header('Content-Type: application/json');
    echo "error";
}
?>