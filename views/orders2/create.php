<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Orders */
require 'autoload.php';
require '../vendor/autoload.php';
use net\authorize\api\contract\v1 as AnetAPI;
use net\authorize\api\controller as AnetController;
$this->title = 'Place a New Order';

?>
<div class="orders-create index-wrap">
    <div class="w100 left pa5 mb15">
        <h1 class=""><?= Html::encode($this->title) ?></h1>
    </div>
    <div class="left w100 respond-width">
        <?= $this->render('_form', [
            'model' => $model,
            'create' => true
        ]) ?>
    </div>
</div>
