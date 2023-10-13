<?php

/*Haz una página que ejecute la función phpinfo() y que muestre las principales variables de servidor 
mencionadas en teoría.
*/

<!DOCTYPE html>
<html>
<head>
    <title>Información del Servidor PHP</title>
</head>
<body>
    <h1>Información del Servidor PHP</h1>
    <?php
    // Ejecuta phpinfo() para mostrar la información del servidor
    phpinfo();
    ?>
</body>
</html>

?>