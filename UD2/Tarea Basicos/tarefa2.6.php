<?php

//Usando la instrucción ```echo``` crea un programa en PHP que muestre el mensaje: ```Hola, Mundo!``` 
// Optativo. Muéstralo en cursiva.

//Crea un programa en PHP que guarde en una variable tu nombre y lo muestre en negrita formando 
//el siguiente mensaje: Bienvenido tunombre
?>

<!DOCTYPE html>

<html>
<head>
    <title>Saludo</title>
</head>
<body>
    <p>
        <?php
            echo "<i>Hola, Mundo!</i>";
        ?>
    </p>
    <p>
        <?php
            $nombre = "Pepe";
            echo "Bienvenido " . "<b>$nombre</b>";
        ?>
    </p>
</body>
</html>