<?php
//Tables View.php
// Verifica si la consulta devolvió algún resultado
if ($tables->num_rows > 0) {
  // Recorre cada fila del resultado
  while($row = $tables->fetch_assoc()) {
    // Obtiene el nombre de la tabla
    $table = $row['Tables_in_carwap'];
    // Imprime el nombre de la tabla
    echo "<h2>Tabla: " . $table . "</h2>";

    // Realiza una consulta para obtener los datos de la tabla
    $table_result = $this->db->getTableData($table);

    // Verifica si la consulta devolvió algún resultado
    if ($table_result->num_rows > 0) {
      // Comienza a imprimir una tabla HTML
      echo "<table border='1'>";
      // Recorre cada fila del resultado
      while($table_row = $table_result->fetch_assoc()) {
        // Comienza a imprimir una fila de la tabla HTML
        echo "<tr>";
        // Recorre cada celda de la fila
        foreach($table_row as $cell) {
          // Imprime la celda
          echo "<td>" . $cell . "</td>";
        }
        // Termina de imprimir la fila de la tabla HTML
        echo "</tr>";
      }
      // Termina de imprimir la tabla HTML
      echo "</table>";
    } else {
      // Imprime un mensaje si no se encontraron datos en la tabla
      echo "No se encontraron datos en la tabla $table.<br>";
    }
  }
} else {
  // Imprime un mensaje si no se encontraron tablas en la base de datos
  echo "No se encontraron tablas en la base de datos.";
}
?>