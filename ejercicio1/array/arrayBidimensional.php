<?php
$lista1 = array_chunk();

foreach($lista1 as $list){
    for ($i=0; $i<count($list); $i++){
        $list[$i] = rand(100,999);
    }
    sort($list);

}
?>