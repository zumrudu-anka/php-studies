<?php

    date_default_timezone_set("Europe/Istanbul");

    $name_surname = "Zümrüd-ü Anka";

    setcookie("name_surname", $name_surname);

    echo $_COOKIE["name_surname"];

    $city = "Erzurum";

    setcookie("city", $city, time() + 3600);

    echo $_COOKIE["city"];

    $country = "Turkey";

    setcookie("country", $country, strtotime("+1 week"));

    echo $_COOKIE["country"];

?>