<?php

    
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "db";
$port = "5432";

try {
    $dbConnection = new PDO("pgsql:host=$servername;dbname=$dbname", "$username", "$password");
} catch (PDOException $e) {
    echo $e->getMessage();
}


// ! PG_CONNECT
// Connect to a database named "mary"
$dbConnection = pg_connect("dbname=$dbname user=$username password=$password");

?>