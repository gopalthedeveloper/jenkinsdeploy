<?php
$redis = new Redis();
$redis->pconnect('127.0.0.1');
var_dump($redis);
die;$redis->ping('hello');
// print_r();
?>