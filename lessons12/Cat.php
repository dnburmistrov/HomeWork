<?php
require_once 'Animal.php';
require_once 'Type.php';
require_once 'Name.php';

class Cat extends Animal
{
    public function say(): string
    {
        return 'may';
    }

    use Type, Name {
        Name::getName as getTraitNAme;
}

    public function __construct($name, $type)
    {
        parent::__construct($name);
        $this->type = $type;
    }

    public function getName()
    {
        $this->name;
    }

}
