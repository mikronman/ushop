<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'uShop CRM';
?>
<div class="site-index">

    <div class="body-content">
		<div class="dash-intro-wrap w100 left pa25">
			<div class="dash-intro-item left w33 tcenter pa10">
				<div class="dash-intro-container w100 left pa25 bgc1 r10">
					<?= Html::img('@web/img/prod_icon.png', ['alt'=>'products', 'class'=>'']);?>
					<h1>Products</h1>
					<p div class="w100 left txt-center mt10 mb10">
						Add products that will be used for your online campaigns.
					</p>
					<div class="dash-intro-btn w100 left mt15 mb15">
						<center>
							<a class="btn" href="<?= url::to(['products/create'])?>">Add a Product Now </a>
						</center>
					</div>
				</div>
			</div>
			<div class="dash-intro-item left w33 tcenter pa10">
				<div class="dash-intro-container w100 left pa25 bgc1 r10">
					<?= Html::img('@web/img/camp_icon.png', ['alt'=>'campaigns', 'class'=>'']);?>
					<h1>Campaigns</h1>
					<p div class="w100 left txt-center mt10 mb10">
						Create a campaign in order to import sales from your website.
					</p>
					<div class="dash-intro-btn w100 left mt15 mb15">
						<center>
							<a class="btn" href="<?= url::to(['campaigns/create'])?>">Add a Campaign</a>
						</center>
					</div>	
				</div>
			</div>
			<div class="dash-intro-item left w33 tcenter pa10">
				<div class="dash-intro-container w100 left pa25 bgc1 r10">
					<?= Html::img('@web/img/rprt_icon.png', ['alt'=>'Reports', 'class'=>'']);?>
					<h1>Reports</h1>
					<p div class="w100 left txt-center mt10 mb10">
						View reports to see how your campaigns are performing
					</p>
					<div class="dash-intro-btn w100 left mt15 mb15">
						<center>
							<a class="btn" href="<?= url::to(['campaigns/create'])?>">Go to My Reports</a>
						</center>
					</div>
				</div>
			</div>
		</div>
    </div>
</div>
