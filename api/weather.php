<?php
echo "<pre>";print_r($_GET);echo "<pre>";die;
$host = "127.0.0.1";
$prot = "3306";
$user = "root";
$pass = "root";
$db = "2004shop";

$pdo = new PDO("mysql:host=$host;dbname=$db",$user,$pass);





?>