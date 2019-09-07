<?php

abstract class Car
{
    protected $tankVolume;
    private $gear;

    public function set_tank_volume($volume){
        $this->tankVolume = $volume;
    }

    abstract public function calcNumMilesOnFullTank();
}


class Honda extends Car
{
    public function calcNumMilesOnFullTank()
    {
        $miles = $this->tankVolume * 30;
        return $miles;
    }
}

class Toyota extends Car
{
    public function calcNumMilesOnFullTank()
    {
        $miles = $this->tankVolume * 33;
        return $miles;
    }

    public function getColor(){
        return "beige";
    }
}


//instance
$toyota1 = new Toyota;
$toyota1->set_tank_volume(10);
echo Toyota::class;
echo $toyota1->calcNumMilesOnFullTank();
echo $toyota1->getColor();

echo "<br><bR>";

$honda1 = new Honda;
$honda1->set_tank_volume(15);
echo $honda1->calcNumMilesOnFullTank();

$honda1->gear = 4;
echo $honda1->gear;
