<?php

include "pdo.php";
$pdo = getPdo();

$user_name = $_POST['name'];
$password = $_POST['pass'];

setcookie($user_name,$uid);

?>