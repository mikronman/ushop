<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ReportingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Existing Orders';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="orders-index">

    <div class="w100 left">
        <h1 class="pa10 mt25"><?= Html::encode($this->title) ?></h1>
    </div>
    <?php
    if(!empty($_GET['id'])): ?>
        <div class="success-message w100 left pl25">Order ID <?php echo $_GET['id'] ?> has been successfully created!</div>
    <?php endif; ?>
    <div class="w100 left pa15">
        <?php Pjax::begin(); ?>
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                'id',
                'first_name',
                'last_name',
                'address',
                'city',
                'state',

                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>
        <?php Pjax::end(); ?>
    </div>
    <div class="w100 left pa15">
        <?= Html::a('Place a New Order', ['create'], ['class' => 'btn btn-success']) ?>
    </div>
</div>