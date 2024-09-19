<?php

function horaSeparada($hora){
    list($H, $m, $s) = explode(":", $hora);
    
    if($H<=23 && $H >=0){
        echo "Hora validada <br>";
    } else {
        echo "Hora no validada<br>";
    }
    if($m<=60 && $s >=0){
        echo "Minutos validados<br>";
    } else {
        echo "Minutos no validados<br>";
    }
    if($s<=60 && $s >=0){
        echo "Segundos validados<br>";
    } else {
        echo "Segundos no validados<br>";
    }
    
}
$hora="20:500:06";
horaSeparada($hora);
?>