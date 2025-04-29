<?php

function imparPar($a) {
    return ($a % 1);
}

$n = $_POST['n'];
if ($n % 2 == 0) {
    echo "O número $n é par";
} else {
    echo "O número $n é ímpar";
}

?>
