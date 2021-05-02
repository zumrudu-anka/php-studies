<?php
    // **************************
    function myFunc(){
        echo "myFunc is called";
    }
    myFunc();



    // **************************
    function mySumFunc($num1, $num2){
        echo $num1 + $num2;
    }
    mySumFunc(4, 5);



    // **************************
    function myOtherFunc($num1, $num2 = 15){
        echo $num1 * $num2 . "<br>";
    }
    myOtherFunc(15);
    myOtherFunc(12, 10);



    // **************************
    function myReturnerFunction(){
        return "Merhaba";
    }
    $myVal = myReturnerFunction();
    echo $myVal;
?>