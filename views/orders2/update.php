<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Orders */

$this->title = 'Update Order: ID ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="orders-update index-wrap">
	<div class="w100 left pa5 mb15">
    	<h1><?= Html::encode($this->title) ?></h1>
	</div>
    <div class="left w100 respond-width">
		<?= $this->render('_form', [
			'model' => $model,
		]) ?>
	</div>
</div>
<?php
if (isset($_POST))
{
/*$accountNumber = Yii::$app->getRequest()->post();
$session = Yii::$app->session;
$session->open();
Yii::$app->session['account_number'] = $accountNumber; */
//$session->close();
}
?>