<?php
use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
   <head>
   <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
   </head>
   <body class="lang-et">
   <?php $this->beginBody() ?>
      <div id="page-header" class="contain-to-grid hide-for-print">
         <div class="top-bar" data-topbar>
            <section class="top-bar-section">
               <ul class="customer-service">
                  <li>Klienditeenindus</li>
                  <li class="customerservice-icon"><img src="https://www.creditstar.ee/themes/creditstar_ee//img/ico-customerservice.png" alt="" />1715</li>
                  <li class="openingtimes-icon"><img src="https://www.creditstar.ee/themes/creditstar_ee//img/ico-openingtimes.png" alt="" />E-P 9.00-21.00</li>
               </ul>
            </section>
            <section class="top-bar-section client-area">
               <ul class="right">
                  <li>Tere, Kaupo Kasutaja</li>
                  <li><a class="button-orange" href="#"><img src="https://www.creditstar.ee/themes/creditstar_ee/img/ico-logout.png" alt="" style="padding-right: 6px;margin-top: -4px;" />LOG OUT</a>
                  </li>
               </ul>
            </section>
         </div>
      </div>
      <div id="main-menu" class="contain-to-grid down-shadow  hide-for-print">
         <nav class="top-bar" data-topbar>
            <ul class="title-area">
               <li class="name">
                  <h1>
                     <a href="/user">
                     <img src="img/header-logo.png" alt="Creditstar" />
                     <span class="invisible">Creditstar</span>
                     </a>
                  </h1>
               </li>
               <li class="toggle-topbar menu-icon"><a href="/user"><span>Menüü</span></a></li>
            </ul>
            <section class="top-bar-section">
               <ul class="right">
                  <li class="language-change">
                     <a href="#">По-русски</a>
                  </li>
               </ul>
               <ul class="left" id="yw0">
                  <li><a href="https://www.creditstar.ee/est/site/laenud">Laenud</a></li>
                  <li><a href="https://www.creditstar.ee/est/site/help">Vajad abi?</a></li>
                  <li><a href="https://www.creditstar.ee/est/site/firmast">Firmast</a></li>
                  <li><a href="https://www.creditstar.ee/est/site/vastutustundlik">Vastutustundlik laenamine</a></li>
               </ul>
            </section>
         </nav>
         <div class="row" style="padding: 0 25px 0 15px;">
            <div class="top-bar submenu">
               <section class="top-bar-section">
                  <ul>
                     <li class=""><a href="/user">Users</a></li>
                     <li class=""><a href="/loan">Loans</a></li>
                  </ul>
               </section>
            </div>
         </div>
      </div>
      <?= $content ?>
      <?php $this->endBody() ?>
   </body>
</html>
<?php $this->endPage() ?>