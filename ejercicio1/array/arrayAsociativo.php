<?php

for ( $i = 0; $i < 100; $i++){
    $numR =  rand(0,1);
    if ($t==0){
            $tabla[$i]="F";   
        } else {
            $tabla[$i]="M";            
        }
}

$tablaFM['M']=0;
$tablaFM['F']=0;
for ( $i = 0; $i < count($tabla); $i++){
    $FM = $tabla[$i];
    if ($FM=="F"){
        $tablaFM['F']+=1;
    } elseif ($FM=="M") {
        $tablaFM['M']+=1;
    }
}
 
print_r($tablaFM);

?>