<?php

use http\Client\Curl\User;

require_once "Users.php";
$counUsers = 0;
$user1 = new UsersTest('Den', 24,100);
$user2 = new UsersTest('Den', 24,100);
$user1->show();
echo '<br>';
$user2->show();
echo '<br>';
$user1-> year = 2000;
$user1-> month =12;
$user1->show();