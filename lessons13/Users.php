<?php

class Users implements interfaceShowUsers
{
    private $name, $dateOfBirth, $position, $salary;
    private static $count = 0;

    public function __construct($name, $dateOfBirth, $position, $salary)
    {
        $this->name = $name;
        $this->dateOfBirth = $dateOfBirth;
        $this->position = $position;
        $this->salary = $salary;
        self::$count++;

    }

    public function __clone()
    {
        $this->salary = null;
        $this->position = null;
        self::$count++;


    }
    public function __sleep()
    {
        // TODO: Implement __sleep() method.
    }

    /**
     * @param mixed $salary
     */
    public function setSalary($salary): void
    {
        $this->salary = $salary;
    }


    /**
     * @param mixed $position
     */
    public function setPosition($position): void
    {
        $this->position = $position;
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

    public static function getCountUsers(): int
    {
        return self::$count;
    }

    public static function __callStatic(string $name, array $arguments)
    {
        if ($name == 'setCountUsers') {
            self::$count = $arguments[0];
        }
        else{
            self::$count--;
        }
    }

}

