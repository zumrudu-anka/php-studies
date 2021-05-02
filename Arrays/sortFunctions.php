    
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

    // Sort
    sort($a);

    echo "<pre>";
    print_r($a);
    echo "</pre>";

    // Reverse Sort
    rsort($a);

    echo "<pre>";
    print_r($a);
    echo "</pre>";


    $b = array(
        "z",
        "k",
        "a",
        "d"
    );

    sort($b);

    echo "<pre>";
    print_r($b);
    echo "</pre>";


?>