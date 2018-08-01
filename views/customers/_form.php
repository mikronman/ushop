<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Campaigns */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="campaigns-form">

    <?php $form = ActiveForm::begin(); ?>
	
	<div class="w100 left mb10">
		<div class="w50 left pa5 respond-width">
			<?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>
		</div>
		<div class="w50 left pa5 respond-width">
			<?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>
		</div>
		<div class="w100 left pa5">
			<?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>
		</div>
		<div class="w50 left pa5 respond-width">
			<?= $form->field($model, 'address2')->textInput(['maxlength' => true]) ?>
		</div>
		<div class="w50 left pa5 respond-width">
			<?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>
		</div>
   	</div>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>