<?php 

$topla = function ($sayi1, $sayi2){
    return $sayi1 + $sayi2;
};


$fonksiyon = function($fonk){
    if(is_callable($fonk)){
        $fonk();
    }
};

echo $topla(5, 15);

$fonksiyon(function(){
    echo "test";
});

$config["site_url"] = "http://localhost";

function site_url($url){
    global $config;
    // $GLOBALS["config"] seklinde kullaniyoruz

    return $config["site_url"] . "/" . $url;
}

echo site_url("login");

$site_url = function($url) use($config){ // you can use($config, $otherVariable)
    return $config["site_url"] . "/" . $url;
};

echo $site_url("login");

?>