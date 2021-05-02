    
<?php
    $a = array(
        10,
        9,
        8,
        7,
        6,
        5,
        4,
        3,
        2,
        1,
        0
    );

    echo "<pre>";
    print_r($a);
    echo "</pre>";

    // Join array elements with a string
    echo implode("+", $a);

?>