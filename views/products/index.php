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
<div class="products-index index-wrap">
	
    <?php if(!empty($_GET['id'])): ?>
        <div class="success-message">Your product has been successfully created!</div>
    <?php endif; ?>
    <div class="w100 left mb15">
        <div class="left">
			<h1 class=""><?= Html::encode($this->title) ?></h1>
			<p>You can add a new product or edit an existing product.</p>
        </div>
        <div class="mt15 right">
			<?= Html::a('Create a New Product', ['create'], ['class' => 'btn']) ?>
		</div>
    </div>
    <div class="w100 left">
        <?php Pjax::begin(); ?>
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                //['class' => 'yii\grid\SerialColumn'],
                //'id',
                'product_name',
                // 'product_description',
                'product_sku',
                'product_price',
                // 'subscription',
                // 'product_category',
                // 'product_quantity',
                // 'created_by',
                // 'created_date',
                // 'updated_by',
                // 'updated_date',

                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>
        <?php Pjax::end(); ?>
    </div>
</div>
