<?php
require_once 'users.php';
$user1 = new UsersTest("Admin", '1995-01-30', 'Php-Developer', 1000);

$objectStr = serialize($user1);
print_r($objectStr);
$userSerialised = unserialize($objectStr,['allowed_classes'=> ['Users1']]);

echo '<pre>';
var_dump($userSerialised);

