<?php

include "../Connection.php";

// ! UPDATE WITH PREPARE

try {
    $query = "UPDATE \"User\" SET \"NAME\" = :name, \"SURNAME\" = :surname WHERE \"ID\" = :id";

    $prepared = $dbConnection->prepare($query);

    $prepared->bindParam(':id', $id);
    $prepared->bindParam(':name', $name);
    $prepared->bindParam(':surname', $surname);

    // insert a row
    $id = 5;
    $name = "Yeni İsim";
    $surname = "Yeni Soyisim";

    $update = $prepared->execute();

    if($update){
        echo "Success when update";
    }
    else{
        echo "Error when update";
    }
} catch (Exception $e) {
    echo $e->getMessage();
}


// ! UPDATE WITH PG_PREPARE & PG_EXECUTE & PG_FETCH_ALL
// Prepare a query for execution
$result = pg_prepare($dbConnection, "my_query", "UPDATE \"User\" SET \"NAME\" = $2, \"SURNAME\" = $3 WHERE \"ID\" = $1");

$values = array(
    "ID" => 5,
    "NAME" => "YEPYENİ",
    "SURNAME" => "SONSOYİSİM"
);
$result = pg_execute($dbConnection, "my_query", $values);

echo "<pre>";
print_r($result);
echo "</pre>";

// !PG_UPDATE
$updateValues = array(
    "SURNAME" => "YENİ",
    "EMAIL" => "aga@aga.com",
    "PHONE" => "012345"
);
$updateCondition = array(
    "ID" => 5,
    "NAME" => "Aga"
);
$res = pg_update($dbConnection, "User", $updateValues, $updateCondition);
if ($res) {
    echo "Success";
} else {
    echo "Error";
}

?>