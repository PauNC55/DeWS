<?php
 for ( $i = 0; $i < 50; $i++){
    $tabla[$i] =  rand(0,99);
 }
 $media = array_sum($tabla)/50;
 echo $media;
 $orden = sort($tabla);
 $prim = $tabla[0];
 $ult = $tabla[49];
echo "<br> Último:" . $ult . "<br> Primero: " . $prim;
?>