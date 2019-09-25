<?php
require_once 'Users.php';

$admin = new Admins ('Den','1988',"dev",'1000');
$serializeUser = serialize($admin);
var_dump($serializeUser);
