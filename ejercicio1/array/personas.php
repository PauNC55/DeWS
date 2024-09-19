<?php

$personas = array( 
    array(
        'Nombre' => 'Pau',
        'Altura' => 1.72,
        'Email' => 'paunavcar@alu.edu.gva.es'
    ),
    array(
        'Nombre' => 'Paula',
        'Altura' => 1.42,
        'Email' => 'paula@alu.edu.gva.es'
    ),
    array(
        'Nombre' => 'Fernando',
        'Altura' => 1.54,
        'Email' => 'fernan@alu.edu.gva.es'
    ),
    array(
        'Nombre' => 'Alex',
        'Altura' => 1.98,
        'Email' => 'alex@alu.edu.gva.es'
    ),
    array(
        'Nombre' => 'Iván',
        'Altura' => 1.78,
        'Email' => 'ivan@alu.edu.gva.es'
    )
);


echo "<table>";
foreach($personas as $pers){
    echo "<tr>";
    echo "<td>" . $pers['Nombre'] . "</td>";
    echo "<td>" . $pers['Altura'] . "</td>";
    echo "<td>" . $pers['Email'] . "</td>";
    echo "</tr>";
}
echo "</table>";
?>