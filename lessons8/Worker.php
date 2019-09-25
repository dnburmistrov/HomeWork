<?php


class Worker
{
    private $name;
    private $age;
    private $salary;

    public function __construct($name,$age,$salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function setAge($age): void
    {
        $this->age = $age;
    }

    public function setSalary($salary): void
    {
        $this->salary = $salary;
    }
    public function getName(): string
    {
        return $this->name;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function getSalary(): int
    {
        return $this->salary;
    }
}