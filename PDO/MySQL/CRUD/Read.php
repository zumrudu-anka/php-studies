<?php

require_once "../Connection.php";

$query = $db->prepare("SELECT * FROM tableName");

$select = $query->execute();

// $datas = $select->fetch(PDO::FETCH_ASSOC);

// echo "<pre>";
// print_r($data);
// echo "</pre>";

while($datas = $select->fetch(PDO::FETCH_ASSOC)){
    echo $datas["name"] . "<br>";
}

?>