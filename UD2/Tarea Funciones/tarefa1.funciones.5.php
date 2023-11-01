<?php

// 5. Crea una función que reciba un número e devolva se o número é par ou impar.

function paroimpar($a){

       
        if(is_numeric($a) == false){
            echo "el elemento que desea comprobar no es un número.";
        } else {
            if ($a % 2 == 0){
                echo "El número comprobado es par.";
            } else{
                echo "El número comprobado es impar";
            }
        }
    }

?>