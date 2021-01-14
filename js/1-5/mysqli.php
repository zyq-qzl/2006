<?php 

$host = "127.0.0.1";
$port = "3306";
$user = "root";
$pass = "root";
$db = "2004shop";


$mysqli = new mysqli($host,$user,$pass,$db,$port);
// $sql = "select * from p_goods where goods_id=223";
$sql = "select goods_id,goods_name from p_goods limit 3";
$res = $mysqli->query($sql);
$data = $res->fetch_assoc();
echo '<pre>';print_r($data);echo '</pre>';




 ?>