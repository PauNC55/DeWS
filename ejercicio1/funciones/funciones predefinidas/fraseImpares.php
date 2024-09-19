<?php
function impares($frase){
    for ($i=0; $i<=strlen($frase); $i++){
        if ($i%2==0){
            echo substr($frase, $i, 1);
        }
    }
}

impares("Hola, planeta tierra");
?>