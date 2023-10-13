<?php
/*2. Crea un programa en PHP que declare e inicialice dos 
variables x e y con los valores 20 y 10 respectivamente y
muestre la suma, la resta, la multiplicación, 
la división y el módulo de ambas variables. */
/*(Optativo) Haz dos versiones de este ejercicios.
    - Guarda los resultados en nuevas variables.
    - Sin utilizar variables intermedias. */

$x = 20;
$y = 10;

// la suma, la resta, la multiplicación, la división y el módulo de ambas variables
// sin usar variables intermedias

echo "Teniendo las variables x igual a " . $x . " e y igual a: " . $y ."\n";
echo "La suma de x e y es: " . $x + $y ."\n";
echo "La resta de x e y es: " . $x - $y ."\n";
echo "La multiplicación de x e y es: " . $x * $y ."\n";
echo "La división de x entre y es: " . $x / $y ."\n";
echo "El módulo de x entre y es: " . $x % $y ."\n";



//utilizando variables intermedias
$suma = $x + $y;
$resta = $x - $y;
$multiplicacion = $x * $y;
$division = $x / $y;
$modulo = $x % $y;

echo "Teniendo las variables x igual a " . $x . " e y igual a: " . $y ."\n";
echo "La suma de x e y es: " . $suma ."\n";
echo "La resta de x e y es: " . $resta ."\n";
echo "La multiplicación de x e y es: " . $multiplicacion ."\n";
echo "La división de x entre y es: " . $division ."\n";
echo "El módulo de x entre y es: " . $modulo ."\n";



/*3. (Optativo) Escribe un programa que imprima por pantalla los cuadrados de los 
30 primeros números naturales.*/ 

/*4. Hacer un programa php que calcule el área y el perímetro de un rectángulo
 (```área=base*altura``` y (```perímetro=2*base+2*altura```). Debéis declarar 
 las variables base=20 y altura=10. */

?>