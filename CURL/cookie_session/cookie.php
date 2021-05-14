<?php 

setcookie("zumrudu_anka", $_COOKIE["zumrudu_anka"] + 1, time() + 3600);

echo $_COOKIE["zumrudu_anka"];

?>