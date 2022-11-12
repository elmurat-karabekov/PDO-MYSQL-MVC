<?php 

trait MyTrait
{
    public function fly()
    {
        echo "I am flying";
    }
}
trait SecondTrait
{
    public function hello()
    {
        echo "I have engine";
    }
}

Class Plain
{
    use MyTrait, SecondTrait;
}

Class Helicopter
{
    use MyTrait, SecondTrait;
}

Class Car
{
    use SecondTrait;
}


$plain = new Plain();
$heli = new Helicopter();
$car = new Car();
$plain->fly();
$heli->fly();
$plain->hello();
$heli->hello();
$car->hello();
