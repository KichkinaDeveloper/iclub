<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use frontend\models\Wishlist;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>

    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <!--<link href="https://vjs.zencdn.net/7.6.0/video-js.css" rel="stylesheet">-->
    <!--<script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>-->
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<?php
$controller = Yii::$app->controller->id;
$controller1 = Yii::$app->controller->action->id;


if(!Yii::$app->user->isGuest){
  $user_id = Yii::$app->user->identity->id;
  $count = Wishlist::find()->where(['user_id' => $user_id])->count();
}
?>
  <a class="scrollToTop" href="#">
    <i class="fa fa-angle-up"></i>      
  </a>
<header id="mu-header">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="mu-header-area">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
              <div class="mu-header-top-left">
                <div class="mu-top-email">
                  <i class="fa fa-envelope"></i>
                  <span>intellect.club@gmail.ru</span>
                </div>
                <div class="mu-top-phone">
                  <i class="fa fa-phone"></i>
                  <span>(+90)320 35 36,</span>

                  <span> (+91)976 72 83</span>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
              <div class="mu-header-top-right">
                <nav>
                  <ul class="mu-top-social-nav">
                    <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                    <?php if(!Yii::$app->user->isGuest):;?>                      
                        <li><a href="<?= Url::to(['wishlist/index']) ?>"><span class="fa fa-heart" id="wlist_value"><?=$count?></span></a></li>
                        <li><a href="<?= Url::to(['site/account']) ?>"><span class="fa fa-user"></span></a></li>
                    <?php endif;?>
                    <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                    <li><a href="#"><span class="fa fa-instagram"></span></a></li>
                    <li><a href="#"><span class="fa fa-youtube"></span></a></li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- End header  -->
<!-- Start menu -->
<section id="mu-menu">
<div class="body_overlay"></div>
  <nav class="navbar navbar-default" role="navigation">  
    <div class="container">
      <div class="navbar-header">
        <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
        <button data-opened="true" type="button" class="navbar-toggle collapsed" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <!-- LOGO -->              
        <!-- TEXT BASED LOGO -->
        <a class="navbar-brand" href="<?= Url::to(['site/index'])?>"><i class="fa fa-university"></i><span>IntellectClub</span></a>
        <!-- IMG BASED LOGO  -->
        <!-- <a class="navbar-brand" href="index.html"><img src="img/logo.png" alt="logo"></a> -->
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
          <li class="<?php if ($controller == 'site' && $controller1 == 'index'){ echo 'active';} ?> lida"><a href="<?= Url::to(['site/index'])?>" id="activ">Bosh sahifa</a></li>
          <li class="<?php if ($controller == 'kurslar'){ echo 'active';} ?> lida">
            <a href="<?= Url::to(['kurslar/index'])?>">Kurslar</a>
          </li>
          <li class="<?php if ($controller == 'teachers'){ echo 'active';} ?> lida">
            <a href="<?= Url::to(['teachers/index'])?>">Teachers</a>
          </li>
          <li class="<?php if ($controller == 'news'){ echo 'active';} ?>">
            <a href="<?= Url::to(['news/index'])?>">Yangiliklar</a>
          </li>            
          <?php if(!\Yii::$app->user->isGuest):?>
          <li><a data-method="POST" href="<?= Url::to(['site/logout'])?>">
          <i class="fa fa-sign-out"></i>
          Logout
          (<?=Yii::$app->user->identity->username?>)</a></li>               
          <?php else:?>
          <li class="<?php if ($controller1 == 'signup'){ echo 'active';} ?>">
              <a href="<?= Url::to(['site/signup'])?>">
                <i class="fa fa-user-plus"></i>Signup
              </a>
          </li>
          <li class="<?php if ($controller1 == 'login'){ echo 'active';} ?>">
              <a href="<?= Url::to(['site/login'])?>">
                <i class="fa fa-sign-in"></i>Login
              </a>
          </li>
          <?php endif?>
          <li class="lida"><a href="<?= Url::to(['/site/search']) ?>" id="mu-search-icon"><i class="fa fa-search"></i></a></li>
        </ul>                     
      </div>        
    </div>     
  </nav>
</section>
<!-- End menu -->
<!-- Start search box -->
<div id="mu-search">
  <div class="mu-search-area">      
    <button class="mu-search-close"><span class="fa fa-close"></span></button>
    <div class="container">
      <div class="row">
        <div class="col-md-12">            
          <form class="mu-search-form" role="search" method="POST" action="<?= Url::to(['/site/search']) ?>">
          <input type="hidden" name="<?= \Yii::$app->request->csrfParam ?>" value="<?= \Yii::$app->request->csrfToken ?>">
          <input type="search" placeholder="Kalit so'zni kiriting" name="SearchForm[text]" id="top-search">              
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $content ?>

<?php foreach(\common\models\Sale::find()->limit(1)->orderBy(['id'=>SORT_DESC])->all() as $m): ;?>
    <h1 style="display:none;" id="start_time"><?=$m->start_time?></h1>
    <h1 id="sana" style="display:none"><?=$m->finish_time?></h1>
<?php endforeach;?>

<!-- countdown -->
<!-- <div class="main-box">
    <p id="change_color">&nbspChegirmalar boshlanishga:</p>
    <div class="flip-countdown"></div>
</div> -->
<!-- end countdown -->
<script type="text/javascript">
    (function(w,d,v3){
        w.chaportConfig = { appId : '5d331950b3251d3917665585' };

        if(w.chaport)return;v3=w.chaport={};v3._q=[];v3._l={};v3.q=function(){v3._q.push(arguments)};v3.on=function(e,fn){if(!v3._l[e])v3._l[e]=[];v3._l[e].push(fn)};var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://app.chaport.com/javascripts/insert.js';var ss=d.getElementsByTagName('script')[0];ss.parentNode.insertBefore(s,ss)})(window, document);
</script>
<footer id="mu-footer">
  <!-- start footer top -->
    <?php foreach (\common\models\Bizkursvapasti::find()->limit(1)->all() as $mdb) { ?>
  <div class="mu-footer-top">
    <div class="container">
      <div class="mu-footer-top-area">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="mu-footer-widget">
              <h4 style="text-align:center"><?= $mdb->aloqa ?></h4>
              <address>
                <p style="float:left; margin-right:30px; margin-left:70px"><?= $mdb->manzil ?></p>
                <p style="float:left; margin-right:30px"><?= $mdb->telefon ?></p>
                <p style="float:left; margin-right:30px"><?= $mdb->website ?></p>
                <p style="float:left; margin-right:30px">Email: intellectClub@gmail.com</p>
              </address>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <!-- end footer top -->
  <!-- start footer bottom -->
  <div class="mu-footer-bottom">
    <div class="container">
      <div class="mu-footer-bottom-area">
        <p>&copy; <?= $mdb->footeroxiri ?> <a href="<?= Url::to(['site/index'])?>" rel="nofollow">IntellectClub.uz</a></p>
      </div>
    </div>
  </div>
  <!-- end footer bottom -->
    <?php } ?>
</footer>
<?php $this->endBody() ?>
<!--<script src='https://vjs.zencdn.net/7.6.0/video.js'></script>-->
</body>
</html>
<?php $this->endPage() ?>
