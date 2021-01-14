<?php 

//用户信息入库
echo "<pre>"; print_r($_POST);echo "</pre>";

$response = [
    'error' =>0,
    'msg' => 'ok'
];

echo json_encode($response);

 ?>