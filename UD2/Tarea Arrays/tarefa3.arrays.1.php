<?php 

/*
1. Crea una matriz con 30 posiciones y que contenga números aleatorios entre 0 y 20 (inclusive).
Uso de la función [rand](https://www.php.net/manual/es/function.rand.php). 
Imprima la matriz creada anteriormente.
*/ 

$matriz = array();

for($i=0;$i<30;$i++){
    $matriz[$i]= rand(0,20);
    echo "El elemento ". $i + 1 . " de la matriz es: " . $matriz[$i] . "\n";
}

?>