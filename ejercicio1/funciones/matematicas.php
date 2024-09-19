<?php

function digitos(int $num){
    echo "$num tiene dígitos: " . strlen($num) . "<br>";
}

digitos(14);
function digitoN(int $num, int $pos){
    echo substr($num, $pos-1, 1) . "<br>";
}


digitoN(12345, 3);

function quitaPorDetras(int $num, int $cant){
    $eliminado = substr_replace($num, "", -$cant) . "<br>";
    echo $eliminado;
}
quitaPorDetras(123456789,3);

function quitaPorDelante(int $num, int $cant){
    $eliminado = substr_replace($num, "", 0, $cant) . "<br>";
    echo $eliminado;
}
quitaPorDelante(123456789,3);
?>






