<?php
require '../../vendor/autoload.php';
use app\controllers\OrdersController;
//use app\models\Orders;
use yii\web\Models;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Url;
/* @var $this \yii\web\View */
/* @var $content string */
/* @var $this yii\web\View */
/* @var $model app\models\Orders */

use yii\db\ActiveRecord;
use yii\base\Model;
use app\models\OrdersSearch;
$values = [
    "first_name"=>"Sterling",
    "last_name"=>"Webb",
];
$customer = new app\models\Orders();
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