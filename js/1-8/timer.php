<?php

$num = mt_rand(1,9);
if($num ==5){
    $response = [
        'error' => '0',
        'msg' => '一等奖'
    ];

}
if($num ==2){
    $response = [
        'error' => '0',
        'msg' => '二等奖'
    ];
}
if($num ==6){
    $response = [
        'error' => '0',
        'msg' => '三等奖'
    ];
}

if($num ==7 && $num == 9){
    $response = [
        'error' => '0',
        'msg' => '加油，请在此参与'
    ];
}
if($num == 0){
    $response = [
        'error' => '0',
        'msg' => '谢谢参与'
    ];
}

echo json_encode($response);

?>