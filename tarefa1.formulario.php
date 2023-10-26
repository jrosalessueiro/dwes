<html>
    <head>
        <meta charset="utf-8">
        <title>HTML</title> 
    </head>
    <body>
        <div>
            
            <FORM ACTION = "procesa.php" METHOD ="GET">
                <H1> Introduzca su nombre: </H1>
                    <INPUT TYPE = "text" NAME ="nombre"><BR>
                <H1> Introduzca sus apellidos: </H1>
                    <INPUT TYPE = "text" NAME ="apellidos"><BR>
                <INPUT TYPE = "submit" VALUE ="Enviar">
            </FORM>
        </div>

            <div>
                <?php 
                    /**  Cree un formulario que solicite su nombre y apellido. Cuando se reciben los datos, se debe mostrar la siguiente información:
                     * Nombre: `xxxxxxxxx`
                     *  Apellidos: `xxxxxxxxx`
                     * Nombre y apellidos: `xxxxxxxxxxxx xxxxxxxxxxxx`
                     * Su nombre tiene caracteres `X`.
                     * Los 3 primeros caracteres de tu nombre son: `xxx`
                     * La letra A fue encontrada en sus apellidos en la posición: `X`
                     * Tu nombre en mayúsculas es: `XXXXXXXXX`
                     * Sus apellidos en minúsculas son: `xxxxxx`
                     * Su nombre y apellido en mayúsculas: `XXXXXX XXXXXXXXXX`
                     * Tu nombre escrito al revés es: `xxxxxx`
                    */
                    
                    //Aquí el código php que muestra la información solicitada.
                ?>
        </div>
    </body>
</html>
--- procesa2.php ---

<html>
    <head>
        <title>Resultados</title> 
    </head>
    <body>
        <H1> <?php echo "Nombre: " . $_GET['nombre'] . "\n"?></H1>
        <H1> <?php echo "Apellidos: " . $_GET['apellidos'] . "\n"?></H1>
        <H1> <?php echo "Nombre y apellidos: " . $_GET['nombre'] . " ". $_GET['apellidos']. "\n"?></H1>
        <H1> <?php echo "Su nombre tiene: " .strlen($_GET['nombre'])." caracteres". "\n"?></H1>
        <H1> <?php echo "Los 3 primeros caracteres de tu nombre son: ". substr($_GET['nombre'],3). "\n"?></H1>
        <H1> <?php echo "La letra A fue encontrada en sus apellidos en la posición: ". strpos($_GET['apellidos'],'A'). "\n"?></H1>
        <H1> <?php echo "Su nombre en mayúsculas es: " .strtoupper($_GET['nombre']). "\n"?></H1>
        <H1> <?php echo "Sus apellidos en minúsculas son: " .strtolower($_GET['apellidos']). "\n"?></H1>
        <H1> <?php echo "Su nombre y apellidos en mayúsculas: " . strtoupper($_GET['nombre']). " ". strtoupper($_GET['apellidos']). "\n"?></H1>
        <H1> <?php echo "Su nombre al revés es: " .strrev($_GET['nombre']). "\n"?></H1>
        <br>
    </body>
</html>