    
<?php

$a = 25;

switch ($a) {
    case 15:
        echo $a;
        break;
    case $a < 10:
        echo "10 dan küçük";
        break;
    default:
        echo "10 dan büyük";
        break;
}

?>