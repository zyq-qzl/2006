<?php

function getPdo(){
    $host = '127.0.0.1';
    $user = 'root';
    $pass = 'root';
    $port = '3306';
    $db = "2004shop";
    $pdo = new PDO("mysql:host=$host;dbname=$db",$user,$pass);
    return $pdo;
}


?>