<?php
// Autoseelct.php
echo "<head>";
echo "<link rel='stylesheet' type='text/css' href='View\css\styles.css'>";
echo "</head>";
if (count($autos) > 0) {
  echo "<table border='1'>";
  foreach ($autos as $auto) {
    echo "<tr>";
    //echo "<td>" . $auto->ID . "</td>";
    echo "<td>" . $auto->Modelo . "</td>";
    echo "<td>" . $auto->Marca . "</td>";
    echo "<td>" . $auto->Año . "</td>";
    echo "<td>" . $auto->Precio . "</td>";
    echo "<td>" . $auto->Descripción . "</td>";
    echo "<td><img src='" . $auto->ImagenURL . "' alt='Imagen del auto'></td>";
    echo "</tr>";
  }
  echo "</table>";
} else {
  echo "No se encontraron autos.";
}
?>

