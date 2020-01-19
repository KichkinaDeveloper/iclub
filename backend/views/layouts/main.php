<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<?php
    $string = "";
    $controller = Yii::$app->controller->id;
    $controller1 = Yii::$app->controller->action->id;

    if ($controller1 != 'index'){
        $string = "../css/asset/img/ui-zac.jpg";
    }else{
        $string = "css/asset/img/ui-zac.jpg";
    }
?>

<section id="container" >
    <!-- **********************************************************************************************************************************************************
    TOP BAR CONTENT & NOTIFICATIONS
    *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
        <div class="sidebar-toggle-box">
            <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
        </div>
        <!--logo start-->
        <a href="<?= \yii\helpers\Url::to('\admin\site') ?>" class="logo"><b>INTELLECT</b></a>
        <!--logo end-->
        <div class="nav notify-row" id="top_menu">
            <!--  notification start -->
            <ul class="nav top-menu">
                <!-- settings start -->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                        <i class="fa fa-tasks"></i>
                        <span class="badge bg-theme">4</span>
                    </a>
                    <ul class="dropdown-menu extended tasks-bar">
                        <div class="notify-arrow notify-arrow-green"></div>
                        <li>
                            <p class="green">You have 4 pending tasks</p>
                        </li>
                        <li>
                            <a href="index.html#">
                                <div class="task-info">
                                    <div class="desc">DashGum Admin Panel</div>
                                    <div class="percent">40%</div>
                                </div>
                                <div class="progress progress-striped">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                        <span class="sr-only">40% Complete (success)</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="index.html#">
                                <div class="task-info">
                                    <div class="desc">Database Update</div>
                                    <div class="percent">60%</div>
                                </div>
                                <div class="progress progress-striped">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                        <span class="sr-only">60% Complete (warning)</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="index.html#">
                                <div class="task-info">
                                    <div class="desc">Product Development</div>
                                    <div class="percent">80%</div>
                                </div>
                                <div class="progress progress-striped">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                        <span class="sr-only">80% Complete</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="index.html#">
                                <div class="task-info">
                                    <div class="desc">Payments Sent</div>
                                    <div class="percent">70%</div>
                                </div>
                                <div class="progress progress-striped">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                        <span class="sr-only">70% Complete (Important)</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="external">
                            <a href="#">See All Tasks</a>
                        </li>
                    </ul>
                </li>
                <!-- settings end -->
                <!-- inbox dropdown start-->
                <li id="header_inbox_bar" class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                        <i class="fa fa-envelope-o"></i>
                        <span class="badge bg-theme">5</span>
                    </a>
                    <ul class="dropdown-menu extended inbox">
                        <div class="notify-arrow notify-arrow-green"></div>
                        <li>
                            <p class="green">You have 5 new messages</p>
                        </li>
                        <li>
                            <a href="index.html#">
                                <span class="photo"><img alt="avatar" src="assets/img/ui-zac.jpg"></span>
                                <span class="subject">
                                    <span class="from">Zac Snider</span>
                                    <span class="time">Just now</span>
                                    </span>
                                <span class="message">
                                        Hi mate, how is everything?
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="index.html#">
                                <span class="photo"><img alt="avatar" src="assets/img/ui-divya.jpg"></span>
                                <span class="subject">
                                    <span class="from">Divya Manian</span>
                                    <span class="time">40 mins.</span>
                                    </span>
                                <span class="message">
                                     Hi, I need your help with this.
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="index.html#">
                                <span class="photo"><img alt="avatar" src="assets/img/ui-danro.jpg"></span>
                                <span class="subject">
                                    <span class="from">Dan Rogers</span>
                                    <span class="time">2 hrs.</span>
                                    </span>
                                <span class="message">
                                        Love your new Dashboard.
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="index.html#">
                                <span class="photo"><img alt="avatar" src="assets/img/ui-sherman.jpg"></span>
                                <span class="subject">
                                    <span class="from">Dj Sherman</span>
                                    <span class="time">4 hrs.</span>
                                    </span>
                                <span class="message">
                                        Please, answer asap.
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="index.html#">See all messages</a>
                        </li>
                    </ul>
                </li>
                <!-- inbox dropdown end -->
            </ul>
            <!--  notification end -->
        </div>
        <div class="top-menu">
            <ul class="nav pull-right top-menu">
                <li><a class="logout" data-method="post" href="<?= \yii\helpers\Url::to('/site/logout') ?>">Logout</a></li>
            </ul>
        </div>
    </header>
    <!--header end-->

    <!-- **********************************************************************************************************************************************************
    MAIN SIDEBAR MENU
    *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
        <div id="sidebar"  class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu" id="nav-accordion">

                <p class="centered"><a href="<?= \yii\helpers\Url::to('\admin\site') ?>"><img src="<?= $string ?>" class="img-circle" width="60"></a></p>
                <h5 class="centered"><?= Yii::$app->user->identity->username ?></h5>

                <li class="mt">
                    <a class="<?php if ($controller == 'site' && $controller1 == 'index'){ echo 'active';} ?>" href="<?= \yii\helpers\Url::to('\admin\site') ?>">
                        <i class="fa fa-home"></i>
                        <span>Home</span>
                    </a>
                </li>

                <li class="sub-menu">
                    <a class="<?php if ($controller == 'news'){ echo 'active';} ?>" href="<?= \yii\helpers\Url::to('\admin\news') ?>">
                        <i class="fa fa-hacker-news"></i>
                        <span>News</span>
                    </a>
                </li>

                <li class="sub-menu">
                    <a class="<?php if ($controller == 'kurslar'){ echo 'active';} ?>" href=" <?= \yii\helpers\Url::to('\admin\kurslar') ?>">
                        <i class="fa fa-book"></i>
                        <span>Kurslar</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a class="<?php if ($controller == 'vidio'){ echo 'active';} ?>" href="<?= \yii\helpers\Url::to('\admin\vidio') ?>">
                        <i class="fa fa-video-camera"></i>
                        <span>Videolar</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a class="<?php if ($controller == 'video-active'){ echo 'active';} ?>" href="<?= \yii\helpers\Url::to('\admin\video-active') ?>" >
                        <i class="fa fa-tasks"></i>
                        <span>Video Active</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a class="<?php if ($controller == 'features'){ echo 'active';} ?>" href="<?= \yii\helpers\Url::to('\admin\features') ?>" >
                        <i class="fa fa-th"></i>
                        <span>Features</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a class="<?php if ($controller == 'comment'){ echo 'active';} ?>" href="<?= \yii\helpers\Url::to('\admin\comment') ?>" >
                        <i class="glyphicon glyphicon-pencil"></i>
                        <span>Comment</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a class="<?php if ($controller == 'teachers'){ echo 'active';} ?>" href="<?= \yii\helpers\Url::to('\admin\teachers') ?>" >
                        <i class="fa fa-user"></i>
                        <span>Teachers</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a class="<?php if ($controller == 'user'){ echo 'active';} ?>"href="<?= \yii\helpers\Url::to('\admin\user') ?>" >
                        <i class=" fa fa-users"></i>
                        <span>Users</span>
                    </a>
                </li>

            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>

    <section id="main-content">
        <section class="wrapper">
            <div class="container-fluid">
                <?= $content ?>
            </div>
        </section>
    </section>

    <!--footer start-->
    <footer class="site-footer">
        <div class="text-center">
            2019 - Intellect
            <a href="<?= \yii\helpers\Url::to('\site\index') ?>" class="go-top">
                <i class="fa fa-angle-up"></i>
            </a>
        </div>
    </footer>
    <!--footer end-->
