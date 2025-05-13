<?php
function converterParaCelsius($a) {
    return ($a - 32)  * 5/9; 
}

$valor1 = $_POST['valor1'];
$celsius = converterParaCelsius($valor1);

echo $valor1. " graus Fahrenheit em graus Celsius é " .$celsius;

?>