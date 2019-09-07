<?php

class Caz
{
    private $price;
    private $hasSunRoof;
    private $numberOfDoors;
    private $model;

    public function setPrice(int $value)
    {
        $this->price = $value;
        return $this;
    }

    public function setHasSunRoof(bool $value)
    {
        $this->hasSunRoof = $value;
        return $this;
    }

    public function setNumberOfDoors(int $value){
        $this->numberOfDoors = $value;
        return $this;
    }

    public function setModel(string $model){
        $this->model = $model;
        return $this;
    }


    //GETTER

    public function getPrice()
    {
       return $this->price;
    }

    public function getHasSunRoof()
    {
        return $this->hasSunRoof;
    }

    public function getNumberOfDoors(){
       return  $this->numberOfDoors;
    }

    public function getModel(){
        return $this->model;
    }
}

//instance
$car1 = new Caz;
$car1
->setPrice(130000)
->setHasSunRoof(true)
->setNumberOfDoors(2)
->setModel("Sport");

echo $car1->getHasSunRoof();
echo " <br> {$car1->getPrice()} <br> {$car1->getModel()} <br> {$car1->getNumberOfDoors()} ";


echo"<Br><hr>";
$comp = 2<=>1;
echo $comp;
var_dump($comp);