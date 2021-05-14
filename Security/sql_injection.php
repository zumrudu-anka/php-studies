<form action="" method="POST">
    Name : <input type="text" name = "name"/>
    Password : <input type="password" name = "password"/>
    <input type="submit" value="Send">
</form>

<?php

    // ! SQL injection sql sorgularimiza istemedigimiz sekilde kullanici tarafindan mudahale edilmesidir.
    
    // ? Ornek 1
    // ! ornek olarak yukaridaki input degerine birisi ismini girdiginde
    // ! veritabanindan bu isimle eslesen degerleri select edip return ediyoruz diyelim.
    // ! Kullanici input olarak Osman yazdiginda sorun olmayacaktir.
    // ! Fakat kullanici input degerine -> Osman' || NAME = 'ahmet seklinde bir deger girdiginde
    // ! asagidaki sorguda name degiskeninin alacagi degeri dusundugunuzde sorgu su sekilde olacaktir.
    // ! SELECT * FROM TABLENAME WHERE NAME = 'Osman' || NAME = 'ahmet'

    // ? Ornek 2
    // ! Parola alanina 1234 girerse parolasini check edecegiz normal olarak.
    // ! Fakat parola alanina 1234' || PASSWORD != '1234 girerse sisteme kesinlikle login olabilecektir.
    // ! Bu da cok buyuk bir hatadir.

    // ! Bunlar bizim icin cok onemli sorunlara ve maliyetlere yol acabilir.
    // ! Kotu niyetli kisiler veritabanimizi bile silebilir.
    
    // ? Bu durumlari engelleyebilmek icin kullanabilecegimiz bazi fonksiyonlar
    // * addslashes()               -> eklenen tirnaklarin basina ters slash koyar.
    // * mysql_real_escape_string()

mysqli_select_db("table", mysqli_connect("localhost", "root")) or die (mysqli_error());

if($_POST){
    // ! Bunun yerine
    // $name = htmlspecialchars(trim($_POST["name"]));

    // * Bu sekilde kullanmaliyiz
    $name = addslashes(htmlspecialchars(trim($_POST["name"])));

    if(!$name){
        echo "Fill all fields!";
    }
    else{
        $query = "SELECT * FROM TABLENAME WHERE NAME = '$name'";
        $stmt = mysqli_query($query);
        $rowCount = mysqli_num_rows($stmt);

        if($rowCount > 0){
            while($row = mysqli_fetch_array($stmt)){
                echo $row["NAME"];
            }
        }
        else{
            echo "Can not find";
        }
        
    }
}



?>