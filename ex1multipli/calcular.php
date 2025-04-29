<?php
function multiplicar($a, $b) {
    return ($a * $b);
}

$valor1 = $_POST['valor1'];
$valor2 = $_POST['valor2'];
$multi = multiplicar($valor1, $valor2);

echo "O resultado da multiplicação de $valor1 e $valor2 é: $multi";
?>