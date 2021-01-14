<?php

include "pdo.php";
$pdo = getPdo();

// print_r($_POST);die;
$username = $_POST['name'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
// $password = $_POST['pass'];
// $passes = $_POST['passes'];

if($password!=$passes){
    $response = [
        'error' => '40001',
        'msg' => '密码输入不一致'
    ];
die(json_encode($response));

}

if(strlen($password) <6){
    $response = [
        'error' => '40002',
        'msg' => '密码不得小于6位数'
    ];
    die(json_encode($response));
}


//入库
$sql = "insert into login(`user_name`,`password`) value($username,$password)";
// echo $sql;die;
$pdo->exec($sql);       //执行SQL
$id = $pdo->lastInsertId(); //获取自增ID
if($id>0){  //入库成功
    $response = [
        'errno' => 0,
        'msg'   => 'ok',
    ];
}else{      //入库失败
    $response = [
        'errno' => 400010,
        'msg'   => '注册失败，请重试'
    ];
}

echo json_encode($response);
?>