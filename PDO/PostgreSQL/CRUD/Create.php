<?php

include "../Connection.php";

// ! INSERT WITH PREPARE
try {
    $query = "INSERT INTO \"User\" (\"ID\", \"NAME\", \"SURNAME\", \"EMAIL\", \"PHONE\") VALUES (:id, :name, :surname, :email, :phone)";

    $prepared = $dbConnection->prepare($query);

    $prepared->bindParam(':id', $id);
    $prepared->bindParam(':name', $name);
    $prepared->bindParam(':surname', $surname);
    $prepared->bindParam(':email', $email);
    $prepared->bindParam(':phone', $phone);

    // insert a row
    $id = 3;
    $name = "Yeni";
    $surname = "Kisi";
    $email = "john@example.com";
    $phone = "+90 000 123";

    $insert = $prepared->execute();

    if($insert){
        echo "Success when insert";
    }
    else{
        echo "Error when insert";
    }
} catch (Exception $e) {
    echo $e->getMessage();
}

// ! INSERT WITH PG_PREPARE & PG_EXECUTE & PG_FETCH_ALL
// Prepare a query for execution
$result = pg_prepare($dbConnection, "my_query", "INSERT INTO \"User\" (\"ID\", \"NAME\", \"SURNAME\", \"EMAIL\") VALUES ($1, $2, $3, $4))");

$values = array(
    "ID" => 5,
    "NAME" => "YEPYENİ",
    "SURNAME" => "SONSOYİSİM",
    "EMAIL" => "EMAIL"
);
$result = pg_execute($dbConnection, "my_query", $values);

echo "<pre>";
print_r($result);
echo "</pre>";

// !PG_INSERT
$insertValues = array(
    "ID" => 5,
    "NAME" => "Aga",
    "SURNAME" => "Maga",
    "EMAIL" => "aga@aga.com",
    "PHONE" => "012345"
);
$res = pg_insert($dbConnection, "User", $insertValues);
if ($res) {
    echo "Succesfully Insert";
} else {
    echo "Error";
}

?>