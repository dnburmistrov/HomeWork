<?php

class User
{
    private $login;
    protected $password;
    private $name;

    public function __construct($login, $name, $password)
    {
        $this->name = $name;
        $this->login = $login;
        $this->password = $password;

    }

    function getLogin()
    {
        return $this->login;
    }

    function getName()
    {
        return $this->name;
    }

    function checkPass($password, $login): bool
    {
        return $this->password === $password && $this->login === $login;
    }
}


