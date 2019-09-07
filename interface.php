<?php

interface Car
{
    public function set_model($model);
    public function get_model();
}

interface Vehicle
{
    public function setHasWhells($bool);
    public function getHasWhells();
}

class MiniCar implements Car
{
    private $model;
    private $hasWhells;

    public function set_model($model){
        $this->model = $model;
    }

    public function get_model(){
        return $this->model;
    }

    public function setHasWhells($bool){
        $this->hasWhells = $bool;
    }

    public function getHasWhells(){
        return ($this->hasWhells) ? "Has Whells" : "No Whells";
    }
}


//instance
$miniCar1 = new MiniCar;

$miniCar1->set_model("Sport");
$miniCar1->setHasWhells(1);

var_dump($miniCar1->get_model());
var_dump($miniCar1->getHasWhells());