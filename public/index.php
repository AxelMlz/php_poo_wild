<?php

/***************************************/
/******** ⚠️ WORK HERE ONLY ⚠️ ***********/

require __DIR__ . '/../src/Animal.php';
require __DIR__ . '/../src/Area.php';

// var_dump(Animal::CENTIMETERS_IN_METER);
// var_dump(Animal::THREATENED_LEVELS);

$savana = new Area('savana');
$areas = [$savana];

$animals = [];
$lion = new Animal('Lion', 4);
$parrot = new Animal( 'Parrot', 2);
$Komodo_Dragon = new Animal('Komodo Dragon', 4);
$iguana = new Animal('Iguana', 4);


$lion->carnivorous = true;

$parrot->carnivorous = false;

$Komodo_Dragon->carnivorous = true;

$iguana->carnivorous = true;
array_push($animals, $lion, $parrot, $Komodo_Dragon, $iguana);

$lion->setSize(120);
$parrot->setSize(50);
$Komodo_Dragon->setSize(270);
$iguana->setSize(130);

$lion->threatenedLevel = "VU";
$parrot->threatenedLevel = "EN";
$Komodo_Dragon->threatenedLevel = "EN";
$iguana->threatenedLevel = "EN";

$lion->setThreatenedLevel();
$parrot->setThreatenedLevel();
$Komodo_Dragon->setThreatenedLevel();
$iguana->setThreatenedLevel();

$savana-> addAnimal($lion);
// var_dump($savana);

/***************************************/
/***************************************/


// Do not modify code below
require 'view.php';