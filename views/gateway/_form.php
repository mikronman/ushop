<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Gateway */
/* @var $model app\models\Shipping */
/* @var $model app\models\GatewayProviders */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="orders-form">
<?php $form = ActiveForm::begin(); ?>
    <?php

    $selectedGateway = \app\models\Gateway::find()->select('gateway_id')->orderBy('gateway_id')->asArray()->all();
    $gatewayProviders = new \app\models\GatewayProviders();
    $gatewayProviders->id = $selectedGateway[0]["gateway_id"];
    $gatewayIds = \app\models\GatewayProviders::find()->select(['id', 'gateway_provider'])->orderBy('gateway_provider')->asArray()->all();
    $types = \yii\helpers\ArrayHelper::map($gatewayIds, 'id', 'gateway_provider')
    ?>
    <?= $form->field($gatewayProviders, 'id')->dropDownList($types)?>
    <div class="w100 left mt15 mb25 pa5 respond-width">
        <div class="form-group">
            <?= Html::submitButton('Update Gateway', ['class' => 'btn']) ?>
        </div>
    </div>
<?php $form = ActiveForm::end(); ?>
</div>