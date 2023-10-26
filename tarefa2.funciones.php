<?php 
/**
 * Crea unha función chamada `comprobar_nif()` que reciba un NIF e devolva:
 *  `true` se o NIF é correcto.
 *  false` se o NIF non é correcto.
 * A letra do DNI é unha letra para comprobar que o número introducido anteriormente é correcto. 
 * Para obter a letra do DNI débense levar a cabo os seguintes pasos:
 * Dividimos o número entre 23.
 * Co resto da división anterior, obtemos a letra corresponde na seguinte táboa: 
 * 
 * RESTO 0 1 2	3 4	5 6	7 8	9 10 11  12	13	14	15	16	17	18	19	20	21	22
 * LETRA T R W	A G	M Y	F P	D X	 B   N	J	Z	S	Q	V	H	L	C	K	E
 * 
 * 
 */

 function comprobar_nif($nif) {
    $letra_correcta = "TRWAGMYFPDXBNJZSQVHLCKE";

    // Comprobamos que el NIF tiene 9 caracteres (8 números + 1 letra)
    if (strlen($nif) !== 9) {
        return false;
    }

    // Extraemos la letra y los números del NIF
    $letra = strtoupper(substr($nif, -1));
    $numero = substr($nif, 0, 8);

    // Calculamos el resto de la división
    $resto = $numero % 23;

    // Comparamos la letra del NIF con la letra calculada
    return ($letra === $letra_correcta[$resto]);
}

if (comprobar_nif("76926776X")) {
    echo "El NIF es correcto.";
} else {
    echo "El NIF es incorrecto.";
}

?>