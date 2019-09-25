<?php
require_once 'Cat.php';
require_once 'Dog.php';
require_once 'showAnimal.php';

$cat = new Cat('Kitty','Home animal');
$dog = new Dog('Chak','Street animal');
$showAnimal = new ShowAnimal($dog);




echo 'Animal type: ' . $cat->getType() . '<br>' .'Name: ' . $cat->getTraitNAme();
echo '<br>';
echo 'Animal type: ' . $dog->getType() . '<br>' .'Name: ' . $dog->getTraitNAme();
echo '<br>';
echo '<br>';
printf($showAnimal ->showDisplay());