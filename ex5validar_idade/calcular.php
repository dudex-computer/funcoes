<?php
function validarIdade($a) {

    if($a < 18){
        return "menor de idade";
    }
    elseif($a >= 60){
        return "idoso";
    }
    else{
        return "adulto";
    }
}
$valor1 = $_POST['valor1'];
$resultado = validarIdade($valor1);

echo "A pessoa com " .$valor1. " anos é: ".$resultado;

?>