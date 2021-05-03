<?php

    require_once "./Student.php";

    $name = "Zümrüd-ü";
    $surname = "Anka";
    $age = 30;
    $studentNo = 12345;
    $schoolName = "Karadeniz Teknik Üniversitesi";
    $student = new Student($name, $surname, $age, $studentNo, $schoolName);

    myPrint($student->getName());

    $student->setName("Osman");

    myPrint($student->getName());

    myPrint($student->getSchoolName());

    myPrint($student->getStudentNo());

    

function myPrint($value){
    echo $value . "<br>";
}


?>