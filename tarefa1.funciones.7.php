<?php
// 7. Crea una función que imprima la zona horaria (*timezone*) por defecto utilizada en PHP.

function timezone(){

    $a = date_default_timezone_get();

    echo "La zona horaria por defecto es: ". $a;
}

?>