</section>

<script type="text/javascript">
    /*$(document).ready(function () {
        var unique_id = $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'Welcome to Intellect!',
            // (string | mandatory) the text inside the notification
            text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo. Free version for <a href="http://blacktie.co" target="_blank" style="color:#ffd777">BlackTie.co</a>.',
            // (string | optional) the image to display on the left
            image: 'css/assets/img/ul-zac.jpg',
            // (bool | optional) if you want it to fade out on its own or just sit there
            sticky: true,
            // (int | optional) the time you want it to be alive for before fading out
            time: '',
            // (string | optional) the class name you want to apply to that specific message
            class_name: 'my-sticky-class'
        });

        return false;
    });*/
</script>

<script type="application/javascript">
    $(document).ready(function () {
        $("#date-popover").popover({html: true, trigger: "manual"});
        $("#date-popover").hide();
        $("#date-popover").click(function (e) {
            $(this).hide();
        });

        $("#my-calendar").zabuto_calendar({
            action: function () {
                return myDateFunction(this.id, false);
            },
            action_nav: function () {
                return myNavFunction(this.id);
            },
            ajax: {
                url: "show_data.php?action=1",
                modal: true
            },
            legend: [
                {type: "text", label: "Special event", badge: "00"},
                {type: "block", label: "Regular event", }
            ]
        });
    });


    function myNavFunction(id) {
        $("#date-popover").hide();
        var nav = $("#" + id).data("navigation");
        var to = $("#" + id).data("to");
        console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
</script>

<script>
    $(document).ready(function(){
        $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
