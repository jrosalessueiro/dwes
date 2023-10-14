<?php 

// 1. Crea una función que reciba un carácter e imprima se o carácter é un díxito entre 0 e 9.

function digito09($caracter){
    if(is_numeric($caracter)=='true'){
        if($caracter >= 0 && $caracter <= 9){
            echo "El caracter es un dígito entre 0 y 9";
        }else{
            echo "El caracter es un dígito que no está entre 0 y 9";
        }
    }else{
        echo "El caracter no es un número";
    }
}

?>