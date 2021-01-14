<?php 

$host = "127.0.0.1";
$port = "3306";
$user = "root";
$pass = "root";
$db = "2004shop";

$dbh = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
$dbh->query("set names utf8");  //中文
$sql = "select goods_id,goods_name,shop_price from p_goods limit 1";
$res = $dbh->query($sql);   //执行查询
$data = $res->fetchAll(PDO::FETCH_ASSOC);   //获取结果
echo '<pre>';echo json_encode($data);echo '</pre>';

 ?>