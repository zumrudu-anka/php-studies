<?php 

header('Content-Type: application/json');

// $arr = array(
//     "osman",
//     "durdag"
// );

// ! Php de tanimli callback yapisini kullanan biri
// $arr = array_map(function($item){
//     return $item . " merhaba";
// }, $arr);

// print_r($arr);


// ! Kendi callback yapisini kullanan arrayMap fonksiyonumuzu olusturalim
// $arr = array(
//     "osman",
//     "durdag"
// );

// function myArrayMap($callback, $arr){

//     $result = array();

//     ? Ilk parametre cagrilabilir bir fonksiyonsa ve ikincisi diziyse
//     if(is_callable($callback) && is_array($arr)){
//         foreach ($arr as $key => $value) {
//             $result[] = call_user_func($callback, $value);
//         }
//     }

//     return $result;
// }

// $arr = myArrayMap(function($name){
//     return $name . " merhaba";
// }, $arr);

// print_r($arr);


// ! Kendi callback yapisini kullanan arrayFilter fonksiyonumuzu olusturalim
// $arr = array(
//     "osman",
//     "durdag",
//     "zumrudu",
//     "anka",
//     "merhaba",
//     "nasilsin",
//     "okul"
// );

// function myArrayFilter($callback, $arr){

//     $result = array();

//     // ? Ilk parametre cagrilabilir bir fonksiyonsa ve ikincisi diziyse
//     if(is_callable($callback) && is_array($arr)){
//         foreach ($arr as $_ => $value) {
//             if(call_user_func($callback, $value)){
//                 $result[] =  $value;
//             }
//         }
//     }

//     return $result;
// }

// $arr = myArrayFilter(function($name){
//     return str_contains($name, "u");
// }, $arr);

// print_r($arr);

// ! Routing Operations with Callback functions
function Rota($url, $callback){
    $requestURI = $_SERVER["REQUEST_URI"];
    if($requestURI == $url){
        if(is_callable($callback)){
            $callback();
        }
        else if(function_exists($callback)){
            $callback();
        }
        else if(file_exists(__DIR__ . '/include/' . $callback . '.php')){
            require_once __DIR__ . '/include/' . $callback . '.php';
        }

    }
}

Rota("/php-studies/CallbackFunctions/", function(){
    echo "Anasayfa";
});

Rota("/php-studies/CallbackFunctions/uyeler", function(){
    echo "Uyeler Kismindasin";
});

Rota("/php-studies/CallbackFunctions/cikis", "cikis_yap");

function cikis_yap(){
    echo "Cikis Yapildi";
}

Rota("/php-studies/CallbackFunctions/konular", "konular");

?>