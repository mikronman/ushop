<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Products */

$this->title = 'Create a New Product';
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-create index-wrap">

    <div class="title-wrap">
        <h1 class=""><?= Html::encode($this->title) ?></h1>
        <br/>
        <p>Once you add a new product, it will be available to use for your campaigns.</p>
    </div>
    <div class="w100 left mb25 respond-width">
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
    </div>

</div>
