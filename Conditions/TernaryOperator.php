<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $a = 15;

        $b = $a > 5 ? "5 ten büyük" : "5 ten küçük";

        echo $b;
    ?>

    <select>
        <option <?php echo $a == 15 ? 'selected' : '' ?>>Elma</option>
        <option>Armut</option>
    </select>
</body>
</html>


