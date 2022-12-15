<?php
//Crear un arreglo multidimensional 4*5, llenarlo de valores decimales, y sumar sus filas y columnas

$arr = array(
    array(1.1, 1.2, 1.3, 1.4, 1.5),
    array(2.1, 2.2, 2.3, 2.4, 2.5),
    array(3.1, 3.2, 3.3, 3.4, 3.5),
    array(4.1, 4.2, 4.3, 4.4, 4.5)
  );


  $rows = array();
$cols = array();

for ($i = 0; $i < count($arr); $i++) {
  $row_sum = 0;
  for ($j = 0; $j < count($arr[$i]); $j++) {
    $row_sum += $arr[$i][$j];
    if (!isset($cols[$j])) {
      $cols[$j] = 0;
    }
    $cols[$j] += $arr[$i][$j];
  }
  $rows[] = $row_sum;
}
echo "La suma de las filas es de: ";
foreach ($rows as $row_sum) {
    echo  $row_sum . " ";
  }
  echo "<br>La suma de las columnas es de: ";
  foreach ($cols as $col_sum) {
    echo $col_sum . " ";
  }

?>