<?php

function mayor(){
    if (func_num_args() == 0) {
        return false;
    } else {
        $a=0;
        for ($i = 0; $i < func_num_args(); $i++) {
            if ($a<func_get_arg($i)){
                $a=func_get_arg($i);
            }
            
        }
        echo " $a ";
    }
}
mayor();
?>