<?php

    session_start();
    
    // Delete spesific session
    unset($_SESSION["name_surname"]);

    // Delete all Sessions
    session_destroy();

?>