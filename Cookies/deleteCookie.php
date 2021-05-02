<?php

    date_default_timezone_set("Europe/Istanbul");

    $name_surname = "Zümrüd-ü Anka";

    setcookie("name_surname", "");

    echo $_COOKIE["name_surname"];

    // !delete
    setcookie("", $name_surname);

    $country = "Turkey";

    setcookie("country", $country, strtotime("+1 week"));

    echo $_COOKIE["country"];
    
    // !delete
    setcookie("country", "", strtotime("-1 week"));

?>