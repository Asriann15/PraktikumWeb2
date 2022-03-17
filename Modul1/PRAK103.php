<?php
$celcius = 37.841;
$reamur = (4/5)* $celcius;
$kelvin = $celcius + 273.15;
$fahrenhet = (9/5) * $celcius + 32;

echo "Celcius = 37.841 dikonversi ke = ", "<br>Fahrenheit: ".round($fahrenhet,4) ,"<br>Kelvin: ".round($kelvin,4), "<br>reamur: ".round($reamur),4;
 ?>