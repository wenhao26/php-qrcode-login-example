<?php
ini_set('display_errors','on');
error_reporting(E_ALL);

// 利用SSE
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');

$token = $_GET['token'];

$dataJson = file_get_contents('data/auth.txt');
$dataArr = json_decode($dataJson, true);
if ($token == $dataArr['token']) {
    file_put_contents('data/auth.txt', '');

    echo "data: {$dataJson}\n\n";
} else {
    echo "data: monitor\n\n";
}
flush();
