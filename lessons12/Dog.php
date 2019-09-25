<?php

require_once 'Animal.php';
require_once 'Type.php';
require_once 'Name.php';
require_once 'interfaceAnimal.php';
class Dog extends Animal implements interfaceAnimal

{
    public
    function __construct($name, $type)
    {
        parent::__construct($name);
        $this->type = $type;
    }

use Type, Name{
        Name::getName as getTraitNAme;
}

public
function say(): string
{
    return "woof";
}

public
function getName():string
{
    return $this->name;
}
}