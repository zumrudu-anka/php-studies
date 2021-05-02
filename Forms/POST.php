<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>
    
    <?php
        echo $_POST["name"];
        echo $_POST["surname"];
    ?>

    <form action="" method="POST">
        <label for="id_name">Name
            <input type="text" placeholder="Name" name="name" id="id_name">
        </label>
        <label for="id_surname">Surname
            <input type="text" placeholder="Surname" name="surname" id="id_surname">
        </label>

        <input type="submit" value="Send">

    </form>

</body>
</html>