<?php


class ShowLine
{
    private $user;//interfaceShowUSer

    public function add(interfaceShowUsers $user)
    {
        $this->user[] = $user;
    }

    public function showAll()
    {
        foreach ($this->user as $user) {
            $this->show($user);
        }
    }

    private function show(interfaceShowUsers $user): void
    {
        printf('<p>User Name: %s, User Position: %s, User Salary: %s</p>',
            $user->getFullName(), $user->getPosition(), $user->getSalary());
    }
}



