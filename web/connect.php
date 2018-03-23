<?php
$devArray = array(
    '127.0.0.1',
    '::1',
    'localhost'
);
if(in_array($_SERVER['REMOTE_ADDR'], $devArray)) {
    try {
        $db = new PDO("mysql:host=107.180.44.133;dbname=ushopcrm;charset=utf8", "ushopdev", "ushopcrm2017");
    } catch (Exception $e) {
        echo "An error has occurred while connecting to database";
    }
}
else
{
    try {
        $db = new PDO("mysql:host=localhost;dbname=ushopcrm;charset=utf8", "ushopdev", "ushopcrm2017");
    } catch (Exception $e) {
        echo "An error has occurred while connecting to database";
    }
}
?>