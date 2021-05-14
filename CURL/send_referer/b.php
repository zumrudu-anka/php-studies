<?php 

if($_SERVER["HTTP_REFERER"] == "http://localhost/php-studies/CURL/send_referer/a.php"){
    echo "Merhaba kardeş";
}
else{
    header("Location:error.php");
}

?>