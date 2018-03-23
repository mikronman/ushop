<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Shipping */

$this->title = 'Create Shipping';
$this->params['breadcrumbs'][] = ['label' => 'Shipping', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shipping-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
