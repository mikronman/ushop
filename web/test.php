<?php
include("connect.php");
include ("../controllers/Transactions.php");
require 'autoload.php';
require '../vendor/autoload.php';
use yii\helpers\Html;
use yii;
//use app\controllers;
use app\models\Orders;
use yii\widgets\DetailView;
use net\authorize\api\contract\v1 as AnetAPI;
use net\authorize\api\controller as AnetController;

$processOrder = new app\controllers\Transactions();
$processOrder = $processOrder->processOrder($_POST, $externalOrder = true);
var_dump($_POST);
?>
