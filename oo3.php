<?php

class Car
{
    private $merek;
    protected $warna;

    protected function hello(){
        return "hello";
    }

    public function set_merek($merek){
        $this->merek = $merek;
    }
    public function get_merek(){
        return $this->merek;
    }
}

class SportCar extends Car
{
    public function hello(){
        return "Sport Hello";

    }

    public function run(){
        return $this->hello();
    }
}


$f1 = new SportCar;
echo $f1->run();
$f1->set_merek("toyota");
$f1->merek = "honda";
echo $f1->merek;
echo $f1->get_merek();
