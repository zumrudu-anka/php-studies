<!-- <?php
    for ($i=0; $i < 15; $i++) { 
        echo "$i<br>";
    }
?>
 -->


<!-- <?php
    for ($i=0; $i < 15; $i++) { ?>

        <?php echo $y ?> <br>

    <?php } 
?> -->

<!-- <?php

    $array = array(
        "osman",
        "zümrüdü",
        "anka"
    );

    $count = count($array);
    for ($i=0; $i < $count; $i++) { 

        echo $array[$i] . "<br>";
        
    } 
?> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <select>
        <?php
            for ($i=0; $i <= 84; $i++) { ?>

                <option value="<?php echo $i ?>"><?php echo $i ?></option>

            <?php } 
        ?>

    </select>
</body>
</html>



