<?php

class Users
{
    private const USER_MIN_SALARY = 100;
    private $age;
    private $name;
    private $salary;
    private $data = [];
    public static $countUsers = 0;

    /**
     *
     * @param string $name
     * @param int $age
     * @param int $salary
     */

    public function __construct(string $name, int $age, int$salary)
    {
        self::$countUsers++;
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
        self::$countUsers--;
    }
    public function __get(string $name):?string
    {
        // TODO: Implement __get() method.
        return $this->data[$name] ?: null;
    }
    public function __set($name, $value)
    {
        $this->data[$name] = $value;
        // TODO: Implement __set() method.
    }

    public static function getCountUsers()
    {
        return self::$countUsers;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function getSalary(): ?int
    {
        return $this->salary;
    }

    public function setSalary(int $s): void
    {
        $this->salary = $s;
    }

    public function show()
    {
        printf("Name:%s<br>Age:%s<br>Salary:%s<br>Some:%s",
            $this->getName(),
            $this->getAge(),
            $this->getSalary(),
            $this->__get()
        );
    }
}
