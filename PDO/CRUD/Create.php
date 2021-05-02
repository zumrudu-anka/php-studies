<?php

include "../Connection.php";

$query = $db->prepare("INSERT INTO tableName (name, surname, age, mail) 
    name =: a,
    surname =: b,
    age =: c,
    mail =: d
");

$insert = $query->execute(array(
    "a" => $_POST["name"],
    "b" => $_POST["surname"],
    "c" => $_POST["age"],
    "d" => $_POST["mail"]
));

if($insert){
    echo "Success when insert";
}
else{
    echo "Error when insert";
}

?>