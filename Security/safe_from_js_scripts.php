<form action="" method="POST">
    Name : <input type="text" name = "name" placeholder="Name"/>
    <input type="submit" value="Send">
</form>


<?php 

// ! inputlarimizi script etiketleri girilmeyecek sekilde ayarlamaliyiz.
// ! aksi halde input icerisinde script etiketi arasinda yazilan scriptler calistirilabilir.

/*
    ? Bunu saglayabilecegimiz bazi fonksiyonlar
    * strip_tags() ->           hic bir html etiketini kabul etmez ve siler
    * htmlspecialchars() ->     < ve > isaretlerini html kodlarina cevirir
    * htmlentities() ->         < ve > isaretlerini html kodlarina cevirir
*/

if($_POST){

    // ! Bu sekilde kullanirsak ve name inputuna <script>alert("aga");</script> degerini yazarsak    // ! gorecegiz ki script etiketlerinin arasindaki javascript kodlari calistirilabiliyor.
    // $name = trim($_POST["name"]);
    // if(!$name){
    //     echo "Fill all fields!";
    // }
    // else{
    //     echo $name;
    // }

    // * Bu sekilde kullanirsak script etiketlerinden korumus oluruz ve html etiketleri inputdan silinir
    // $name = strip_tags(trim($_POST["name"]));
    // ? result -> alert("aga");

    // * Bu sekilde kullanirsak html etiketleri ile beraber cikti verilir fakat script calistirilmaz.
    // $name = htmlspecialchars(trim($_POST["name"]));
    // ? result -> <script>alert("aga");</script>

    // * Bu sekilde kullanirsak html etiketleri ile beraber cikti verilir fakat script calistirilmaz.
    $name = htmlentities(trim($_POST["name"]));
    // ? result -> <script>alert("aga");</script>

    if(!$name){
        echo "Fill all fields!";
    }
    else{
        echo $name;
    }
}

?>