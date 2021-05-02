<?php
    $a = rand(0, 10);

    echo $a . "<br>";

    $allConstants = get_defined_constants();
    echo "<pre>";
    print_r($allConstants);
    echo "</pre>";

    echo "<br>";

    $allVariables = get_defined_vars();
    echo "<pre>";
    print_r($allVariables);
    echo "</pre>";
?>