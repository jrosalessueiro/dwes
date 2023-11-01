<?php
// 4. Crea una función que reciba un carácter e devolva `true` se o carácter é unha vogal.

function vocal($a){

$vocales = ['a','e','i','o','u'];
$mayusculas = ['A','E','I','O','U'];
$tildes = ['á','é','í','ó','ú'];
$tildesMayusculas = ['Á','É','Í','Ó','Ú'];

    if(iconv_strlen($a,'UTF-8') != 1){
        echo "el caracter que desea comprobar es demasiado grande.";
    } else {
        if (in_array($a,$vocales) == 'true' || in_array($a,$mayusculas) == 'true' || in_array($a,$tildes) == 'true' 
        || in_array($a,$tildesMayusculas) == 'true'){
            echo "El caracter comprobado SÍ es una vocal.";
        } else{
            echo "El caracter comprobado NO es una vocal";
        }
    }
}

?>