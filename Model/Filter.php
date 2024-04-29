<?php
//Filter.php
require_once 'Database.php';
require_once 'Auto.php';

// Obtener los datos del formulario
if (isset($_POST['todas'], $_POST['marca_toyota'], $_POST['modelo_yaris'], $_POST['modelo_corolla'], $_POST['marca_honda'], $_POST['modelo_civic'], $_POST['marca_chevrolet'],$_POST['modelo_cruze'],$_POST['marca_volkswagen'],$_POST['modelo_jetta'],$_POST['modelo_golf'],$_POST['marca_mazda'],$_POST['modelo_mx5'],$_POST['marca_nissan'],$_POST['modelo_versa'],$_POST['modelo_maxima'], $_POST['minPrecio'], $_POST['maxPrecio'], $_POST['minAnio'], $_POST['maxAnio'])) {
    $todas = $_POST['todas'];
    $marca_toyota = $_POST['marca_toyota'];
    $modelo_yaris = $_POST['modelo_yaris'];
    $modelo_corolla = $_POST['modelo_corolla'];

    $marca_honda = $_POST['marca_honda'];
    $modelo_civic = $_POST['modelo_civic'];

    $marca_chevrolet = $_POST['marca_chevrolet'];
    $modelo_cruze = $_POST['modelo_cruze'];

    $marca_volkswagen = $_POST['marca_volkswagen'];
    $modelo_jetta = $_POST['modelo_jetta'];
    $modelo_golf = $_POST['modelo_golf'];

    $marca_mazda = $_POST['marca_mazda'];
    $modelo_mx5 = $_POST['modelo_mx5'];

    $marca_nissan = $_POST['marca_nissan'];
    $modelo_versa = $_POST['modelo_versa'];
    $modelo_maxima = $_POST['modelo_maxima'];

    $minPrecio = $_POST['minPrecio'];
    $maxPrecio = $_POST['maxPrecio'];
    $minAnio = $_POST['minAnio'];
    $maxAnio = $_POST['maxAnio'];

    $autoModelo = new Auto();
    $autosFiltrados = $autoModelo->filtrarAutos($todas, $marca_toyota, $modelo_yaris, $modelo_corolla, $marca_honda, $modelo_civic, $marca_chevrolet, $modelo_cruze, $marca_volkswagen, $modelo_jetta, $modelo_golf, $marca_mazda, $modelo_mx5, $marca_nissan, $modelo_versa, $modelo_maxima,  $minPrecio, $maxPrecio, $minAnio, $maxAnio);
    $autosJson = json_encode($autosFiltrados);
    header('Content-Type: application/json');
    echo $autosJson;
} else {
    $autoModelo = new Auto();
    $autosFiltrados = $autoModelo->filtrarAutos($todas, $marca_toyota, $modelo_yaris, $modelo_corolla, $marca_honda, $modelo_civic, $marca_chevrolet, $modelo_cruze, $marca_volkswagen, $modelo_jetta, $modelo_golf, $marca_mazda, $modelo_mx5, $marca_nissan, $modelo_versa, $modelo_maxima,  $minPrecio, $maxPrecio, $minAnio, $maxAnio);
    $autosJson = json_encode($autosFiltrados);
    header('Content-Type: application/json');
    echo $autosJson;
}
?>