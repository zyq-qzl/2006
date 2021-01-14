<?php
// print_r($_POST);die;

//引入pdo
include "pdo.php";



//接收参数 
$user_name = $_POST['username'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$pass1 = $_POST['pass1'];
$pass2 = $_POST['pass2'];

//验证密码
if($pass1 != $pass2){
    $response = [
        'error' => '40001',
        'msg' => '俩次密码输入不一致',
    ];
    die(json_encode($response));
}

//验证密码长度
if(strlen($pass1) < 6){
    $response = [
        'error' => '40002',
        'msg' => '密码长度不能小于6位数',
    ];
    die(json_encode($response));
}

//生成密码
$password = password_hash($pass1,PASSWORD_BCRYPT);

$pdo = getPdo();
//验证用户名
$sql = "select * from p_users where user_name = '$user_name'";
// echo "$sql";
$res = $pdo->query($sql);
$record = $res->fetch(PDO::FETCH_ASSOC);
if($record){
    $response = [
        'error' => '40003',
        'msg' => '用户名已存在'
    ];
    die(json_encode($response));
}

//验证邮箱
$sql2 = "select * from p_users where email = '$email'";
$res2 = $pdo->query($sql2);
$record2 = $res2->fetch(PDO::FETCH_ASSOC);
if($record2){
    $response = [
        'error' => '40004',
        'msg' => '邮箱已存在'
    ];
    die(json_encode($response));
}

//验证手机号
$sql2 = "select * from p_users where mobile = '$mobile'";
$res2 = $pdo->query($sql2);
$record2 = $res2->fetch(PDO::FETCH_ASSOC);
if($record2){
    $response = [
        'error' => '40005',
        'msg' => '手机号已存在'
    ];
    die(json_encode($response));
}



//入库
$sql = "insert into p_users (`user_name`,`email`,`mobile`,`password`) values ('{$user_name}','{$email}','{$mobile}','{$password}')";
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