<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Products */

$this->title = 'Update Product: ID ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="products-update index-wrap">
	<div class="w100 left pa5 mb15">
    	<h1><?= Html::encode($this->title) ?></h1>
    	<br/>
    	<p>Once you update this product, the changes will carry over to every campaign this product is added to.</p>
	</div>
    <div class="w100 left mb25 respond-width">
		<?= $this->render('_form', [
			'model' => $model,
			'attribute_name' => array("test"=>"test")
		]) ?>
	</div>
</div>