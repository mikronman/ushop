<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'uShop CRM Add Product';
?>
<div class="site-add_product pa25">
	<div class="w100 left mb25">
        <h2>Add a Product</h2>
        <p>Provide your product details below:</p>
    </div>
    <form method="POST" action="<?= url::to(['products/create'])?>" class="" id="">
        <input id="form-token" type="hidden" name="<?=Yii::$app->request->csrfParam?>"
               value="<?=Yii::$app->request->csrfToken?>"/>
    	<div class="w33 left respond-width pr15">
            <label>Product Name</label>
            <div class="input left pad-right w100 respond-width">
                <input type="text" value="" name="Products[product_name]" id="pname" placeholder=""/>
            </div>
        </div>
        <div class="w33 left respond-width pr15">
            <label>Product SKU</label>
            <div class="input left pad-right w100 respond-width">
                <input type="text" value="" name="Products[product_sku]" id="psku" placeholder=""/>
            </div>
        </div>
        <div class="w33 left respond-width">
            <label>Product Price</label>
            <div class="input left pad-right w100 respond-width">
                <input type="text" value="" name="Products[product_price]" id="pprice" placeholder=""/>
            </div>
        </div>
        <div class="w100 left respond-width">
            <label>Product Description</label>
            <div class="input left pad-right w100 respond-width">
                <input type="text" value="" name="Products[product_description]" id="pdesc" placeholder=""/>
            </div>
        </div>
        <!--
        <div class="chk-container respond-width pr15"><div class="chk-box-wrap">
            <div class="chk-box"><input type="checkbox"/>
            </div></div>
            <div class="chk-label">This is a subscription</div>
        </div>
        <div class="chk-container respond-width pr15"><div class="chk-box-wrap">
            <div class="chk-box"><input type="checkbox"/>
            </div></div>
            <div class="chk-label">This product is taxable</div>
        </div>
        <div class="chk-container respond-width pr15"><div class="chk-box-wrap">
            <div class="chk-box"><input type="checkbox"/>
            </div></div>
            <div class="chk-label">Track Inventory</div>
        </div>
        -->
        <div class="w100 left mt25">
        	<input type="submit" id="pform-submit" name="pform-submit" value="Create Product" class="btn main-btn"/>
        </div>
    </form>

</div>