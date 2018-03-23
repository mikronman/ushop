<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Campaigns */

$this->title = 'Create Campaigns';
$this->params['breadcrumbs'][] = ['label' => 'Campaigns', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="campaigns-create  index-wrap">

    <div class="w100 left pa5 mb15">
        <h1 class=""><?= Html::encode($this->title) ?></h1>
    </div>
	
    <div class="left w100 respond-width">
		<?= $this->render('_form', [
			'model' => $model,
			'create' => true
		]) ?>
	</div>
	
</div>
