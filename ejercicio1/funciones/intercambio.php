<?php
function intercambio($a, $b){
    echo " $a $b";
    $c=$a;
    $a=$b;
    $b=$c;
    echo " $a $b";
}
intercambio(10, 15);
?>