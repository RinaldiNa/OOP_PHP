<?php

#$name = "Rinaldi";
//echo $name[-1];
//echo "Nama Saya {$name}";

class User
{
    protected $nama;

    public function __construct($nama = "noname"){
        $this->nama = $nama;
    }

    public function sayHello(){
        return "Hello, my name is {$this->nama}";
    }
}

//instance
$user1 = new user("Rinaldi");

echo $user1->sayHello();

$user2 = new user();

echo $user2->sayHello();
