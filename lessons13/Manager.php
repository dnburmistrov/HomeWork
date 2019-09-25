<?php


class Manager implements interfaceShowUsers
{
    private $name;
    private $position;
    private $salary;
    public function  __construct($name,$position,$salary)
    {
        $this->name = $name;
        $this->position = $position;
        $this->salary = $salary;
    }

    public function getPosition(): string
    {
        return $this->position;
    }

    public function getSalary(): int
    {
        return $this->salary;
    }
    public function getFullName():string
    {
        return $this->name;
    }
}