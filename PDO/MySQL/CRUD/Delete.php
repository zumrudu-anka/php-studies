<?php

include "../Connection.php";

$idWillDelete = $_GET["coming_id"];

$query = $db->prepare("DELETE FROM tableName WHERE
    ID = :id
");

$delete = $query->execute(array(
    "id" => $idWillDelete,
));

if($delete){
    echo "Success when delete";
}
else{
    echo "Error when delete";
}

?>