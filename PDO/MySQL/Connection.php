<?php

try{
    $db = new PDO("mysql:host=localhost;dbname=udemy;charset=utf8", "username", "password");
} catch(PDOException $e){
    echo $e->getMessage();
}

?>