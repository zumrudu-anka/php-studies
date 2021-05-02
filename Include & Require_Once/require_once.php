<?php
require "header.php";
require ("header.php");
 
require_once "header.php";
require_once ("header.php");

// kullanımların hepsi aynı fakat
// require_once eğer dosya daha önce dahil edilmişse dahil etmez
 
?>

// ! include şeklinde import ettiğimizde eğer eklenen
// ! dosya yoksa warning etiketli bir uyarı verir ve
// ! include işleminden sonraki satırlar çalıştırılmaya devam eder.


// ! require ve require_once ise eğer dosya yoksa fatal error verir ve
// ! dosyanın geri kalanı okunmaz. Çalışmayı durdurur.