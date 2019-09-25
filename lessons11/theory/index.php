<?php
require 'User.php';
require 'Admin.php';
require 'Manager.php';

$user = new Worker("db", "den", "pass");
checkPassword($user, '123', 'ddbb');
checkPassword($user, 'pass', 'db');

$user1 = new Admin("db", "den", "pass", 1);
$user1 -> checkPass('pass');
checkPassword($user, 'pass', 'ddbb');
checkPassword($user, 'pass', 'db');

$user2 = new Manager('db', "den", 'pass', 0);
$user2->setRole('director');
checkPassword($user2, 'pass', 'db');

function checkPassword(Worker $user, $pass, $login)
{
    if ($user->checkPass($pass, $login)) {
        printf('У пользователя: %s правильный пароль и логин <br>', $user->getName());
        if ($user instanceof Manager) {
            printf('Роль менеджера: %s <br>', $user->getRole());
        }
    } else {
        printf('У пользователя: %s не правильный пароль <br>', $user->getName());
    }
}

