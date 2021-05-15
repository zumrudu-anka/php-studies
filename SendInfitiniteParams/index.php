<?php

header("Content-type: text/html; charset=utf8");

$par = array_filter(explode("/", @$_GET["par"]));

if(@function_exists($par[0])){
    call_user_func($par[0], $par);
}
else{
    echo "Anasayfa";
}

function asd($par){
    print_r($par);
    echo "<br/>burasi asd fonksiyonu";
}

function aga($par){
    $username = $par[1];

    if($username == "zumrudu"){
        echo "Burasi uye profili";
    }
    else{
        echo "yanlis kullanici adi";
    }
}

?>