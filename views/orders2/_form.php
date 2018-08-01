<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model app\models\Orders */
/* @var $model app\models\Shipping */
/* @var $model app\models\Gateway */
/* @var $form yii\widgets\ActiveForm */
?>
<?php
session_start();
$selectedGateway = \app\models\Gateway::find()->select('gateway_id')->orderBy('gateway_id')->asArray()->all();
$selectedGateway = $selectedGateway[0]["gateway_id"];
$gatewayURL = 'https://ataraxia.transactiongateway.com/api/v2/three-step';
$APIKey = '2F822Rw39fx762MaV7Yy86jXGTC7sCDy';
        /*if(!empty($_POST)){
            echo "post submitted";
            echo json_encode($_POST);
            exit;
        }*/
?>
<?php if($selectedGateway == 1){ ?>
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
            <?= $form->field($model, 'billing_cycle')->dropDownList(array('select' => 'Select', 'one' => 'One Time Payment', '30' => 'Every 30 Days'))?>
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
    <?php ActiveForm::end(); ?>
</div>
<?php
}
if($selectedGateway == 2){
if (empty($_POST['DO_STEP_1']) && empty($_GET['token-id'])) { ?>
<div class="orders-form">
    <?= Html::beginForm(['create'], 'post', ['enctype' => 'multipart/form-data']); ?>

    <div class="w100 left pa5 mt15 mb20 respond-width">
        <h2>Step One: Collect non-sensitive payment information.<br /></h2>
        <h3>Customer Details</h3>
        <!-- <h4> Billing Details</h4>-->
    </div>

    <div class="w50 left pa5 respond-width">
        <?= Html::label('Customer Vault ID', 'customer-vault-id', ['class' => 'control-label']); ?>
        <?= Html::textInput('customer-vault-id','', ['class' => 'form-control']); ?>
    </div>
    <div class="w50 left pa5 respond-width">
        <?= Html::label('Company', 'billing-address-company', ['class' => 'control-label']); ?>
        <?= Html::textInput('billing-address-company','', ['class' => 'form-control']); ?>
    </div>
    <div class="w50 left pa5 respond-width">
        <?= Html::label('First Name', 'first_name', ['class' => 'control-label']); ?>
        <?= Html::textInput('first_name','', ['class' => 'form-control', 'maxlength' => '255', 'required' => true]); ?>
    </div>
    <div class="w50 left pa5 respond-width">
        <?= Html::label('Last Name', 'last_name', ['class' => 'control-label']); ?>
        <?= Html::textInput('last_name','', ['class' => 'form-control', 'required' => true]); ?>
    </div>
    <div class="w66 left pa5 respond-width">
        <?= Html::label('Address', 'address', ['class' => 'control-label']); ?>
        <?= Html::textInput('address','', ['class' => 'form-control']);?>
    </div>
    <div class="w33 left pa5 respond-width">
        <?= Html::label('Address 2', 'address2', ['class' => 'control-label']); ?>
        <?= Html::textInput('address2','', ['class' => 'form-control']);?>
    </div>
    <div class="w25 left pa5 respond-width">
        <?= Html::label('County', 'country', ['class' => 'control-label']); ?>
        <?= Html::dropDownList('Orders[country]', array('Test' => 'Select Country'), null,
            array(
                'prompt' => 'Select Country',
                'id' => 'orders-country',
                'class' => 'form-control'
            ))?>
    </div>
    <div class="w25 left pa5 respond-width">
        <?= Html::label('State', 'state', ['class' => 'control-label']); ?>
        <?= Html::dropDownList('Orders[state]', array('Test' => 'Select State'), null,
            array(
                'prompt' => 'Select State',
                'id' => 'orders-state',
                'class' => 'form-control'
            ))?>
    </div>
    <div class="w25 left pa5 respond-width">
        <?= Html::label('City', 'city', ['class' => 'control-label']); ?>
        <?= Html::textInput('city','', ['class' => 'form-control']); ?>
    </div>
    <div class="w25 left pa5 respond-width">
        <?= Html::label('Zip', 'zip', ['class' => 'control-label']); ?>
        <?= Html::textInput('zip','', ['class' => 'form-control']); ?>
    </div>

    <!--<div class="w50 left pa5 respond-width">
        <?= Html::hiddenInput('billing-address-fax','555-555-5555', ['class' => 'form-control']); ?>
    </div>-->
    <div class="w50 left pa5 respond-width">
        <?= Html::label('Email', 'email', ['class' => 'control-label']); ?>
        <?= Html::textInput('email','', ['class' => 'form-control']); ?>
    </div>
    <div class="w50 left pa5 respond-width">
        <?= Html::label('Phone', 'phone', ['class' => 'control-label']); ?>
        <?= Html::textInput('phone','', ['class' => 'form-control']); ?>
    </div>

    <!--<div class="w100 left pa5 mt15 mb20 respond-width"><h3>Shipping Details</h3></div>-->
   <!-- <div class="w100 left pa5 respond-width">
        <?//= Html::label('Company', 'shipping-address-company', ['class' => 'control-label']); ?>
        <?//= Html::textInput('shipping-address-company','Acme', ['class' => 'form-control']); ?>
    </div>
    <div class="w100 left pa5 respond-width">
        <?//= Html::label('First Name', 'shipping-address-first-name', ['class' => 'control-label']); ?>
        <?//= Html::textInput('shipping-address-first-name','Mary', ['class' => 'form-control']); ?>
    </div>
    <div class="w100 left pa5 respond-width">
        <?//= Html::label('Last Name', 'shipping-address-last-name', ['class' => 'control-label']); ?>
        <?//= Html::textInput('shipping-address-last-name','Smith', ['class' => 'form-control']); ?>
    </div>
    <div class="w100 left pa5 respond-width">
        <?//= Html::label('Address', 'shipping-address-address1', ['class' => 'control-label']); ?>
        <?//= Html::textInput('shipping-address-address1','1234 Main St', ['class' => 'form-control']); ?>
    </div>
    <div class="w100 left pa5 respond-width">
        <?//= Html::label('Address 2', 'shipping-address-address2', ['class' => 'control-label']); ?>
        <?//= Html::textInput('shipping-address-address2','Suite 205', ['class' => 'form-control']); ?>
    </div>
    <div class="w100 left pa5 respond-width">
        <?//= Html::label('City', 'shipping-address-city', ['class' => 'control-label']); ?>
        <?//= Html::textInput('shipping-address-city','Beverly Hills', ['class' => 'form-control']); ?>
    </div>
    <div class="w100 left pa5 respond-width">
        <?//= Html::label('State', 'shipping-address-state', ['class' => 'control-label']); ?>
        <?//= Html::textInput('shipping-address-state','CA', ['class' => 'form-control']); ?>
    </div>
    <div class="w100 left pa5 respond-width">
        <?//= Html::label('Zip', 'shipping-address-zip', ['class' => 'control-label']); ?>
        <?//= Html::textInput('shipping-address-zip','90210', ['class' => 'form-control']); ?>
    </div>
    <div class="w100 left pa5 respond-width">
        <?//= Html::label('Country', 'shipping-address-country', ['class' => 'control-label']); ?>
        <?//= Html::textInput('shipping-address-country','US', ['class' => 'form-control']); ?>
    </div>
    <div class="w100 left pa5 respond-width">
        <?//= Html::label('Phone', 'shipping-address-phone', ['class' => 'control-label']); ?>
        <?//= Html::textInput('shipping-address-phone','555-555-5555', ['class' => 'form-control']); ?>
    </div> -->

    <div class="w100 left pa5 mt15 mb20 respond-width"><h3>Campaign Details</h3></div>
    <div class="w100 left pa5 respond-width">
        <div class="form-group field-campaigns-prod_id">
            <?= Html::label('Select Campaign', 'orders-campaign_id', ['class' => 'control-label'])?>
            <?= Html::dropDownList('Orders[campaign_id]', 'campaign_id', ArrayHelper::map(\app\models\Campaigns::find()->asArray()->all(),
                'id',
                'name'
            ),
                array(
                    'prompt' => 'None',
                    'name' => 'Orders',
                    'class' => 'form-control',
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
    <div class="w50 left pa5 respond-width">
        <?= Html::label('Product Name', 'orders-product_id', ['class' => 'control-label']) ?>
        <?= (isset($create)) ? Html::dropDownList('Orders[product_id]', 'product_name', ArrayHelper::map(\app\models\Products::find()->asArray()->all(),
            'id', 'product_name'
        ),
            array(
                'prompt'=>'Select Product Name',
                'class' => 'form-control',
                'onchange'=>'if(!$("#orders-campaign_id").find(":selected").val() || $("#orders-campaign_id").find(":selected").val() == "None")$.post("'.Yii::$app->urlManager->createUrl(["products/loadprices"]).'", {id:$(this).find(":selected").val(),_csrf: $(\'meta[name="csrf-token"]\').attr("content")}, function( data ) {
			  $("#orders-amount_paid").val( data );
			 });
			 if($("#orders-campaign_id").find(":selected").val())$.post("'.Yii::$app->urlManager->createUrl(["campaigns/loadprices"]).'", {campaign_id: $("#orders-campaign_id").find(":selected").val(),product_id:$(this).find(":selected").val(),_csrf: $(\'meta[name="csrf-token"]\').attr("content")}, function( data ) {
			  $("#orders-amount_paid").val( data );
			 });
			  $.post("'.Yii::$app->urlManager->createUrl(["campaigns/loadcampaigns"]).'", {product_id:$(this).find(":selected").val(), campaign_id:$("#orders-campaign_id").find(":selected").val(),_csrf: $(\'meta[name="csrf-token"]\').attr("content")}, function( data ) {
			  $("#orders-campaign_id").html( "<option value>None</option>" + data );
			 });
			 document.querySelector("#dynam_prod_name").value = this.options[this.selectedIndex].text;
			 ')) : Html::textInput('product_name', '', ['class' => 'form-control']) ?>
    </div>
    <?= Html::hiddenInput('Orders[product_name]', '', ['id' => 'dynam_prod_name']) ?>
    <?= Html::hiddenInput('payment_gateway_id', $selectedGateway, ['id' => 'gateway_id']) ?>
    <div class="w25 left pa5 respond-width">
        <?= Html::label('Quantity', 'orders-quantity', ['class' => 'control-label']) ?>
        <?= Html::textInput('Orders[quantity]', '', ['class' => 'form-control', 'id' => 'orders-quantity' ])?>
    </div>
    <div class="w25 left pa5 respond-width">
        <?= Html::label('Amount Paid', 'orders-amount_paid', ['class' => 'control-label']) ?>
        <?= Html::textInput('Orders[amount_paid]', '', ['class' => 'form-control', 'id' => 'orders-amount_paid']) ?>
    </div>
    <!--
        <div class="w100 left pl15">
            <?= Html::checkbox('subscription', '',['class' => ''])?>
        </div>
        -->
    <div class="w50 left pa5 respond-width" id="subscriptionBillingContainer">
        <?= Html::dropDownList('Orders[billing_cycle]', 'billing_cycle', array('select' => 'Select', 'one' => 'One Time Payment', '30' => 'Every 30 Days'),
            array('class' => 'form-control')
        )?>
    </div>

    <div class="w100 left pa5 respond-width">
        <?= Html::hiddenInput('DO_STEP_1', 'true'); ?>
    </div>
    <div class="w100 left mt15 mb25 pa5 respond-width">
        <div class="form-group">
            <?= Html::submitButton('Submit Step One', ['class' => 'btn']); ?>
        </div>
    </div>
    <?= Html::endForm(); ?>
</div>
<?php }else if (!empty($_POST['DO_STEP_1']))
{
    // Initiate Step One: Now that we've collected the non-sensitive payment information, we can combine other order information and build the XML format.
    $xmlRequest = new DOMDocument('1.0','UTF-8');

    $xmlRequest->formatOutput = true;
    $xmlSale = $xmlRequest->createElement('sale');

    // Amount, authentication, and Redirect-URL are typically the bare minimum.
    appendXmlNode($xmlRequest, $xmlSale,'api-key',$APIKey);
    appendXmlNode($xmlRequest, $xmlSale,'redirect-url',$_SERVER['HTTP_REFERER']);
    appendXmlNode($xmlRequest, $xmlSale, 'amount', '12.00');
    appendXmlNode($xmlRequest, $xmlSale, 'ip-address', $_SERVER["REMOTE_ADDR"]);
    //appendXmlNode($xmlRequest, $xmlSale, 'processor-id' , 'processor-a');
    appendXmlNode($xmlRequest, $xmlSale, 'currency', 'USD');

    // Some additonal fields may have been previously decided by user
    appendXmlNode($xmlRequest, $xmlSale, 'order-id', '1234');
    appendXmlNode($xmlRequest, $xmlSale, 'order-description', 'Small Order');
    appendXmlNode($xmlRequest, $xmlSale, 'merchant-defined-field-1' , 'Red');
    appendXmlNode($xmlRequest, $xmlSale, 'merchant-defined-field-2', 'Medium');
    appendXmlNode($xmlRequest, $xmlSale, 'tax-amount' , '0.00');
    appendXmlNode($xmlRequest, $xmlSale, 'shipping-amount' , '0.00');

    /*if(!empty($_POST['customer-vault-id'])) {
        appendXmlNode($xmlRequest, $xmlSale, 'customer-vault-id' , $_POST['customer-vault-id']);
    }else {
         $xmlAdd = $xmlRequest->createElement('add-customer');
         appendXmlNode($xmlRequest, $xmlAdd, 'customer-vault-id' ,411);
         $xmlSale->appendChild($xmlAdd);
    }*/


    // Set the Billing and Shipping from what was collected on initial shopping cart form
    $xmlBillingAddress = $xmlRequest->createElement('billing');
    appendXmlNode($xmlRequest, $xmlBillingAddress,'first-name', $_POST['first_name']);
    appendXmlNode($xmlRequest, $xmlBillingAddress,'last-name', $_POST['last_name']);
    appendXmlNode($xmlRequest, $xmlBillingAddress,'address1', $_POST['address']);
    appendXmlNode($xmlRequest, $xmlBillingAddress,'city', $_POST['city']);
    appendXmlNode($xmlRequest, $xmlBillingAddress,'state', $_POST['Orders']{'state'});
    appendXmlNode($xmlRequest, $xmlBillingAddress,'postal', $_POST['zip']);
    //billing-address-email
    appendXmlNode($xmlRequest, $xmlBillingAddress,'country', $_POST['Orders']{'country'});
    appendXmlNode($xmlRequest, $xmlBillingAddress,'email', $_POST['email']);
    appendXmlNode($xmlRequest, $xmlBillingAddress,'phone', $_POST['phone']);
    appendXmlNode($xmlRequest, $xmlBillingAddress,'company', $_POST['company']);
    appendXmlNode($xmlRequest, $xmlBillingAddress,'address2', $_POST['address2']);
    appendXmlNode($xmlRequest, $xmlBillingAddress,'fax', $_POST['fax']);
    $xmlSale->appendChild($xmlBillingAddress);


    $xmlShippingAddress = $xmlRequest->createElement('shipping');
    appendXmlNode($xmlRequest, $xmlShippingAddress,'first-name', $_POST['first_name']);
    appendXmlNode($xmlRequest, $xmlShippingAddress,'last-name', $_POST['last_name']);
    appendXmlNode($xmlRequest, $xmlShippingAddress,'address1', $_POST['address']);
    appendXmlNode($xmlRequest, $xmlShippingAddress,'city', $_POST['city']);
    appendXmlNode($xmlRequest, $xmlShippingAddress,'state', $_POST['Orders']{'state'});
    appendXmlNode($xmlRequest, $xmlShippingAddress,'postal', $_POST['zip']);
    appendXmlNode($xmlRequest, $xmlShippingAddress,'country', $_POST['Orders']{'country'});
    appendXmlNode($xmlRequest, $xmlShippingAddress,'phone', $_POST['phone']);
    appendXmlNode($xmlRequest, $xmlShippingAddress,'company', $_POST['company']);
    appendXmlNode($xmlRequest, $xmlShippingAddress,'address2', $_POST['address2']);
    $xmlSale->appendChild($xmlShippingAddress);


    // Products already chosen by user
    $xmlProduct = $xmlRequest->createElement('product');
    appendXmlNode($xmlRequest, $xmlProduct,'product-code' , 'SKU-123456');
    appendXmlNode($xmlRequest, $xmlProduct,'description' , 'test product description');
    appendXmlNode($xmlRequest, $xmlProduct,'commodity-code' , 'abc');
    appendXmlNode($xmlRequest, $xmlProduct,'unit-of-measure' , 'lbs');
    appendXmlNode($xmlRequest, $xmlProduct,'unit-cost' , '5.00');
    appendXmlNode($xmlRequest, $xmlProduct,'quantity' , '1');
    appendXmlNode($xmlRequest, $xmlProduct,'total-amount' , '7.00');
    appendXmlNode($xmlRequest, $xmlProduct,'tax-amount' , '2.00');

    appendXmlNode($xmlRequest, $xmlProduct,'tax-rate' , '1.00');
    appendXmlNode($xmlRequest, $xmlProduct,'discount-amount', '2.00');
    appendXmlNode($xmlRequest, $xmlProduct,'discount-rate' , '1.00');
    appendXmlNode($xmlRequest, $xmlProduct,'tax-type' , 'sales');
    appendXmlNode($xmlRequest, $xmlProduct,'alternate-tax-id' , '12345');

    $xmlSale->appendChild($xmlProduct);

    $xmlProduct = $xmlRequest->createElement('product');
    appendXmlNode($xmlRequest, $xmlProduct,'product-code' , 'SKU-123456');
    appendXmlNode($xmlRequest, $xmlProduct,'description' , 'test 2 product description');
    appendXmlNode($xmlRequest, $xmlProduct,'commodity-code' , 'abc');
    appendXmlNode($xmlRequest, $xmlProduct,'unit-of-measure' , 'lbs');
    appendXmlNode($xmlRequest, $xmlProduct,'unit-cost' , '2.50');
    appendXmlNode($xmlRequest, $xmlProduct,'quantity' , '2');
    appendXmlNode($xmlRequest, $xmlProduct,'total-amount' , '7.00');
    appendXmlNode($xmlRequest, $xmlProduct,'tax-amount' , '2.00');

    appendXmlNode($xmlRequest, $xmlProduct,'tax-rate' , '1.00');
    appendXmlNode($xmlRequest, $xmlProduct,'discount-amount', '2.00');
    appendXmlNode($xmlRequest, $xmlProduct,'discount-rate' , '1.00');
    appendXmlNode($xmlRequest, $xmlProduct,'tax-type' , 'sales');
    appendXmlNode($xmlRequest, $xmlProduct,'alternate-tax-id' , '12345');

    $xmlSale->appendChild($xmlProduct);

    $xmlRequest->appendChild($xmlSale);

    // Process Step One: Submit all transaction details to the Payment Gateway except the customer's sensitive payment information.
    // The Payment Gateway will return a variable form-url.
    $data = sendXMLviaCurl($xmlRequest,$gatewayURL);

    // Parse Step One's XML response
    $gwResponse = @new SimpleXMLElement($data);
    if ((string)$gwResponse->result ==1 ) {
        // The form url for used in Step Two below
        $formURL = $gwResponse->{'form-url'};
    } else {
        throw New Exception(print " Error, received " . $data);
    }

    // Initiate Step Two: Create an HTML form that collects the customer's sensitive payment information
    // and use the form-url that the Payment Gateway returns as the submit action in that form.
    //print '  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">';


    // Uncomment the line below if you would like to print Step One's response
    // print '<pre>' . (htmlentities($data)) . '</pre>';
    ?>
<div class="orders-form">
    <div class="w100 left pa5 mt15 mb20 respond-width">
        <h2>Step Two: Collect sensitive payment information and POST directly to payment gateway</h2>
        <h3>Customer Information</h3>
        <h4> Billing Details</h4>
    </div>
    <?php
    $formStripped = str_replace("/web/index.php?r=", "", Html::beginForm([\yii\helpers\Url::to($formURL, $scheme = true)], 'post', ['enctype' => 'multipart/form-data']));
    $formStripped = urldecode($formStripped);
    ?>

    <?= $formStripped; ?>
    <h3> Payment Information</h3>
    <div class="w50 left pa5 respond-width">
    <?= Html::label('Credit Card Number','billing-cc-number',['class' => 'control-label']);?>
    <?= Html::textInput('billing-cc-number','4111111111111111',['class' => 'form-control']); ?>
    </div>
    <div class="w50 left pa5 respond-width">
    <?= Html::label('Expiration Date','billing-cc-exp',['class' => 'control-label']);?>
    <?= Html::textInput('billing-cc-exp','1012',['class' => 'form-control']); ?>
    </div>
    <div class="w50 left pa5 respond-width">
    <?= Html::label('CVV', 'cvv', ['class' => 'control-label']); ?>
    <?= Html::textInput('cvv', '', ['class' => 'form-control', 'required'=>true]);?>
    </div>
    <div class="w100 left mt15 mb25 pa5 respond-width">
        <div class="form-group">
            <?= Html::submitButton('Submit Step Two', ['class' => 'btn']); ?>
        </div>
    </div>
    <?= Html::endForm(); ?>
</div>
    <?php
    $_SESSION['POST-DATA'] = $_POST;
}elseif (!empty($_GET['token-id']))
{

        // Step Three: Once the browser has been redirected, we can obtain the token-id and complete
        // the transaction through another XML HTTPS POST including the token-id which abstracts the
        // sensitive payment information that was previously collected by the Payment Gateway.
        // Send last 4 two db
        $tokenId = $_GET['token-id'];
        $xmlRequest = new DOMDocument('1.0','UTF-8');
        $xmlRequest->formatOutput = true;
        $xmlCompleteTransaction = $xmlRequest->createElement('complete-action');
        appendXmlNode($xmlRequest, $xmlCompleteTransaction,'api-key',$APIKey);
        appendXmlNode($xmlRequest, $xmlCompleteTransaction,'token-id',$tokenId);
        $xmlRequest->appendChild($xmlCompleteTransaction);


        // Process Step Three
        $data = sendXMLviaCurl($xmlRequest,$gatewayURL);


        $gwResponse = @new SimpleXMLElement((string)$data);
        print '  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">';
        print '
    <html>
      <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Step Three - Complete Transaction</title>
      </head>
      <body>';

        print "
        <p><h2>Step Three: Script automatically completes the transaction <br /></h2></p>";

        if ((string)$gwResponse->result == 1 ) {
            print " <p><h3> Transaction was Approved, XML response was:</h3></p>\n";
            print '<pre>' . (htmlentities($data)) . '</pre>';
            //echo "Session: " . json_encode($_SESSION['POST-DATA']);
            $_POST = $_SESSION['POST-DATA'];
            $_POST["transaction-id"] = intval( $gwResponse->{'transaction-id'} );
            //echo "Post Data: " . json_encode($_POST);
            //echo "Response Transaction ID : " . $gwResponse->{'transaction-id'};

            echo "Response: " . json_encode($gwResponse);
            $order = new app\controllers\OrdersController();
            $order->sendOtherGatewayOrders($_POST);

        } elseif((string)$gwResponse->result == 2)  {
            print " <p><h3> Transaction was Declined.</h3>\n";
            print " Decline Description : " . (string)$gwResponse->{'result-text'} ." </p>";
            print " <p><h3>XML response was:</h3></p>\n";
            print '<pre>' . (htmlentities($data)) . '</pre>';
        } else {
            print " <p><h3> Transaction caused an Error.</h3>\n";
            print " Error Description: " . (string)$gwResponse->{'result-text'} ." </p>";
            print " <p><h3>XML response was:</h3></p>\n";
            print '<pre>' . (htmlentities($data)) . '</pre>';
        }
        print "</body></html>";



    } else {
        print "ERROR IN SCRIPT<BR>";
    }



//
}
function sendXMLviaCurl($xmlRequest,$gatewayURL) {
    // helper function demonstrating how to send the xml with curl


    $ch = curl_init(); // Initialize curl handle
    curl_setopt($ch, CURLOPT_URL, $gatewayURL); // Set POST URL

    $headers = array();
    $headers[] = "Content-type: text/xml";
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers); // Add http headers to let it know we're sending XML
    $xmlString = $xmlRequest->saveXML();
    curl_setopt($ch, CURLOPT_FAILONERROR, 1); // Fail on errors
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); // Allow redirects
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); // Return into a variable
    curl_setopt($ch, CURLOPT_PORT, 443); // Set the port number
    curl_setopt($ch, CURLOPT_TIMEOUT, 30); // Times out after 30s
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $xmlString); // Add XML directly in POST

    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);


    // This should be unset in production use. With it on, it forces the ssl cert to be valid
    // before sending info.
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

    if (!($data = curl_exec($ch))) {
        print  "curl error =>" .curl_error($ch) ."\n";
        throw New Exception(" CURL ERROR :" . curl_error($ch));

    }
    curl_close($ch);

    return $data;
}

// Helper function to make building xml dom easier
function appendXmlNode($domDocument, $parentNode, $name, $value) {
    $childNode      = $domDocument->createElement($name);
    $childNodeValue = $domDocument->createTextNode($value);
    $childNode->appendChild($childNodeValue);
    $parentNode->appendChild($childNode);
}
    ?>

