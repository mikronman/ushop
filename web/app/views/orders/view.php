<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Orders */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="orders-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'order_id',
            'id',
            'campaign_id',
            'campaign_name',
            'transaction_id',
            'product_id',
            'subscription',
            'quantity',
            'product_name',
            'amount_paid',
            'upsell_id',
            'tracking_number',
            'shipping_status',
            'shipping_method',
            'payment_type',
            'status',
            'cc_last_four',
            'customer_id',
            'payment_gateway_id',
            'first_name',
            'last_name',
            'email:email',
            'address',
            'address2',
            'city',
            'state',
            'zip',
            'country',
            'ip',
            'aff_id',
            'sub_aff_id',
            'confirm_status',
            'rma',
            'billing_cycle',
            'routing_number',
            'order_date',
            'next_r_date',
            'next_r_product',
        ],
    ]) ?>

</div>
