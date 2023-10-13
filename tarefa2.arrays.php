<?php 

/*
Necesitamos almacenar la siguiente información en un array multidimensional:

- **John**
    - email: `john@demo.com`
    - website: `www.john.com`
    - age: `22`
    - password: `pass`
- **Anna**
    - email: `anna@demo.com`
    - website: `www.anna.com`
    - age: `24`
    - password: `pass`
- **Peter**
    - email: `peter@mail.com`
    - website: `www.peter.com`
    - age: `42`
    - password: `pass`
- **Max**
    - email: `max@mail.com`
    - website: `www.max.com`
    - age: `33`
    - password: `pass`

Almacena e imprime la información. 
*/

$nombre = ['John','Anna','Peter','Max'];
$email = ['john@demo.com','anna@demo.com','peter@mail.com','max@mail.com'];
$website = ['www.john.com','www.anna.com','www.peter.com','www.max.com'];
$age = ['22','24','42','33'];
$password = ['pass','pass','pass','pass'];

for($i = 0; $i < count($nombre); $i++){
    echo "- **".$nombre[$i]."** \n";
    echo "   - email: " . $email[$i] . "\n";
    echo "   - website: " . $website[$i]. "\n";
    echo "   - age: " . $age[$i]. "\n";
    echo "   - password: " . $password[$i]. "\n";

}

?>