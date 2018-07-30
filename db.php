<?php

$devArray = array(
    '127.0.0.1',
    '::1',
    'localhost'
);
$_SERVER['REMOTE_ADDR'] ="localhost";

if(in_array($_SERVER['REMOTE_ADDR'], $devArray)){
    return [
        'class' => 'yii\db\Connection',
	'dsn' => 'mysql:host=localhost;dbname=ushopnew',
        'username' => 'root',
        'password' => 'password',
        
    ];
}else{
    return [
        'class' => 'yii\db\Connection',
        'dsn' => 'mysql:host=localhost;dbname=ushopnew',
        'username' => 'root',
        'password' => 'password',
       
    ];
}
?>
