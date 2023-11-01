<?php

// 3. Crea una función que reciba dous número `a` e `b` e devolva o número `a` elevado a `b`.

function potencia($a,$b){

    $resultado = 1;

    if($b == 0){
        return 1;

    }elseif($b > 0){

        for($i = 0; $i < $b; $i++){
            $resultado = $resultado * $a;
    }
    }else{
        for($i = 0; $i < abs($b); $i++){
            $resultado = $resultado * $a;
        }
        if($resultado <> 0){
            $resultado = 1 / $resultado;
        } else{
            echo "No se puede dividir entre cero.";
        }
        
    }
    return $resultado;
}
?>
