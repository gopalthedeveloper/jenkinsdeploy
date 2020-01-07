<?php
$redis = new Redis();
$redis->pconnect('127.0.0.1');
// var_dump($redis);

$redis->set('gop','gop');
echo $redis->get('gop');
print_r($redis);
?>