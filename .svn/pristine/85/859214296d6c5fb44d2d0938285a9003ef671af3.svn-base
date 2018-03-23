<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\OrdersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Your Orders';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="orders-index index-wrap">
	<?php if(!empty($_GET['id'])): ?>
        <div class="success-message">Order ID <?php echo $_GET['id'] ?> has been successfully created!</div>
    <?php endif; ?>
    <div class="w100 left mb15">
        <div class="left">
			<h1 class=""><?= Html::encode($this->title) ?></h1>
			<p>You can manage your existing orders here.</p>
        </div>
        <div class="mt15 right">
			<?= Html::a('Place a New Order', ['create'], ['class' => 'btn']) ?>
		</div>
    </div>
    <div class="w100 left">
        <?php Pjax::begin(); ?>
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                //['class' => 'yii\grid\SerialColumn'],
                'id',
                'first_name',
                'last_name',
                'address',
                'city',
                'state',

                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>
        <?php Pjax::end(); ?>
    </div>
</div>