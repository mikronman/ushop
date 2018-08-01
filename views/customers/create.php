<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\customers */

$this->title = 'Create Customer';
$this->params['breadcrumbs'][] = ['label' => 'Campaigns', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customers-create index-wrap">

    <div class="title-wrap">
        <h1 class=""><?= Html::encode($this->title) ?></h1>
        <br/>
        <p>Add a new customer.</p>
    </div>

    <?= $this->render('_form', [
        'model' => $model,
        'create' => true
    ]) ?>

</div>
