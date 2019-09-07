<?php

class Books { // The Class -------------------------------------------

    // property or attribut   
    protected $price, $title; 

    public function __construct($title, $price)
    {
        $this->price = $price;
        $this->title = $title;
    }
    
    public function __destruct()
    {
        //destructor
    }

    // Method
    public function setPrice($data){
        $this->price = $data;
        return $this;
    }

    public function getPrice(){
        return $this->price;
    }

    public function setTitle($data){
        $this->title = $data;
        return $this;
    }

    public function getTitle(){
        return $this->title;
    }

}

// Instace or Object
$physics = new Books("Gravity", "90.000");
$maths = new Books("Math Modulus", "90.000");
$science = new Books("The Earth", "100.000");


//Setter
$science
    ->setPrice("120.000")
    ->setTitle("Computer Science");

$physics
    ->setPrice("150.000")
    ->setTitle("Relavitation");

$maths
    ->setPrice("120.000")
    ->setTitle("Logical and Algoritma");

    //Getter
echo " Books Title : {$physics->getTitle()} | Rp. {$physics->getPrice()} ";
echo "<br/>";
echo " Book title : {$maths->getTitle()} | Rp. {$maths->getPrice()} ";
echo "<br/>";
echo " Book title : {$science->getTitle()} | Rp. {$science->getPrice()} ";


echo "<hr>";


class foo {
    public $bar;

    public function __construct(){
        $this->bar = function(){ // Anonymous function
            return 42;
        };
    }

    public function print(){
        return "Parent Func Print";
    }

}


class chFoo extends foo {
    
    public function print(){
        return parent::print() . " Child ";
    }

    public static function s(){
        return "this is static";
    }

}



//parent
$obj = new foo;
echo ($obj->bar)() . '<br/>'; //Anonymous function

//child
$objChild = new chFoo;
echo $objChild->print() . " <br/> ";
echo chFoo::s() . "<br>";
echo chFoo::class;


//Reference
echo "<hr>";

$a = 1;
$b = 2;
$c = &$b;

echo "<br/> $a <br/> $b <br/> $c";

$b = &$a;
echo "<br/> $a <br/> $b <br/> $c";














//TIME
echo "<hr>";
date_default_timezone_set("Asia/Jakarta");
echo date("Y-m-d H:i:s", time());
echo "<br/>";
echo time();
echo "<br/>";

//
$waktu =  explode(":",date("H:i:s"));
$jamKeMenit = $waktu[0] * 60;
echo $menitKeDetik = ($jamKeMenit + $waktu[1]) * 60 + $waktu[2]; 

