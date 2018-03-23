<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CampaignsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="campaigns-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'enabled') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'integration_type') ?>

    <?= $form->field($model, 'upsell') ?>

    <?php // echo $form->field($model, 'gateway') ?>

    <?php // echo $form->field($model, 'currency') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <?php // echo $form->field($model, 'created_date') ?>

    <?php // echo $form->field($model, 'updated_by') ?>

    <?php // echo $form->field($model, 'updated_date') ?>

    <?php // echo $form->field($model, 'product_config') ?>

    <?php // echo $form->field($model, 'prod_id') ?>

    <?php // echo $form->field($model, 'prod_name') ?>

    <?php // echo $form->field($model, 'prod_inv_left') ?>

    <?php // echo $form->field($model, 'prod_sku') ?>

    <?php // echo $form->field($model, 'prod_price') ?>

    <?php // echo $form->field($model, 'prod_search') ?>

    <?php // echo $form->field($model, 'enable_tax') ?>

    <?php // echo $form->field($model, 'post_back_url') ?>

    <?php // echo $form->field($model, 'url_view_token') ?>

    <?php // echo $form->field($model, 'url_test') ?>

    <?php // echo $form->field($model, 'url_order_type') ?>

    <?php // echo $form->field($model, 'url_order_status') ?>

    <?php // echo $form->field($model, 'url_order_payments') ?>

    <?php // echo $form->field($model, 'url_address') ?>

    <?php // echo $form->field($model, 'returns') ?>

    <?php // echo $form->field($model, 'promo_coupon_code') ?>

    <?php // echo $form->field($model, 'enable_third_party_provider') ?>

    <?php // echo $form->field($model, 't_p_fulfillment') ?>

    <?php // echo $form->field($model, 't_p_anti_fraud') ?>

    <?php // echo $form->field($model, 't_p_prospect') ?>

    <?php // echo $form->field($model, 't_p_ord_conf') ?>

    <?php // echo $form->field($model, 't_p_chargeback') ?>

    <?php // echo $form->field($model, 't_p_optimized_cust_outcome') ?>

    <?php // echo $form->field($model, 't_p_membership') ?>

    <?php // echo $form->field($model, 't_p_tax') ?>

    <?php // echo $form->field($model, 't_p_data_verification') ?>

    <?php // echo $form->field($model, 't_p_collections') ?>

    <?php // echo $form->field($model, 't_p_account_updater') ?>

    <?php // echo $form->field($model, 'bin_blocking') ?>

    <?php // echo $form->field($model, 'block_prepaid_cards') ?>

    <?php // echo $form->field($model, 'allow_custom_pricing') ?>

    <?php // echo $form->field($model, 'daily_subscription_limit') ?>

    <?php // echo $form->field($model, 'collections_enabled') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
