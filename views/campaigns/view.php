<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Campaigns */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Campaigns', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="campaigns-view">

    <h1><?= Html::encode($this->title) ?> <?php echo $_GET["productPrice"]; ?></h1>

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
            'id',
            'enabled',
            'name',
            'integration_type',
            'upsell',
            'gateway',
            'currency',
            'created_by',
            'created_date',
            'updated_by',
            'updated_date',
            'product_config',
            'prod_id',
            'prod_name',
            'prod_inv_left',
            'prod_sku',
            'prod_price',
            'prod_search',
            'enable_tax',
            'post_back_url:url',
            'url_view_token:url',
            'url_test:url',
            'url_order_type:url',
            'url_order_status:url',
            'url_order_payments:url',
            'url_address:url',
            'returns',
            'promo_coupon_code',
            'enable_third_party_provider',
            't_p_fulfillment',
            't_p_anti_fraud',
            't_p_prospect',
            't_p_ord_conf',
            't_p_chargeback',
            't_p_optimized_cust_outcome',
            't_p_membership',
            't_p_tax',
            't_p_data_verification',
            't_p_collections',
            't_p_account_updater',
            'bin_blocking',
            'block_prepaid_cards',
            'allow_custom_pricing',
            'daily_subscription_limit',
            'collections_enabled',
        ],
    ]) ?>

</div>
