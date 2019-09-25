<?php


abstract class Animal
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    abstract public function say(): string;

    public function showSay()
    {
        printf("Our Animal:%s<br>Animal say: %s!", $this->name,$this->say());
    }
}