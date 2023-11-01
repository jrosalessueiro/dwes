<?php

/**Busca en la documentación de PHP las funciones de [manejo de variables](http://www.php.net/manual/es/funcref.php)

Comprueba el resultado devuelto por los siguientes fragmentos de código y analiza el resultado:
```php
- $a = “true”; // imprime el valor devuelto por is_bool($a)...
    ---Respuesta: se comprueba que la variable $a está mal definida al tener comillas, sin ellas
        el resultado de la función is_bool() será 1 porque es booleana (S/N) de lo contrario no devuelve nada.

- $c = “false”; // imprime el valor devuelto por gettype($c);
    ---Respuesta: se comprueba que la variable $c está mal definida al tener comillas, sin ellas
        el resultado de la función gettype() será boolean, ya que devuelve el tipo de variable.

- $d = “”; // el valor devuelto por empty($d);
---Respuesta: se comprueba que la variable $d se considera vacía. La función empty() devuelve 1 
    cuando la variable se considera vacía o nada cuando no es vacía.

- $e = 0.0; // el valor devuelto por empty($e);
---Respuesta: se comprueba que la variable $e se considera vacía. La función empty() devuelve 1 
    cuando la variable se considera vacía o nada cuando no es vacía.

- $f = 0; // el valor devuelto por empty($f);
---Respuesta: se comprueba que la variable $f se considera vacía. La función empty() devuelve 1 
    cuando la variable se considera vacía o nada cuando no es vacía.

- $g = false; // el valor devuelto por empty($g);
---Respuesta: se comprueba que la variable $g se considera vacía. La función empty() devuelve 1 
    cuando la variable se considera vacía o nada cuando no es vacía.

- $h; // el valor devuelto por empty($h);
---Respuesta: se comprueba que la variable $h se considera vacía. La función empty() devuelve 1 
    cuando la variable se considera vacía o nada cuando no es vacía.

- $i = “0”; // el valor devuelto por empty($i);
---Respuesta: se comprueba que la variable $i se considera vacía. La función empty() devuelve 1 
    cuando la variable se considera vacía o nada cuando no es vacía.

- $j = “0.0”; // el valor devuelto por empty($j);
---Respuesta: se comprueba que la variable $j no se considera vacía. La función empty() devuelve 1 
    cuando la variable se considera vacía o nada cuando no es vacía.

- $k = true; // el valor devuelto por isset($k);
---Respuesta: se comprueba que la variable $k está definida y es diferente a null. La función isset()
    devuelve 1 cuando la variable está definida y es diferente a null o nada cuando no está definida o es null.

- $l = false; // el valor devuelto por isset($l);
---Respuesta: se comprueba que la variable $l está definida y es diferente a null. La función isset()
    devuelve 1 cuando la variable está definida y es diferente a null o nada cuando no está definida o es null.

- $m = true; // el valor devuelto por is_numeric($m);
---Respuesta: se comprueba que la variable $m no es numérica. La función is_numeric() devuelve 1 cuando la 
variable es numérica o nada cuando no lo es.

- $n = “”; // el valor devuelto por is_numeric($n);
---Respuesta: se comprueba que la variable $n no es numérica. La función is_numeric() devuelve 1 cuando la 
variable es numérica o nada cuando no lo es.
```
 */


?>