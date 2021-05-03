<?php 

require_once "./Human.php";

interface IStudent{
    public function studentInterfaceFunc();
}

interface IX{

}

class Student extends Human implements IStudent, IX
{
    private $studentNo;
    private $schoolName;

    public function __construct($name, $surname, $age, $studentNo, $schoolName)
    {
        parent::__construct($name, $surname, $age);
        $this->studentNo = $studentNo;
        $this->schoolName = $schoolName;
    }

    public function studentInterfaceFunc(){

    }

    /**
     * Get the value of schoolName
     */ 
    public function getSchoolName()
    {
        return $this->schoolName;
    }

    /**
     * Set the value of schoolName
     *
     * @return  self
     */ 
    public function setSchoolName($schoolName)
    {
        $this->schoolName = $schoolName;

        return $this;
    }

    /**
     * Get the value of studentNo
     */ 
    public function getStudentNo()
    {
        return $this->studentNo;
    }

    /**
     * Set the value of studentNo
     *
     * @return  self
     */ 
    public function setStudentNo($studentNo)
    {
        $this->studentNo = $studentNo;

        return $this;
    }
}


?>