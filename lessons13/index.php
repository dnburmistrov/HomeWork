<?php
require_once 'interfaceShowUsers.php';
require_once 'Users.php';
require_once 'Manager.php';
require_once 'ShowBrowser.php';
require_once 'ShowLine.php';

$user = new Users('Den', '1988-16-04', 'Dev', 10000);
$manager = new Manager('Denis','Dev',10000);

if (isset($_SERVER['REQUEST_METHOD'])) {
    $showDisplay = new ShowBrowser($manager);
} else {
    $showDisplay = new ShowLine($manager);
}

$showDisplay->add($user);
$showDisplay->add($manager);
$showDisplay->showAll();