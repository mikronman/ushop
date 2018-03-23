<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Url;
include ("../controllers/ProductsJs.php");
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<?php /*?><?php
    NavBar::begin([
        'brandLabel' => 'My Company',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'About', 'url' => ['/site/about']],
            ['label' => 'Contact', 'url' => ['/site/contact']],
            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post', ['class' => 'navbar-form'])
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?><?php */?>

<header class="cd-main-header">
    <a href="#0" class="cd-logo">
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             viewBox="0 0 500 127.5" style="enable-background:new 0 0 500 127.5;" xml:space="preserve">
		<style type="text/css">
			.st0{fill:#FFF100;}
			.st1{fill:none;}
			.st2{fill:#A91F23;}
			.st3{fill:#2C3136;}
		</style>
        <path class="st0" d="M54.9,200"/>
            <g>
                <path class="st2" d="M33.9,52.9c0.1,0.1,0.2,0.2,0.3,0.3c0.1,0.1,0.3,0.3,0.4,0.4c0.1,0.1,0.3,0.3,0.4,0.4c0.2,0.2,0.5,0.4,0.7,0.6
		c0.1,0.1,0.1,0.1,0.2,0.2c0.3,0.3,0.6,0.5,0.9,0.8c0,0,0,0,0,0c4.5,3.5,10.2,5.6,16.3,5.6c0.1,0,0.1,0,0.2,0v0c0.1,0,0.3,0,0.4,0v0
		c0.1,0,0.1,0,0.2,0c5.4,0,9.8,4.4,9.8,9.8c0,5.4-4.4,9.8-9.8,9.8c-0.2,0-0.4,0-0.6,0v0c-5.2-0.2-9.4-4.5-9.4-9.8
		c0-2.5,0.9-4.8,2.5-6.5c-5.8-1.4-10.9-4.3-15-8.4c-2.8,4.2-4.4,9.3-4.4,14.7c0,14.6,11.8,26.5,26.4,26.6v0c0.1,0,0.3,0,0.4,0
		c14.7,0,26.6-11.9,26.6-26.6c0-7.1-2.8-13.6-7.3-18.3c0,0,0,0,0,0c-0.1-0.1-0.2-0.2-0.3-0.3c-0.1-0.1-0.3-0.3-0.4-0.4
		c-0.1-0.1-0.3-0.3-0.4-0.4c-0.2-0.2-0.5-0.4-0.7-0.6c-0.1-0.1-0.1-0.1-0.2-0.2c-0.3-0.3-0.6-0.5-0.9-0.8c0,0,0,0,0,0
		c-4.5-3.5-10.2-5.6-16.3-5.6c-0.1,0-0.3,0-0.4,0v0h0v0c-0.1,0-0.1,0-0.2,0v0c-0.1,0-0.1,0-0.2,0c-5.4,0-9.8-4.4-9.8-9.8
		c0-5.4,4.4-9.8,9.8-9.8c0.1,0,0.3,0,0.4,0v0c5.3,0.1,9.6,4.4,9.6,9.8c0,2.5-0.9,4.8-2.5,6.5c5.8,1.4,10.9,4.3,15,8.4
		C78.3,45,80,40,80,34.5C80,19.9,68.1,8,53.4,8v0c-0.1,0-0.1,0-0.2,0C38.5,8,26.6,19.9,26.6,34.5C26.6,41.6,29.4,48.1,33.9,52.9
		C33.9,52.9,33.9,52.9,33.9,52.9z"/>
                <path class="st3" d="M84.3,38.1c-0.7,5.3-2.8,10.2-5.9,14.3c3.9,5.2,6.2,11.6,6.2,18.6c0,17.1-13.9,31-31,31c-0.1,0-0.1,0-0.2,0v0
		c-17.1,0-31-13.9-31-31c0-7,2.3-13.4,6.2-18.6c-3.1-4.1-5.1-9-5.9-14.3C13.9,46.3,8.4,58,8.4,71c0,24.9,20.1,45,45,45v0
		c0.1,0,0.1,0,0.2,0c24.9,0,45-20.1,45-45C98.6,58,93.1,46.3,84.3,38.1z"/>
                <path class="st3" d="M137.4,54c-0.1,4-0.2,7.9-0.4,11.7c-0.1,3.2-0.3,5.4-0.5,6.7c-0.2,1.9-0.5,3.3-0.9,4.3c-0.5,1.4-1.2,2.6-2,3.5
		c-0.8,0.9-1.8,1.5-2.9,2c-1.2,0.5-2.5,0.8-3.9,0.8c-1.4,0-2.8-0.3-4.1-0.9c-1.3-0.6-2.2-1.5-2.7-2.6c-0.5-1.1-0.8-2.5-0.8-4.3
		c0-0.4,0-1,0.1-1.9c0-0.9,0.1-1.9,0.2-3.2l1.2-16.3c-1.9,0-3.6,0.1-4.9,0.1c-1.3,0-3,0-5.3-0.1c0,1.4,0,2.7,0,3.6l-0.5,12.1
		l-0.6,9.2v0.7c0,2.9,0.6,5.2,1.7,6.7c1.2,1.6,2.7,2.7,4.7,3.5c2,0.8,4.3,1.2,6.9,1.2c1.4,0,2.7-0.1,3.9-0.3
		c1.2-0.2,2.3-0.5,3.3-0.9c1-0.3,1.8-0.8,2.6-1.4c0.8-0.6,1.5-1.2,2-1.8c0.5-0.6,1.1-1.4,1.7-2.4l-0.1,5.9c1.8,0,3.4-0.1,4.8-0.1
		c1.1,0,2.7,0,4.8,0.1c0.1-3.9,0.2-7.6,0.3-10.9c0.1-3.3,0.3-7.5,0.6-12.6c0.3-5.1,0.6-9.3,0.9-12.7c-1.8,0-3.3,0.1-4.7,0.1
		C141.5,54,139.7,54,137.4,54z"/>
                <path class="st3" d="M183.8,73.3c-0.4-0.7-0.8-1.5-1.5-2.3c-0.6-0.8-1.4-1.7-2.3-2.5c-0.9-0.9-1.9-1.8-3-2.7l-4.4-4
		c-0.7-0.5-1.6-1.2-2.6-2c-1-0.8-1.8-1.6-2.3-2.2c-0.5-0.6-0.9-1.1-1.1-1.5c-0.2-0.4-0.4-0.8-0.5-1.2c-0.1-0.4-0.2-0.8-0.2-1.2
		c0-1.4,0.7-2.6,2.2-3.7c1.5-1.1,3.4-1.6,5.7-1.6c3.1,0,6.5,0.7,10.2,2.1c-0.4-3.2-0.6-6-0.7-8.5c-4.3-0.8-8.1-1.2-11.5-1.2
		c-3.8,0-6.9,0.6-9.4,1.7c-2.5,1.1-4.3,2.6-5.6,4.6c-1.2,2-1.9,4.1-1.9,6.3c0,1.2,0.2,2.4,0.5,3.4c0.3,1.1,0.9,2.1,1.6,3.2
		c0.8,1.1,1.9,2.3,3.3,3.7c0.6,0.6,1.8,1.7,3.4,3.1c3.5,3,5.9,5.1,7.3,6.5c1.1,1,1.8,1.9,2.3,2.7c0.3,0.6,0.5,1.4,0.5,2.2
		c0,1-0.3,2-0.9,2.8c-0.6,0.8-1.6,1.5-2.9,2c-1.3,0.5-2.7,0.7-4.3,0.7c-3.8,0-8-1.1-12.7-3.2c0.3,2.3,0.6,5.2,0.7,8.8
		c3.3,0.7,6,1.2,8,1.5c2,0.3,3.8,0.4,5.3,0.4c2.3,0,4.5-0.2,6.6-0.7c2.1-0.4,4-1.2,5.7-2.4c1.7-1.1,3.1-2.6,4-4.4
		c0.9-1.8,1.4-3.7,1.4-5.6c0-0.9-0.1-1.7-0.3-2.4C184.4,74.8,184.1,74,183.8,73.3z"/>
                <path class="st3" d="M227.9,56c-1.3-1.1-2.9-1.8-4.7-2.3c-1.8-0.5-3.7-0.7-5.7-0.7c-1.1,0-2.3,0.1-3.4,0.2s-2.1,0.3-3,0.6
		c-0.9,0.3-1.7,0.6-2.3,0.9c-0.7,0.3-1.3,0.7-1.9,1.2c-0.6,0.5-1.2,1-1.7,1.6c-0.5,0.6-1.1,1.4-1.9,2.6c0.2-4.6,0.4-8,0.6-10.1
		l0.6-8.5c-1.6,0-3.4,0.1-5.2,0.1c-1.4,0-3.1,0-5.2-0.1L193.6,62l-0.9,16.6l-0.9,11.6c2.3,0,4.1-0.1,5.4-0.1c1.4,0,3,0,4.9,0.1
		c0.1-5.9,0.3-9.9,0.4-11.9c0.2-4.2,0.6-7.3,1.1-9.3c0.5-1.9,1.1-3.4,1.9-4.4c0.9-1.2,2-2.2,3.3-2.8c1.4-0.6,3-1,4.8-1
		c1.4,0,2.7,0.3,3.9,0.8c1.2,0.5,2.1,1.3,2.7,2.4c0.6,1.1,0.9,2.5,0.9,4.4c0,2-0.2,5.5-0.5,10.3s-0.6,8.7-1,11.5
		c2,0,3.9-0.1,5.4-0.1c1.5,0,3.2,0,5.1,0.1c0-2.1,0-4,0.1-5.6l0.9-15.6c0.1-2.2,0.2-3.8,0.2-4.8c0-1.6-0.2-3.1-0.7-4.5
		C230.1,58.3,229.2,57.1,227.9,56z"/>
                <path class="st2" d="M352.1,53.6c2.6-1.3,5.5-1.9,8.7-1.9c1.5,0,3.1,0.1,4.8,0.4c1.7,0.2,4,0.7,6.8,1.4l-0.2-4.1
		c-0.1-1.6-0.2-3-0.2-4.3l-0.1-3c-5.2-0.9-9.5-1.4-13-1.4c-3.8,0-7.5,0.5-11.1,1.5c-3.6,1-6.9,2.6-9.9,4.9c-3,2.3-5.3,5.2-6.9,8.6
		c-1.6,3.4-2.4,7.3-2.4,11.6c0,3.7,0.6,7,1.8,10c1.2,3,3.2,5.6,5.9,7.8c2.8,2.2,5.8,3.8,9.1,4.7c3.3,1,6.9,1.4,10.7,1.4
		c4,0,8.5-0.4,13.6-1.1c0.1-1.4,0.4-3.3,0.8-5.8s0.7-4.4,1-5.8c-3,0.8-5.5,1.3-7.5,1.6c-2,0.3-3.8,0.4-5.5,0.4
		c-3.1,0-5.7-0.5-7.8-1.6c-2.1-1.1-3.8-2.6-5-4.5c-1.2-1.9-1.9-4.3-1.9-7c0-3,0.7-5.7,2.2-8.1C347.5,56.7,349.6,54.8,352.1,53.6z"/>
                <path class="st2" d="M421.9,47.1c-0.7-0.9-1.5-1.8-2.5-2.5c-1-0.7-2.2-1.4-3.7-1.9c-1.5-0.5-3.1-0.9-4.9-1
		c-2.4-0.2-5.1-0.4-8.1-0.4c-2.6,0-5.3,0.1-8,0.2c-2.7,0.1-5,0.2-7,0.2c-1.8,0-4.2,0-7.2-0.1c0,2.9,0,6.8-0.1,11.7
		c-0.1,4.9-0.2,9.6-0.4,14s-0.4,8.3-0.7,11.7s-0.6,7.1-1.1,11.3c3.6,0,6.1-0.1,7.5-0.1c1.2,0,3.8,0,7.7,0.1
		c0.1-6.7,0.2-13.6,0.5-20.6c0.2-7,0.5-13,0.8-17.8c1.2,0,2.2-0.1,3.1-0.1c0.9,0,1.8-0.1,2.6-0.1c2.4,0,4.3,0.2,5.4,0.6
		c1.2,0.4,2,1,2.6,1.7c0.5,0.8,0.8,1.7,0.8,2.7c0,1.2-0.4,2.4-1.1,3.5c-0.7,1.1-1.8,1.9-3.2,2.4c-1.4,0.5-3,0.8-4.7,0.8
		c-1.2,0-2.5-0.1-3.8-0.4l3.7,10.1c1.1,3,2,5.4,2.5,7.1c0.3,0.8,0.6,1.8,1,3.2c1,3.4,1.7,5.6,2.1,6.9c3.9,0,6.7-0.1,8.4-0.1
		c1.4,0,4,0,7.9,0.1c-0.5-1.3-0.9-2.2-1.1-2.7l-4.8-10.4c-0.6-1.3-1.2-2.6-1.7-3.8l-1.9-4.5c2.4-0.9,4.2-1.8,5.5-2.7
		c1.3-0.9,2.4-1.9,3.3-3.2c0.9-1.2,1.5-2.5,1.9-3.9c0.4-1.4,0.6-2.9,0.6-4.5c0-1.4-0.2-2.8-0.6-4C423,49.2,422.5,48.1,421.9,47.1z"
                />
                <path class="st2" d="M489.4,41.5c-4.1,0-7.4,0.1-9.7,0.1c-3.4,0-6.9,0-10.5-0.1c-0.6,2.2-1.1,3.8-1.4,4.9c-0.3,1.1-1.2,3.3-2.4,6.7
		s-2.4,6.5-3.2,9.2c-0.9,2.7-1.8,5.9-2.9,9.6c-1-5.4-1.8-9.3-2.3-11.5c-0.5-2.2-1.2-4.9-2-8c-0.8-3.1-1.4-5.1-1.6-6.2
		c-0.2-1.1-0.5-2.6-0.8-4.7c-4.3,0-7.4,0.1-9.5,0.1c-2.5,0-6,0-10.3-0.1L431.7,58l-2.2,25l-0.9,7.2c3,0,5.2-0.1,6.4-0.1
		c0.9,0,3,0,6.3,0.1l0.1-4.6l1.2-20.2l0.9-9.9c0.3,1.5,0.5,2.5,0.6,3.1c0.1,0.6,0.2,1.1,0.3,1.5l2.6,10.4l4.4,19.6
		c3,0,5.3-0.1,6.8-0.1c1.2,0,3.3,0,6.4,0.1l6.7-20.2l4.7-14.5c0,1.7,0.1,3.1,0.1,4.1c0,2.2-0.1,7.4-0.4,15.4
		c-0.3,8-0.5,13.1-0.7,15.3c2.7,0,4.9-0.1,6.7-0.1c1.3,0,3.5,0,6.6,0.1c0-2.3-0.1-3.9-0.1-4.8c0-4.2,0.2-12,0.5-23.2
		C488.7,56.4,489,49.6,489.4,41.5z"/>
                <path class="st3" d="M259.2,53.6c-24.4,1.1-22.9,23.7-16,32.1C250,94,277,95.8,278.6,74.2S259.2,53.6,259.2,53.6z M257.7,84.7
		c-13.3-1-12.2-17.5-7.1-21.7c5.1-4.2,19-5.2,19.7,9.9C270.4,72.8,271,85.7,257.7,84.7z"/>
                <path class="st3" d="M307.5,54.1c-8.3-0.9-22.6,1.7-22.6,1.7l-2.3,51.5h10.3l0.6-21.5c0,0,4,6,12.8,6s15.6-6.4,16.3-18.6
		C323.5,61.1,315.8,55,307.5,54.1z M308.2,83.1c-5.9,5.8-14.9-2.4-14.2-11.5s0.7-9.2,0.7-9.2s9.4-4.3,14.6,1
		C314.5,68.7,314,77.3,308.2,83.1z"/>
            </g>
		</svg>
	</a>

    <!--<div class="cd-search is-hidden">
        <form action="#0">
            <input type="search" placeholder="Search...">
        </form>
    </div>--> <!-- cd-search -->

    <a href="#0" class="cd-nav-trigger"><span></span></a>

    <nav class="cd-nav">
        <ul class="cd-top-nav">
            <li><a href="#0">Contact Support</a></li>
            <li class="has-children account">
                <a href="#0">
                    My Account
                </a>

                <ul>
                    <li><a href="#0">Account Settings</a></li>
                    <li><a href="<?= url::to(['site/logout'])?>" data-method="post">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
</header> <!-- .cd-main-header -->
<main class="cd-main-content">
    <nav class="cd-side-nav">
        <ul>
            <li class="cd-label">Main</li>
            <li class="overview active">t
                <?= Html::a('Dashboard <span class="count">3</span>', ['/site/index']) ?>
            </li>
            <li class="has-children">
                <a href="#0">Products</a>

                <ul>
                    <li><a href="<?= url::to(['products/create'])?>">Create a Product</a></li>
                    <li><a href="<?= url::to(['products/index'])?>">Manage Products</a></li>
                    <!--
                    <li><a href="<?= url::to(['site/categories'])?>">Product Categories</a></li>
                    <li><a href="#0">Shipping</a></li>
                    <li><a href="#0">Inventory</a></li>
                    <li><a href="#0">Warehouse</a></li>
                    <li><a href="#0">Manufacturing</a></li>
					-->
                </ul>
            </li>
			<li class="has-children bookmarks">
                <a href="#0">Campaigns</a>
                <ul>
                    <li><a href="<?= url::to(['campaigns/create'])?>">Create a Campaign</a></li>
                    <li><a href="<?= url::to(['campaigns/index'])?>">Manage Campaigns</a></li>
                </ul>
            </li>
            <li class="has-children comments">
                <a href="#0">Orders</a>
                <ul>
                   	<li><a href="<?= url::to(['orders/create'])?>">Place an Order</a></li>
                    <li><a href="<?= url::to(['orders/index'])?>">Manage Orders</a></li>
					<!--
                    <li><a href="#0">Declined Orders</a></li>
                    <li><a href="#0">Prospects</a></li>
                    <li><a href="#0">Black List</a></li>
                    <li><a href="#0">Returns</a></li>
                    <li><a href="#0">Collections</a></li>
                    <li><a href="#0">Smart Tags</a></li>
                    <li class="cd-label">Providers</li>
                    <li><a href="#0">Fulfillment Providers</a></li>
                    <li><a href="#0">Data Verification Providers</a></li>
                    <li><a href="#0">Membership Providers</a></li>
                    <li><a href="#0">Prospect Providers</a></li>
                    <li><a href="#0">Collection Providers</a></li>
                    <li><a href="#0">Account Update Providers</a></li>
                    <li><a href="#0">Order Confirmation Providers</a></li>
					-->
                </ul>
            </li>
            <li class="has-children comments">
                <a href="#0">Customers</a>
                <ul>
                   	<li><a href="<?= url::to(['customers/create'])?>">Add a Customer</a></li>
                    <li><a href="<?= url::to(['customers/index'])?>">Manage Customers</a></li>
                </ul>
            </li>
			<!--
            <li class="has-children images">
                <a href="#0">Email Campaigns</a>

                <ul>
                    <li><a href="#0">Email Templates</a></li>
                    <li><a href="#0">Email Routing (SMTP)</a></li>
                    <li><a href="#0">Email Trigger Events</a></li>
                    <li class="cd-label">Providers</li>
                    <li><a href="#0">Auto-Responder Providers</a></li>
                </ul>
            </li>

            <li class="has-children users">
                <a href="#0">Payment Systems</a>

                <ul>
                    <li><a href="#0">Test Payment Methods</a></li>
                    <li><a href="#0">Sales Tax Profiles</a></li>
                    <li><a href="#0">Coupon Profiles</a></li>
                    <li><a href="#0">Subscription Management</a></li>
                    <li><a href="#0">Load Balance Profiles</a></li>
                    <li><a href="#0">Cascade Profiles</a></li>
                    <li><a href="#0">BIN Management</a></li>
                    <li><a href="#0">Hard Decline Rules</a></li>
                    <li class="cd-label">Providers</li>
                    <li><a href="#0">Gateway Providers</a></li>
                    <li><a href="#0">Anti-Fraud Providers</a></li>
                    <li><a href="#0">Chargeback Providers</a></li>
                    <li><a href="#0">Tax Providers</a></li>
                </ul>
            </li>
            <li class="has-children users">
                <a href="#0">Reporting</a>
                <ul>
                    <li><a href="#0">Sales Reports</a></li>
                    <li><a href="#0">Fulfillment Reconciliation</a></li>
                    <li><a href="#0">User Activity Reports</a></li>
                    <li><a href="#0">Decline Reports</a></li>
                    <li><a href="#0">Analytics</a></li>
                </ul>
            </li>
            <li class="has-children users">
                <a href="#0">Admin Settings</a>
                <ul>
                    <li><a href="#0">User Accounts</a></li>
                    <li><a href="#0">System Messages</a></li>
                    <li><a href="#0">Import/Export</a></li>
                    <li><a href="#0">API Accounts</a></li>
                    <li><a href="#0">Developers</a></li>
                </ul>
            </li>
        </ul>
        <ul>
            <li class="cd-label">Action</li>
            <li class="action-btn"><a href="<?= url::to(['orders/create'])?>">Place an Order</a></li>
        </ul>
        -->
    </nav>

    <div class="content-wrapper">
        <?= $content ?>
    </div> <!-- .content-wrapper -->
</main> <!-- .cd-main-content -->

<!--<div class="container">
        <?php /*?><?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?><?php */?>
        <?php //$content ?>
    </div>-->



<?php $this->endBody() ?>
<script src="js/modernizr.js"></script> <!-- Modernizr -->
<script src="js/datatables.js"></script> <!-- Datatables -->
<script src="js/jquery.menu-aim.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
<script src="js/countries.js"></script>

<script>
    $(document).ready( function () {
        $('table').DataTable();
        $('table').show();
    } );
</script>
<script>
    if($('#orders-status')) {
        $('body').on('change', '#orders-status', function () {

            if( $('select#orders-status option:selected').val() == "refund" )
            {
                console.log('changed');
                $('<div class="form-group field-orders-refund_amount"><label class="control-label" for="orders-refund_amount">Refund Amount</label>' +
                    '<input type="text" id="orders-refund_amount" class="form-control" name="Orders[refund_amount]" value=""></div>').insertBefore('.btn-primary');
            }
            if($("#orders-refund_amount") && $('select#orders-status option:selected').val() != "refund")
            {
                $("#orders-refund_amount").remove();
                $("label[for='orders-refund_amount']").remove();
            }
        });
        $('input#orders-subscription').click(function()
        {
            if($('input#orders-subscription').is(":checked"))
            {

                $("#subscriptionBillingContainer").css("display", "block");
            }
            else
            {
                $("#subscriptionBillingContainer").css("display", "none");
            }
        })
    }
</script>
<script type="text/javascript">

    $(document).ready(function(){

        var counter = 2;

        $("#addButton").click(function () {

            if(counter>10){
                alert("Only 10 textboxes allow");
                return false;
            }

            var newTextBoxDiv = $(document.createElement('div'))
                .attr("id", 'TextBoxDiv' + counter);

            newTextBoxDiv.after().html('<hr /><label class="control-label" for="campaigns-prod_id">Prod ID</label>' +
                '<select class="form-control" name="dynamProducts[]" onchange=\'\$.post("index.php?r=products/loadprices", {id:$(this).find(":selected").val(),_csrf: \$(&apos;meta[name="csrf-token"]&apos;).attr("content")}, function( data ) { \$("#regularPrice' + counter + '").val( data );});\'>' + $('.dynamic_product').html() + '</select>' +
                '<label>Billing Cycle</label>' +
                '<input type="text" class="form-control" name="dynamBillingCycle[]" value="" />' +
                '<label>Trial Length</label>' +
                '<input type="text" class="form-control" name="dynamTrialLength[]" value="" />' +
                '<label>Trial Price</label>' +
                '<input type="text" class="form-control" name="dynamTrialPrice[]" value="" />' +
                '<label>Regular Price</label>' +
                '<input type="text" class="form-control" id="regularPrice' + counter + '" name="dynamRegPrice[]" value="" />');

            newTextBoxDiv.appendTo("#TextBoxesGroup");


            counter++;
        });

        $("#removeButton").click(function () {
            if(counter==1){
                alert("No more textbox to remove");
                return false;
            }

            counter--;

            $("#TextBoxDiv" + counter).remove();

        });

        $("#getButtonValue").click(function () {

            var msg = '';
            for(i=1; i<counter; i++){
                msg += "\n Textbox #" + i + " : " + $('#textbox' + i).val();
            }
            alert(msg);
        });
        //
        <?php
        echo  '$.post("'.Yii::$app->urlManager->createUrl(["campaigns/loadcampaignproductsinfo"]).'", {campaign_id:' . Yii::$app->getRequest()->getQueryParam('id') . ', _csrf: $(\'meta[name="csrf-token"]\').attr("content")}, function( data ) {
    $("#dynamicCampaignProducts").html( data );
    });'
        ?>
        //
    });
</script>
</body>
</html>
<?php $this->endPage() ?>
