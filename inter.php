<?php
interface Quadrangle
{

    public function __construct($a, $b);
}

trait side {
    function figure($a,$b){
        if ($a==$b){
            echo " Square</br>";
        }else{
            echo " Rectangle</br>";
        }
    }

}

class Rectangle implements Quadrangle
{
    public $a;
    public $b;
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


    public  function __construct($a=3, $b=5)
    {
       echo $this->a = $a."</br>";;
       echo $this->b = $b."</br>";;
    }

    use side;
}

class Square extends Rectangle
{
    public  function __construct($a=4, $b=4)
    {
       echo $this->a = $a."</br>";
       echo $this->b = $b."</br>";;
    }
    use side;
}


/*function displayQuadrangle(Quadrangle $side){
    echo $side->getA() . "<br>";
    echo $side->getB() . "<br>";
    echo $side->figure() . "<br>";
}

$side = new Rectangle(7,5);
displayQuadrangle($side);

echo"</br>";

$side = new Square(4,4);
displayQuadrangle($side);*/

$example = new Square();
$example->a;
$example->b;
$example->figure(4,4);
$exam = new Rectangle();
$exam->a;
$exam->b;
$exam->figure(3,5);



