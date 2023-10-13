<?php
/*1. Escribe un programa que pase de grados Fahrenheit a Celsius. 
Para pasar de Fahrenheit a Celsius se resta 32 a la temperatura, 
se multiplica por 5 y se divide entre 9.*/

// Solicita al usuario que ingrese el valor de la temperatura en Fahrenheit
echo "Por favor, ingrese el valor de la temperatura en Fahrenheit: ";
$tempF = readline();

// Verifica si la entrada es un número válido
if (is_numeric($tempF)) {
    // Convierte el valor de Fahrenheit a Celsius
    $tempC = ($tempF - 32)*5/9;

    echo "La temperatura en Celsius es:" . $tempC ."\n";
} else {
    echo "La entrada no es un número válido.\n";
} 






/*2. Crea un programa en PHP que declare e inicialice dos 
variables x e y con los valores 20 y 10 respectivamente y
muestre la suma, la resta, la multiplicación, 
la división y el módulo de ambas variables. */
/*(Optativo) Haz dos versiones de este ejercicios.
    - Guarda los resultados en nuevas variables.
    - Sin utilizar variables intermedias. */

/*3. (Optativo) Escribe un programa que imprima por pantalla los cuadrados de los 
30 primeros números naturales.*/ 

/*4. Hacer un programa php que calcule el área y el perímetro de un rectángulo
 (```área=base*altura``` y (```perímetro=2*base+2*altura```). Debéis declarar 
 las variables base=20 y altura=10. */

?>