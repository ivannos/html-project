<?php
define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__.'/classes/User.php');
$users = new Users();
$users->logout(); // spustenie metódy logout v classe User
?>