<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Orders */
/* @var $model app\models\Shipping */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="orders-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="w100 left pa5 mt15 mb20 respond-width"><h3>Customer Details</h3></div>
    <?= (isset($create)) ? "" : $form->field($model, 'order_id')->hiddenInput()->label(false); ?>
    <?= (isset($create)) ? "" : $form->field($model, 'id')->hiddenInput()->label(false); ?>
    <?= (isset($create)) ? "" : $form->field($model, 'transaction_id')->hiddenInput()->label(false); ?>
    <div class="w50 left pa5 respond-width">
        <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="w50 left pa5 respond-width">
        <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="w66 left pa5 respond-width">
        <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="w33 left pa5 respond-width">
        <?= $form->field($model, 'address2')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="w25 left pa5 respond-width">
        <?= $form->field($model, 'country')->dropDownList(array('Test' => 'Select Country'))?>
    </div>
    <div class="w25 left pa5 respond-width">
        <?= $form->field($model, 'state')->dropDownList(array('Test' => 'Select State'))?>
    </div>
    <div class="w25 left pa5 respond-width">
        <?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="w25 left pa5 respond-width">
        <?= $form->field($model, 'zip')->textInput() ?>
    </div>
    <div class="w50 left pa5 respond-width">
        <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="w50 left pa5 respond-width">
        <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>
    </div>
    
    <div class="w100 left pa5 mt15 mb20 respond-width"><h3>Campaign Details</h3></div>
    <div class="w100 left pa5 respond-width">
    	<div class="form-group field-campaigns-prod_id">
			<?= $form->field($model, 'campaign_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Campaigns::find()->asArray()->all(),
				'id',
				'name'
			),
				array(
					'prompt'=>'None',
					'onchange'=> '$.post("'.Yii::$app->urlManager->createUrl(["campaigns/loadprices"]).'", {id:$(this).find(":selected").val(), product_id:$("#orders-product_name").find(":selected").val(),_csrf: $(\'meta[name="csrf-token"]\').attr("content")}, function( data ) {
			  $("#orders-amount_paid").val( data );
			 });
			 $.post("'.Yii::$app->urlManager->createUrl(["campaigns/loadcampaignproducts"]).'", {id:$(this).find(":selected").val(), product_id:$("#orders-product_name").find(":selected").val(),_csrf: $(\'meta[name="csrf-token"]\').attr("content")}, function( data ) {
			  $("#orders-product_name").html( "<option value>Select Product Name</option>" + data );
			 });'
				)
			) ?>
		</div>
    </div>

        <div class="w100 left pa5 mt15 mb20 respond-width"><h3>Product Details</h3></div>
        <!--
        <div class="w50 left pl15">
            <?= $form->field($model, 'campaign_name')->dropDownList(array('Test' => 'Get Names From Campaign Table'))?>
        </div>
        -->
        <div class="w50 left pa5 respond-width">
					<?= (isset($create)) ? $form->field($model, 'product_name')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Products::find()->asArray()->all(), 'id', 'product_name'),
						array(
							'prompt'=>'Select Product Name',
							'onchange'=>'if(!$("#orders-campaign_id").find(":selected").val() || $("#orders-campaign_id").find(":selected").val() == "None")$.post("'.Yii::$app->urlManager->createUrl(["products/loadprices"]).'", {id:$(this).find(":selected").val(),_csrf: $(\'meta[name="csrf-token"]\').attr("content")}, function( data ) {
			  $("#orders-amount_paid").val( data );
			 });
			 if($("#orders-campaign_id").find(":selected").val())$.post("'.Yii::$app->urlManager->createUrl(["campaigns/loadprices"]).'", {campaign_id: $("#orders-campaign_id").find(":selected").val(),product_id:$(this).find(":selected").val(),_csrf: $(\'meta[name="csrf-token"]\').attr("content")}, function( data ) {
			  $("#orders-amount_paid").val( data );
			 });
			  $.post("'.Yii::$app->urlManager->createUrl(["campaigns/loadcampaigns"]).'", {product_id:$(this).find(":selected").val(), campaign_id:$("#orders-campaign_id").find(":selected").val(),_csrf: $(\'meta[name="csrf-token"]\').attr("content")}, function( data ) {
			  $("#orders-campaign_id").html( "<option value>None</option>" + data );
			 });
			 ')) : $form->field($model, 'product_name')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="w25 left pa5 respond-width">
            <?= $form->field($model, 'quantity')->textInput() ?>
        </div>
        <div class="w25 left pa5 respond-width">
            <?= $form->field($model, 'amount_paid')->textInput() ?>
        </div>
        <!--
        <div class="w100 left pl15">
            <?= $form->field($model, 'subscription')->checkBox() ?>
        </div>
        -->
        <div class="w50 left pa5 respond-width" id="subscriptionBillingContainer">
            <?= $form->field($model, 'billing_cycle')->dropDownList(array('select' => 'Select', 'one' => 'One Time Payment', '30' => 'Subscription: Every 30 Days'))?>
        </div>
        <!--
        <div class="w50 left pl15">
            <?php
        $shippingTypes = \app\models\Shipping::find()->select('method_name')->orderBy('method_name')->asArray()->all();
        $shippingModel = new \app\models\Shipping();
        ?>
            <?= $form->field($shippingModel, 'method_name')->dropDownList(\app\models\Shipping::find()->select('method_name')->orderBy('method_name')->asArray()->all())?>
        </div>
        -->
        <div class="w100 left pa5 mt15 mb20 respond-width"><h3>Payment Details</h3></div>
        <div class="w25 left pa5 respond-width">
            <?= $form->field($model, 'payment_type')->dropDownList(array('select' => 'Select','visa' => 'Visa','master' => 'MasterCard','Amex' => 'American Express','disc' => 'Discover'))?>
        </div>
        <div class="w50 left pa5 respond-width">
            <?= $form->field($model, 'cc_last_four')->textInput() ?>
        </div>
        <div class="w25 left pa5 respond-width">
            <div class="form-group">
                <label class="cvv" for="exp_year">CVV</label>
                <input type="number" id="cvv" name="cvv" class="form-control" value=""/>
            </div>
        </div>
        <div class="w25 left pa5 respond-width">
            <div class="form-group">
                <label class="control-label" for="exp_month">Exp Month</label>
                <select id="exp_month" name="exp_month" class="form-control" value="">
                    <option value="">Select Month</option>
                    <option value="01">January</option>
                    <option value="02">Feruary</option>
                    <option value="03">March</option>
                    <option value="04">April</option>
                    <option value="05">May</option>
                    <option value="06">June</option>
                    <option value="07">July</option>
                    <option value="08">August</option>
                    <option value="09">September</option>
                    <option value="10">October</option>
                    <option value="11">November</option>
                    <option value="12">December</option>
                </select>
            </div>
        </div>
        <div class="w25 left pa5 respond-width">
            <div class="form-group">
                <label class="control-label" for="exp_year">Exp Year</label>
                <select id="exp_year" name="exp_year" class="form-control" value="">
                    <option value="">Select Year</option>
                    <option value="17">2017</option>
                    <option value="18">2018</option>
                    <option value="19">2019</option>
                    <option value="20">2020</option>
                    <option value="21">2021</option>
                    <option value="22">2022</option>
                    <option value="23">2023</option>
                    <option value="24">2024</option>
                    <option value="25">2025</option>
                    <option value="26">2026</option>
                    <option value="27">2027</option>
                    <option value="28">2028</option>
                </select>
            </div>
        </div>
    <!--
    <div class="w50 left pl15">
        <?php echo "<label class=\"control-label\" for=\"orders-account_number\">Account Number</label>"; ?>
        <?php echo "<input type=\"text\" id=\"orders-account_number\" class=\"form-control\" name=\"account_number\" value=\"\">"  ?>
    </div>
    <div class="w50 left pl15">
        <?= $form->field($model, 'routing_number')->textInput() ?>
    </div>
    <div class="w50 left pl15">
        <?php $status_options = array('cancel'=>'cancel', 'active'=>'active', 'refund'=> 'refund'); ?>
        <?= (isset($create)) ? "" : $form->field($model, 'status')->dropDownList($status_options);?>
    </div>
    -->
    <div class="w100 left mt15 mb25 pa5 respond-width">
        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? 'Place Order' : 'Update Order', ['class' => $model->isNewRecord ? 'btn' : 'btn']) ?>
        </div>
    </div>
    <?php //var_dump($create) ?>
    <?php ActiveForm::end(); ?>
</div>
