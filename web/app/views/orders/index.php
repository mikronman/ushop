<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\OrdersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Orders';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="orders-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Orders', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'order_id',
            'id',
            'campaign_id',
            'campaign_name',
            'transaction_id',
            // 'product_id',
            // 'subscription',
            // 'quantity',
            // 'product_name',
            // 'amount_paid',
            // 'upsell_id',
            // 'tracking_number',
            // 'shipping_status',
            // 'shipping_method',
            // 'payment_type',
            // 'status',
            // 'cc_last_four',
            // 'customer_id',
            // 'payment_gateway_id',
            // 'first_name',
            // 'last_name',
            // 'email:email',
            // 'address',
            // 'address2',
            // 'city',
            // 'state',
            // 'zip',
            // 'country',
            // 'ip',
            // 'aff_id',
            // 'sub_aff_id',
            // 'confirm_status',
            // 'rma',
            // 'billing_cycle',
            // 'routing_number',
            // 'order_date',
            // 'next_r_date',
            // 'next_r_product',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
