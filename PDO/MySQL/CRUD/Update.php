<?php

include "../Connection.php";

$query = $db->prepare("UPDATE tableName SET 
    name =: a,
    surname =: b,
    age =: c,
    mail =: d
");

$update = $query->execute(array(
    "a" => $_POST["name"],
    "b" => $_POST["surname"],
    "c" => $_POST["age"],
    "d" => $_POST["mail"]
));

if($update){
    echo "Success when update";
}
else{
    echo "Error when update";
}

?>