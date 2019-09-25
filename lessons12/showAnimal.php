<?php


class ShowAnimal
{
    private $animal;

    public function __construct(interfaceAnimal $animal)
    {
        $this->animal = $animal;
    }

    public function showDisplay(): void
    {
        printf('Animal type: %s<br>Name: %s<br>',
            $this->animal->getType(),
            $this->animal->getName(),
            $this->animal->say()
        );
    }
}
