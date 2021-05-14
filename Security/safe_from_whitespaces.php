<form action="" method="POST">
    Name : <input type="text" name = "name" placeholder="Name"/>
    <input type="submit" value="Send">
</form>


<?php 

// ! text bekleyen bir input alanina bos karakterler girip onaylandiginda
// ! eger bu input degeri aliyor ve veritabanina kaydediyorsa burada sikinti vardir.
// ! Bunu onlemek icin trim fonksiyonu kullanilabilir.

if($_POST){

    // ! Bu sekilde kullanildiginda bosluklara izin vermektedir ve sikintilara yol acabilir.
    // $name = $_POST["name"];
    // if(!$name){
    //     echo "Fill all fields!";
    // }
    // else{
    //     echo $name;
    // }

    //*  Bu sekilde kullanilmalidir.
    $name = trim($_POST["name"]);
    if(!$name){
        echo "Fill all fields!";
    }
    else{
        echo $name;
    }
}

?>