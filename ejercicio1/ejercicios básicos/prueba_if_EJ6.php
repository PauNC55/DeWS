<?php
$nota = 5;
$nota2 = 3;
$nota3 = 7;
if (($nota2 > $nota) && ($nota2 > $nota3)){
    echo "La nota más alta es " . $nota2;
} elseif (($nota > $nota2) && ($nota > $nota3)) {
    echo "La nota más alta es " . $nota;
} else {
    echo "La nota más alta es " . $nota3;
}
?>