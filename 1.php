<?php
//crear un arreglo unidimensional de 5 valores enteros e imrpima el promedio y mostrarlos ordenados de manera descendente

$arreglo = array(1, 2, 3, 4, 5);

$sum = 0;
foreach ($arreglo as $value) {
  $sum += $value;
}
$avg =  $sum / count($arreglo);
echo "El promedio es de: ".$avg . '<br>';


rsort($arreglo);
echo "Arreglo mostrado de manera descendente: ";
foreach ($arreglo as $value) {
  echo $value . " ";
}

?>