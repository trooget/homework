<?php
abstract class Triangle
{
    abstract function side($a, $b, $c);
    abstract function perimeter($a, $b, $c);
    abstract function area($a, $b, $c);
}

final class Equilateral_triangle extends Triangle
{

    public function side($a,$b,$c)
    {
        return "a = {$a}, b = {$b}, c = {$c}</br>";
    }
    public function perimeter($a, $b, $c)
    {
        $perim = $a + $b +$c;
        return "  perimeter = {$perim} </br>";
    }
    public function area($a, $b, $c)
    {
        $plosha = $a*$a*sqrt(3)/4;
        return " area = {$plosha} </br>";
    }
}

final class Rectangular_triangle extends Triangle
{

    public function side($a,$b,$c)
    {
        return "a = {$a}, b = {$b}, c = {$c}</br>";
    }
    public function perimeter($a, $b, $c)
    {
        $perim = $a + $b +$c;
        return "  perimeter = {$perim} </br>";
    }
    public function area($a, $b, $c)
    {
        $plosha = $a*$b/2;
        return " area = {$plosha} </br>";
    }
}

final class Arbitrary_triangle extends Triangle
{

    public function side($a,$b,$c)
    {
        return "a = {$a}, b = {$b}, c = {$c}</br>";
    }
    public function perimeter($a, $b, $c)
    {
        $perim = $a + $b +$c;
        return "  perimeter = {$perim} </br>";
    }
    public function area($a, $b, $c)
    {
        $p = ($a + $b +$c)/2;
        $plosha = sqrt($p*($p-$a)*($p-$b)*($p-$c));
        return " area = {$plosha} </br>";
    }
}

$tria = new Equilateral_triangle();
echo "Equilateral_triangle</br>";
echo $tria -> side(4,4,4);
echo $tria -> perimeter(4,4,4);
echo $tria -> area(4,4,4);
echo "</br>";
$rectan =  new Rectangular_triangle();
echo "Rectangular_triangle</br>";
echo $rectan -> side(3,4,5);
echo $rectan -> perimeter(3,4,5);
echo $rectan -> area(3,4,5);
echo "</br>";
$arbit =  new Arbitrary_triangle();
echo "Arbitrary_triangle</br>";
echo $arbit -> side(3,6,7);
echo $arbit -> perimeter(3,6,7);
echo $arbit -> area(3,6,7);