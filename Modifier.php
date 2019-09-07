<?php

class Car
{
    private $model;

    public function set_model($model){

        $allowedModel = array("Mercedez", "Ferrari");
        if(in_array($model, $allowedModel)){
            $this->model = $model;
        }else{
            $this->model = "Not allowed model";
        }
    }

    public function get_model(){
        return $this->model;
    }
}

$mercedez = new Car;

$mercedez->set_model("Mercede");
echo $mercedez->get_model();