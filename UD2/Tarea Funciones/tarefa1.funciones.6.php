<?php

// 6. Crea una función que reciba un string e devolva o string en maiúsculas.

function mayusculas($a){

    $resultado = mb_strtoupper($a,'UTF-8');

    return $resultado;
}


echo mayusculas('hola cara de bóla');
?>