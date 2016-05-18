<?php
abstract class getTriangle
{
    protected $a;
    protected $b;
    protected $c;

    abstract function __construct($a=5, $b=5, $c=5);
    abstract function getPerimeter();
    abstract function getArea();
}

 class Equilateral_triangle extends getTriangle
{
    /**
     * @return mixed
     */
    public function getA()
    {
        return $this->a;
    }

    /**
     * @param mixed $a
     */
    public function setA($a)
    {
        $this->a = $a;
    }

    /**
     * @return mixed
     */
    public function getB()
    {
        return $this->b;
    }

    /**
     * @param mixed $b
     */
    public function setB($b)
    {
        $this->b = $b;
    }

    /**
     * @return mixed
     */
    public function getC()
    {
        return $this->c;
    }

    /**
     * @param mixed $c
     */
    public function setC($c)
    {
        $this->c = $c;
    }

    public  function __construct($a=5, $b=5, $c=5)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function getPerimeter()
    {
        $perim = $this -> a + $this -> b + $this -> c;
        return " perimeter = {$perim}";
    }

    public function getArea()
    {
        $plosha = $this -> a * $this -> a * sqrt(3)/4;
        return " area = {$plosha} ";
    }
}

class Rectangular_triangle extends Equilateral_triangle
{
    public function getArea()
    {
        $plosha = ($this -> a*$this -> b)/2;
        return " area = {$plosha} ";
    }
}

class Arbitrary_triangle extends Equilateral_triangle
{

    public function getArea()
    {
        $p = ($this -> a + $this -> b +$this -> c)/2;
        $plosha = sqrt($p*($p-$this -> a)*($p-$this -> b)*($p-$this -> c));
        return " area = {$plosha} ";
    }
}

function displayTriangle(getTriangle $triangle){
    echo $triangle->getA() . "<br>";
    echo $triangle->getB() . "<br>";
    echo $triangle->getC() . "<br>";
    echo $triangle->getPerimeter() . "<br>";
    echo $triangle->getArea() . "<br>";
}

echo "Equilateral triangle</br>";
$triangle = new Equilateral_triangle(7,7,7);
displayTriangle($triangle);

echo"</br>";

echo "Rectangular triangle</br>";
$triangle = new Rectangular_triangle(3,4,5);
displayTriangle($triangle);

echo"</br>";

echo "Arbitrary triangle</br>";
$triangle = new Arbitrary_triangle(6,4,7);
displayTriangle($triangle);

