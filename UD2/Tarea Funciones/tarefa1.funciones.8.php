<?php
 /*8. Crea una función que imprima a hora á que sae e se pon o sol para a localización por defecto. 
 Debes comprobar como axustar as coordenadas (latitude e lonxitude) predeterminadas do teu servidor.*/

function sol(){

    
echo "La hora del amanecer el ". date("D M d Y") . " es " . date_sunrise(time(),SUNFUNCS_RET_STRING,
      ini_get("date.default_latitude"), ini_get("date.default_longitude"),ini_get("date.sunrise_zenith"),0);
      
echo "La hora del atardecer el ". date("D M d Y") . " es " . date_sunset(time(),SUNFUNCS_RET_STRING,
      ini_get("date.default_latitude"), ini_get("date.default_longitude"),ini_get("date.sunset_zenith"),0);

}

sol();

  ?>