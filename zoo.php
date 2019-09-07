<?php

require "Animal.php";
require "Cow.php";
require "lion.php";

$cow1 = new Cow("Herbivore", "Grass");
$lion1 = new Lion("Canirval", "Meat");

echo " <b> Cow Object </b> <br/>";
echo " The ".Cow::class." belongs to the {$cow1->get_family()} family and eats {$cow1->get_food()} <br> ";

echo " <b> Lion Object </b> <br/>";
echo " The ".Lion::class." belongs to the {$lion1->get_family()} family and eats {$lion1->get_food()} <br> ";
