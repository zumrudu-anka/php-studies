<?php 

abstract class Shape{

    protected $edgeCount;
    protected $edges = array();
    
    public function circumference(){
        $result = null;

        foreach ($this->edges as $edge) {
            $result += $edge;
        }

        return $result;
    }

    public abstract function area();

}


class Triangle extends Shape{

    public function __construct($a, $b, $c)
    {
        $this->edgeCount = 3;
        array_push($this->edges, $a , $b, $c);
    }

    public function area(){
        $u = $this->circumference() / 2;

        $result = sqrt($u * ($u - $this->edges[0]) * ($u - $this->edges[1]) * ($u - $this->edges[2]));
    
        return $result;
    }

}


class Square extends Shape{

    public function __construct($a)
    {
        $this->edgeCount = 4;
        for ($i=0; $i < $this->edgeCount; $i++) { 
            array_push($this->edges, $a);
        }
    }

    public function area(){
        return $this->edges[0] ** 2;
    }

}


$obj = new Triangle(3, 4, 5);

echo $obj->circumference();
echo "<br>";
echo $obj->area();
echo "<br>";

$obj2 = new Square(6);
echo $obj2->circumference();
echo "<br>";

echo $obj2->area();
echo "<br>";

?>