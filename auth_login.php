<?php
ini_set('display_errors','on');
error_reporting(E_ALL);

$authCode = $_POST['token'];
if (!empty($authCode)) {
    // 模拟解析授权码后数据
    $data = json_encode(['token' => $authCode, 'uid' => 1688288, 'time' => time()]);
    file_put_contents('data/auth.txt', $data);
    echo $data;die;
}


