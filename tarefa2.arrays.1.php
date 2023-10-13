<?php 

//1. Almacena en un array los 10 primeros números pares. Imprímelos cada uno en una línea utilizando
// los valores contenidos en el array.

$num = 1;

for($i = 0; $i < 10; $i++ )
{
$pares[$i] = $num;
echo "$num \n";

$num++;
}
?>