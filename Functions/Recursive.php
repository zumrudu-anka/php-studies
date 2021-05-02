<?php

    function factorial($a){
        if($a === 1){
            return 1;
        }
        return $a * factorial($a - 1);
    }

    $result = factorial(5);
    echo $result;
?>