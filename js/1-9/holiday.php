<?php
//放假时间
$end = strtotime("2021-1-30 17:00:00");
echo $end;

$seconde = $end-time();
echo $seconde;

$response = [
    'error' => '0',
    'msg' => 'OK',
    'data' => [
        'seconde' => $seconde
    ]
];

return json_encode($response);

?>