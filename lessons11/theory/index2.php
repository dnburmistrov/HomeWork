<?php
require "Cat.php";
require 'Dog.php';

$cat = new Cat('Cat');
$cat->showSay();
echo '<br>';
$dog = new Dog('Dog');
$dog->showSay();