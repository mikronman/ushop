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
<div class="orders-create">
    <div class="w100 left">
        <h1 class="pa10 mt25"><?= Html::encode($this->title) ?></h1>
    </div>
    <div class="w75 left pa10 pb25 mb25 respond-width">
        <?= $this->render('_form', [
            'model' => $model,
            'create' => true
        ]) ?>
    </div>
</div>
