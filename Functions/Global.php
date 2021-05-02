<?php
    $b = 10;

    function add($a){
        global $b;
        return $a + $b;
    }

    echo add(20);
?>