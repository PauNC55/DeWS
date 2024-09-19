<?php
function analizar($frase){
    echo "Lestras totales en la frase: " . strlen($frase) . "<br>";
    $lista = explode(" ", $frase);
    echo "Palabras en la frase: " . count($lista) . "<br>";
    foreach ($lista as $lt){
        echo "La palabra " . $lt . " tiene este número de letras: " . strlen($lt) . "<br>";
    }
}
analizar("Buenos dias por la mañana");
?>