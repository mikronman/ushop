<?php
require '../vendor/autoload.php';
require 'autoload.php';
use app\models\Orders;
use yii\web\Models;
use yii\db\ActiveRecord;
use yii\base\Model;
use app\models\OrdersSearch;
$values = [
    "first_name"=>"Sterling",
    "last_name"=>"Webb",
];
$customer = new Orders();
/*$customer->transaction_id = $tresponse->getTransId();
$customer->first_name = "Sterling";
$customer->last_name = "Webb";
$customer->email = "sterlingwebb@aol.com";
$customer->address = "123 Street Rd";
$customer->address2 = "";
$customer->city = "St Petersburg";
$customer->state = "FL";
$customer->zip = "33712";
$customer->country = "United States";*/
$customer->attributes = $values;
$customer->save(false);
echo "test";