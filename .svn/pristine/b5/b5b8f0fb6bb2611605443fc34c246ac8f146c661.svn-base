<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Campaigns */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="campaigns-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'enabled')->radioList(array("0" => "No", "1" => "Yes")) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'upsell')->radioList(array("0" => "No", "1" => "Yes")) ?>

    <?= $form->field($model, 'gateway')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\GatewayProviders::find()->asArray()->all(),
        'id',
        'gateway_provider'
    ),
        array(
            'prompt'=>'Select Gateway Provider'
        )
    ) ?>

    <?= $form->field($model, 'currency')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_date')->textInput() ?>

    <?= $form->field($model, 'updated_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'updated_date')->textInput() ?>


    <?= (isset($update)) ? "<h2>Products</h2>" : "" ?>
    <div id="dynamicCampaignProducts"></div>

<h2>Add New Products To Campaign</h2>
    <div id='TextBoxesGroup'>
        <div id="TextBoxDiv1">
            <?php if(isset($update))
            {
                $model->prod_id = '';
            }
            ?>
            <?php echo $form->field($model, 'prod_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Products::find()->asArray()->all(),
                'id',
                'product_name'
            ),
                array(
                    'prompt'=>'Select Product ID',
                    'class'=>'form-control dynamic_product',
                    'name'=>'dynamProducts[]',
                    'onchange'=>'$.post("'.Yii::$app->urlManager->createUrl(["products/loadprices"]).'", {id:$(this).find(":selected").val(),_csrf: $(\'meta[name="csrf-token"]\').attr("content")}, function( data ) {
      $("#regularPrice1").val( data );
     });',
                    'options' => [
                            'options'=>['19'=>['selected'=>'selected']]
                    ]
                ),
                array('options' => array('19'=>array('selected'=>true)))
            ) ?>
            <?php
            echo '<label>Billing Cycle</label>';
            echo '<input type="text" class="form-control" name="dynamBillingCycle[]" value="" />';
            echo '<label>Trial Length</label>';
            echo '<input type="text" class="form-control" name="dynamTrialLength[]" value="" />';
            echo '<label>Trial Price</label>';
            echo '<input type="text" class="form-control" name="dynamTrialPrice[]" value="" />';
            echo '<label>Regular Price</label>';
            echo '<input type="text" id="regularPrice1" class="form-control" name="dynamRegPrice[]" value="" />';
            ?>
        </div>
    </div>
    <button type='button' class="btn btn-success" value='Add Button' id='addButton'>Add Button</button>
    <button type='button' class="btn btn-success" value='Remove Button' id='removeButton'>Remove Button</button>
    <!--<button type='button' class="btn btn-success" value='Get TextBox Value' id='getButtonValue'>Get TextBox Value</button>-->



    <?= $form->field($model, 'prod_sku')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'enable_tax')->radioList(array("0" => "No","1" => "Yes")) ?>

    <?= $form->field($model, 'post_back_url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'url_order_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'url_order_status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'url_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'promo_coupon_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 't_p_fulfillment')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 't_p_tax')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bin_blocking')->radioList( array("0"=>"No", "1" => "Yes")) ?>

    <?= $form->field($model, 'block_prepaid_cards')->radioList( array("0"=>"No","1" => "Yes") ) ?>

    <?= $form->field($model, 'allow_custom_pricing')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'daily_subscription_limit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'collections_enabled')->radioList(array("0" => "No", "1" => "Yes")) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>