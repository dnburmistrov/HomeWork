<?php
require_once("users.php");

$user1 = new UsersTest("Admin", '1995-01-30', 'Php-Developer', 1000);
echo "<pre>";
var_dump($user1);
$user2 = clone $user1;
echo "<pre>";
var_dump($user1);
$user2->setSalary(2000);
$user2->setPosition('Manager');
echo "<pre>";
var_dump($user2);

$user3 = new UsersTest('HR', '1988-16-30', 'C#', 2000);


echo "<pre>";
var_dump(UsersTest::getCountUsers());

UsersTest::setCountUsers(1, '25', '255');
var_dump(UsersTest::getCountUsers());

