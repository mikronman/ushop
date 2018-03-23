<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Orders */

$this->title = 'Create Order';
$this->params['breadcrumbs'][] = ['label' => 'Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="orders-create">
	<div class="w100 left">
    	<h1><?= Html::encode($this->title) ?></h1>
	</div>
    <div class="w100 left pa10">
		<?= $this->render('_form', [
            'model' => $model,
        ]) ?>
    </div>
</div>