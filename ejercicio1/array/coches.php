<?php
    $coches = array(
        '111AAA' => array("Opel","Corsa","Gris"),
        '222BBB' => array("tesla","tesla","Naranja"),
        '333CCC' => array("Mercedes","Benz","Rojo"),
        '444DDD' => array("Porche","Caballo","Verde")
    );

    echo "<table>";
    foreach($coches as $coche){
        echo "<tr>";
        for ($i=0; $i<count($coche);$i++){
            echo "<td>" . $coche[$i] . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
?>