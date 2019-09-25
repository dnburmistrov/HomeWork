<?php
require_once 'Admin.php';

class Manager extends Admin
{
    private $role;

    public function getRole()
    {
        return $this->role;
    }

    public function setRole($role): void
    {
        $this->role = $role;
    }
}