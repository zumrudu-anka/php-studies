<?php

    function factorial($a){
        if($a === 1){
            return 1;
        }
        return $a * factorial($a - 1);
    }

    if(function_exists("factorial")){
        echo "Function is exists";
    }
    else{
        echo "Function is not exists";
    }

?>