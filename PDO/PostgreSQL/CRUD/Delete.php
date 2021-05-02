<?php

include "../Connection.php";

// ! DELETE WITH PREPARE
try {
    $query = "DELETE FROM \"User\" WHERE \"ID\" = :id";

    $prepared = $dbConnection->prepare($query);

    $prepared->bindParam(':id', $id);

    // insert a row
    $id = 5;

    $delete = $prepared->execute();

    if($delete){
        echo "Success when delete";
    }
    else{
        echo "Error when delete";
    }
} catch (Exception $e) {
    echo $e->getMessage();
}


// ! DELETE WITH PG_PREPARE & PG_EXECUTE & PG_FETCH_ALL
$result = pg_prepare($dbConnection, "my_query", "DELETE FROM \"User\" WHERE \"ID\" = $1");

$values = array(
    "ID" => 4,
);
$result = pg_execute($dbConnection, "my_query", $values);

if($result){
    echo "Success";
}
else{
    echo "Error";
}
echo "<pre>";
print_r($result);
echo "</pre>";


// !PG_DELETE
$deleteCondition = array(
    "ID" => 3,
);
$res = pg_delete($dbConnection, "User", $deleteCondition);
if ($res) {
    echo "Success";
} else {
    echo "Error";
}

?>