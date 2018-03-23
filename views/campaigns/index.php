<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\CampaignsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Your Campaigns';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="campaigns-index index-wrap">
	
   	<div class="w100 left mb15">
        <div class="left">
			<h1 class=""><?= Html::encode($this->title) ?></h1>
			<p>You can add a new campaign or edit an existing campaign.</p>
        </div>
        <div class="mt15 right">
			<?= Html::a('Create a New Campaign', ['create'], ['class' => 'btn']) ?>
		</div>
    </div>
    <?php
    if(!empty($_GET['id'])): ?>
        <div class="success-message w100 left mt15 mb15">Your product has been successfully created!</div>
    <?php endif; ?>
    <div class="w100 left">
        <?php Pjax::begin(); ?>
		<?= GridView::widget([
			'dataProvider' => $dataProvider,
			'filterModel' => $searchModel,
			'columns' => [
				// ['class' => 'yii\grid\SerialColumn'],
				// 'id',
				// 'enabled',
				'name',
				// 'integration_type',
				'upsell',
				// 'gateway',
				// 'currency',
				// 'created_by',
				// 'created_date',
				// 'updated_by',
				// 'updated_date',
				// 'product_config',
				// 'prod_id',
				// 'prod_name',
				// 'prod_inv_left',
				// 'prod_sku',
				// 'prod_price',
				// 'prod_search',
				// 'enable_tax',
				// 'post_back_url:url',
				// 'url_view_token:url',
				// 'url_test:url',
				// 'url_order_type:url',
				// 'url_order_status:url',
				// 'url_order_payments:url',
				// 'url_address:url',
				// 'returns',
				// 'promo_coupon_code',
				// 'enable_third_party_provider',
				// 't_p_fulfillment',
				// 't_p_anti_fraud',
				// 't_p_prospect',
				// 't_p_ord_conf',
				// 't_p_chargeback',
				// 't_p_optimized_cust_outcome',
				// 't_p_membership',
				// 't_p_tax',
				// 't_p_data_verification',
				// 't_p_collections',
				// 't_p_account_updater',
				// 'bin_blocking',
				// 'block_prepaid_cards',
				// 'allow_custom_pricing',
				// 'daily_subscription_limit',
				// 'collections_enabled',

				['class' => 'yii\grid\ActionColumn'],
			],
		]); ?>
		<?php Pjax::end(); ?>
    </div>
</div>
