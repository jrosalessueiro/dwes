<?php

/*3. (Optativo) Cree una copia de la matriz con el nombre `copia` con elementos del 3 al 5.
    - Agregue el elemento 'Pera' al final de la matriz. */ 

    $nombre = ['Batman','Superman','Krusty','Bob','Mel','Barney'];

    //Creamos una copia desde el elemento 3 al 5
    $copia = array_slice($nombre, 2, 3);

    //Agreguamos el elemento 'Pera' al final de la matriz
    $copia[] = 'Pera';

    foreach ($copia as $nombres) {
        echo $nombres . "\n";
    }
    




?>
