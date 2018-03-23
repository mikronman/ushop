<?php

$devArray = array(
    '127.0.0.1',
    '::1',
    'localhost'
);

if(in_array($_SERVER['REMOTE_ADDR'], $devArray)){
    return [
        'class' => 'yii\db\Connection',
		'dsn' => 'mysql:host=localhost;dbname=ushopcrm',
        'dsn' => 'mysql:host=107.180.44.133;dbname=ushopcrm',
        'username' => 'ushopdev',
        'password' => 'ushopcrm2017',
        'charset' => 'utf8',
    ];
}else{
    return [
        'class' => 'yii\db\Connection',
        'dsn' => 'mysql:host=localhost;dbname=ushopcrm',
        'username' => 'ushopdev',
        'password' => 'ushopcrm2017',
        'charset' => 'utf8',
    ];
}
?>
