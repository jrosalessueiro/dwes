<?php 

/* 
2. (Optativo) Cree una matriz con los siguientes datos: 
`Batman`, `Superman`, `Krusty`, `Bob`, `Mel` y `Barney`.
    - Elimine la última posición de la matriz. 
    - Imprima la posición donde se encuentra la cadena 'Superman'. 
    - Agregue los siguientes elementos al final de la matriz: `Carl`, `Lenny`, `Burns` y `Lisa`. 
    - Ordene los elementos de la matriz e imprima la matriz ordenada. 
    - Agregue los siguientes elementos al comienzo de la matriz: `Apple`, `Melon`, `Watermelon`.
*/

$nombre = ['Batman','Superman','Krusty','Bob','Mel','Barney'];

$num = count($nombre);

//Eliminamos la última posicion de la matriz.
unset($nombre[$num-1]);

//Imprima la posición donde se encuentra la cadena 'Superman'.
for($i=0;$i<count($nombre);$i++){
    if($nombre[$i] == 'Superman'){
        echo "La posición en la que está la cadena Superman es la: " . $i+1 ."\n";
    }
}

// Agregue los siguientes elementos al final de la matriz: `Carl`, `Lenny`, `Burns` y `Lisa`. 
    $nombre[count($nombre)] = 'Carl';
    $nombre[count($nombre) + 1] = 'Lenny';
    $nombre[count($nombre) + 2] = 'Burns';
    $nombre[count($nombre) + 3] = 'Lisa';


//- Ordene los elementos de la matriz e imprima la matriz ordenada. 
sort($nombre);

foreach ($nombre as $nombres) {
    echo $nombres . "\n";
}

//Agregue los siguientes elementos al comienzo de la matriz: `Apple`, `Melon`, `Watermelon`.
array_unshift($nombre, 'Apple', 'Melon', 'Watermelon');

?>