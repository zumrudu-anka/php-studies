<?php

require_once "../Connection.php";

// ! SELECT WITH PREPARE
try {
    $query = "SELECT * FROM \"User\" WHERE \"ID\" = :id";

    $prepared = $dbConnection->prepare($query);

    $prepared->bindParam(':id', $id);
    // insert a row
    $id = 1;

    $select = $prepared->execute();

    if($select){
        $result = $prepared->fetchAll();

        echo "<pre>";
        print_r($result);
        echo "</pre>";

    }
    else{
        echo "Error when select";
    }
} catch (Exception $e) {
    echo $e->getMessage();
}


// ! PG_PREPARE & PG_EXECUTE & PG_FETCH_ALL
// Prepare a query for execution
$result = pg_prepare($dbConnection, "my_query", "SELECT * FROM \"User\" WHERE \"ID\" = $1");

$result = pg_execute($dbConnection, "my_query", array(1));

$result = pg_fetch_all($result);

echo "<pre>";
print_r($result);
echo "</pre>";

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


// ! PG_SELECT
$records = pg_select($dbConnection, "User", array("ID" => 1));

echo "<pre>";
print_r($records);
echo "</pre>";

?>