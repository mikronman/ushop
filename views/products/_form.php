<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Products */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="products-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="w50 left pa5 respond-width">
        <?= $form->field($model, 'product_name')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="w25 left pa5 respond-width">
        <?= $form->field($model, 'product_sku')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="w25 left pa5 respond-width">
        <?= $form->field($model, 'product_price')->textInput() ?>
    </div>
    <div class="w100 left pa5 respond-width">
        <?= $form->field($model, 'product_description')->textInput(['maxlength' => true]) ?>
    </div>

    <!--
    <?= $form->field($model, 'subscription')->textInput() ?>
    <?= $form->field($model, 'product_category')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'product_quantity')->textInput() ?>
    <?= $form->field($model, 'created_by')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'created_date')->textInput() ?>
    <?= $form->field($model, 'updated_by')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'updated_date')->textInput() ?>
	-->
    <div class="w100 left pa5 mt15 respond-width">
        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? 'Create Product' : 'Update Product', ['class' => $model->isNewRecord ? 'btn' : 'btn']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>