<?php

class Car
{
    protected $driver;

    public function __construct(Driver $driver)
    {
        $this->driver = $driver;    
    }
    public function calculate(array $models)
    {
        foreach ($models as $item) {
            
            echo $carModel = $item[0];
            echo ":";
            echo $numberOfMiles = $item[1] * $item[2];
            echo "<br><br>";          
            
        }
    }
}

class Driver
{

}


//instance
$driver1 = new Driver;
$car1 = new Car($driver1);

$models = [
    ["Toyota", 12, 40],
    ["Honda", 13, 41]
];

$car1->calculate($models);