<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Orders */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="orders-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="w100 left mb25 pl15"><h3>Customer Information</h3></div>
    <?= $form->field($model, 'order_id')->textInput() ?>
    <?= $form->field($model, 'id')->textInput() ?>
    <?= $form->field($model, 'transaction_id')->textInput() ?>
	<div class="w50 left pl15 respond-width">
		<?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="w50 left pl15">
    	<?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>
    </div>
	<div class="w66 left pl15">
		<?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>
    </div>
	<div class="w33 left pl15">
		<?= $form->field($model, 'address2')->textInput(['maxlength' => true]) ?>
    </div>
	<div class="w33 left pl15">
		<?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>
    </div>
	<div class="w33 left pl15">
		<?= $form->field($model, 'state')->dropDownList(array('Test' => 'Need List of States'))?>
    </div>
	<div class="w33 left pl15">
		<?= $form->field($model, 'zip')->textInput() ?>
    </div>
	<div class="w50 left pl15">
		<?= $form->field($model, 'country')->dropDownList(array('Test' => 'Need List of Countries'))?>
	</div>
    <div class="w50 left pl15">
		<?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="w100 left mt25">
    	<div class="w100 left mb25 pl15"><h3>Product Information</h3></div>
    	<div class="w50 left pl15">
			<?= $form->field($model, 'campaign_name')->dropDownList(array('Test' => 'Get Names From Campaign Table'))?>
        </div>
        <div class="w50 left pl15">
        	<?= $form->field($model, 'product_name')->textInput(['maxlength' => true]) ?>
        </div>
    	<div class="w100 left pl15">
        	<?= $form->field($model, 'subscription')->checkBox() ?>
        </div>
        <div class="w50 left pl15">
        	<?= $form->field($model, 'billing_cycle')->dropDownList(array('select' => 'Select','30' => 'Every 30 Days','date' => 'Specific Date'))?>
        </div>
    	<div class="w50 left pl15">
        	<?= $form->field($model, 'quantity')->textInput() ?>
        </div>
    	<div class="w50 left pl15">
        	<?= $form->field($model, 'amount_paid')->textInput() ?>
        </div>
    	<div class="w50 left pl15">
        	<?= $form->field($model, 'shipping_method')->dropDownList(array('Test' => 'Get Methods from Table'))?>
        </div>
	</div>
    <div class="w100 left mt25">
    	<div class="w100 left mb25 pl15"><h3>Payment Information</h3></div>
    	<div class="w25 left pl15">
        	<?= $form->field($model, 'payment_type')->dropDownList(array('select' => 'Select','visa' => 'Visa','master' => 'MasterCard','Amex' => 'American Express','disc' => 'Discover'))?>
        </div>
    	<div class="w25 left pl15">
        	<?= $form->field($model, 'cc_last_four')->textInput() ?>
        </div>
    </div> 
    <!-- -->
    <div class="w50 left pl15">
	<?php echo "<label class=\"control-label\" for=\"orders-account_number\">Account Number</label>"; ?>
    <?php echo "<input type=\"text\" id=\"orders-account_number\" class=\"form-control\" name=\"account_number\" value=\"\">"  ?>
    </div>
    <div class="w50 left pl15">
    <?= $form->field($model, 'routing_number')->textInput() ?>
    </div>
    <div class="w50 left pl15">
    <?php $status_options = array('cancel'=>'cancel', 'active'=>'active', 'refund'=> 'refund'); ?>
    <?= $form->field($model, 'status')->dropDownList($status_options,array('test' => 'test','test'=>'test'))?>
    </div>
        <!-- -->
    <div class="w100 left mt15 mb25 pl15">
        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>
	</div>

    <?php ActiveForm::end(); ?>

</div>
