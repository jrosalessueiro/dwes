<html>
    <head>
        <meta charset="utf-8">
        <title>HTML</title> 
    </head>
    <body>
        <div>
        <h1>Formulario de Bebidas</h1>
    <form action="procesar_pedido.php" method="post">
        <label for="bebida">Selecciona una bebida:</label>
        <select id="bebida" name="bebida">
            <option value="Coca Cola">Coca Cola (1 €)</option>
            <option value="Pepsi Cola">Pepsi Cola (0,80 €)</option>
            <option value="Fanta Naranja">Fanta Naranja (0,90 €)</option>
            <option value="Trina Manzana">Trina Manzana (1,10 €)</option>
        </select>
        
        <label for="cantidad">Cantidad:</label>
        <input type="number" id="cantidad" name="cantidad" min="1" value="1">
        
        <input type="submit" value="Solicitar">
    </form>
<?php 
/*
Crea un formulario para solicitar una de las siguientes bebidas:

    Bebida|PVP
    :-|:-:
    Coca Cola|1 €
    Pepsi Cola|0,80 €
    Fanta Naranja|0,90 €
    Trina Manzana|1,10 €
    
    A mayores, necesitamos un campo adicional con la cantidad de bebidas a comprar y un botón de <kbd>Solicitar</kbd>.
    
    La aplicación mostrará algo como:

    Pediste 3 botellas de Coca Cola. Precio total a pagar: 3 Euros.
    Puedes utilizar sentencias `switch` o `if`.
    */

    //Aquí va el código PHP que muestra la información solicitada.
?>
</body>
</html>