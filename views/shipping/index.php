<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ProductsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Your Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shipping-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <?php
    /* echo Html::a('Create Products', ['create'], ['class' => 'btn btn-successss'])*/
    ?>

    <?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            //'id',
            'method_name',
            'method_description',
            'group_name',
            'initial_amount',
            'subscription_amount',
            'created_date',
            'updated_by',
            'updated_date',
            // 'created_date',
            // 'updated_by',
            // 'updated_date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?></div>
