<?php
require_once "User.php";

class Admin extends Worker
{
    private $rights;

    public function __construct($login, $name, $password, $rights)
    {
        parent::__construct($login, $name, $password);
        $this->rights = $rights;

    }

    public function getRights()
    {
        return $this->rights;
    }
    function checkPass($password, $login = null): bool
    {
        return $this->password === $password;
    }
}