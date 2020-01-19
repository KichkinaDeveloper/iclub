<?php

use yii\helpers\Url;

$global = 0;
$active = "";
$kurs_id = $_GET['kurs_id'];

foreach (\common\models\VideoActive::find()->all() as $md){
    if (!empty(Yii::$app->user->identity->id)) {
        if (Yii::$app->user->identity->id == $md->user_id && $kurs_id == $md->kurs_id) {
            $active = "controls controlsList='nodownload'";
        }
    }else{
        break;
    }
}

foreach ($model as $a) {
    if ($kurs_id == null){ $global++; ?>
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-12">
                    <div class="well">
                        <div class="alert alert-success fade in">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">x</a>
                            <p><strong>Kechirasiz!</strong></p>
                            Videolardan kirib keling.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php break;
    }elseif ($a->kurslar_id != $kurs_id) { $global++;?>

        <div class="container text-center">
            <div class="row">
                <div class="col-sm-12">
                    <div class="well">
                        <div class="alert alert-success fade in">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">x</a>
                            <p><strong>Kechirasiz!</strong></p>
                            Bu kursning videolari topilmadi
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php break;
    }
}
if ($global == 0){
?>


<section id="mu-page-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-page-breadcrumb-area">
                    <h2>Course Detail</h2>
                    <ol class="breadcrumb">
                        <li><a href="<?= Url::to(['site/index']) ?>">Home</a></li>
                        <li class="active">Kurslar</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End breadcrumb -->
<section id="mu-course-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-course-content-area">
                    <div class="row">
                        <div class="col-md-9">
                            <!-- start course content container -->
                            <div class="mu-course-container mu-course-details">
                                <div class="row">
                                    <div class="col-md-12">
                                        <?php foreach ($model as $a){ ?>
                                            <?php global $m2;
                                            $m2 = $a->id; ?>
                                            <div class="mu-latest-course-single">
                                                <figure class="mu-latest-course-img">
                                                    <video id="my-video" class="video-js fa-file-video-o/" <?php if ($a->status == 1) { echo "controls preload='auto' controlsList='nodownload'";} ?> <?= $active ?> height="100%" width="100%" poster="<?= $a->videoname ?>" data-setup='{}'>
                                                        <source src="/videolar/<?= $a->videoname ?>" type='video/mp4'>
                                                    </video>
                                                </figure>
                                                <div class="mu-latest-course-single-content">
                                                    <h2 class="text-center"><?= $a->title ?></h2>
                                                    <p class="text-center"><?= $a->description ?></p>
                                                </div>
                                            </div>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mu-blog-single-navigation">
                                        <a class="mu-blog-prev" href="<?= Url::to(['vidio/prev', 'id' => $a->id]) ?>?kurs_id=<?= $a->kurslar_id ?>"><span class="fa fa-angle-left"></span>Prev</a>
                                        <a class="mu-blog-next" href="<?= Url::to(['vidio/next', 'id' => $a->id]) ?>?kurs_id=<?= $a->kurslar_id ?>">Next<span class="fa fa-angle-right"></span></a>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                            <!-- end course content container -->
                            <!-- start related course item -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mu-related-item">
                                        <h3>Related Courses</h3>
                                        <div class="mu-related-item-area">
                                            <div id="mu-related-item-slide">
                                                <?php foreach (\common\models\Vidio::find()->where(['kurslar_id' => $kurs_id])->limit(4)->all() as $kurs){ ?>
                                                    <div class="col-md-6">
                                                        <div class="mu-latest-course-single">
                                                            <figure class="mu-latest-course-img">
                                                                <a href="<?= Url::to(['vidio/view', 'id' => $kurs->id]) ?>?kurs_id=<?= $kurs->kurslar_id ?>"><video src="/videolar/<?= $kurs->videoname ?>" width="100%"></a>
                                                            </figure>
                                                            <div class="mu-latest-course-single-content">
                                                                <h4><a href="<?= Url::to(['vidio/view', 'id' => $kurs->id]) ?>?kurs_id=<?= $kurs->kurslar_id ?>"><?= $kurs->title ?></a></h4>
                                                                <p><?= $kurs->description ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end start related course item -->
                            <!-- start comments -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mu-comments-area">
                                        <h3>Comments</h3>
                                        <div class="comments">
                                            <div id="fb-root"></div>
                                            <script async defer crossorigin="anonymous" src="https://connect.facebook.net/uz_UZ/sdk.js#xfbml=1&version=v3.3"></script>
                                            <div class="fb-comments" data-href="http://kurs.uz/news/<?= $m2 ?>" data-width="" data-numposts="5"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end comments -->
                        </div>
                        <div class="col-md-3">
                            <!-- start sidebar -->
                            <aside class="mu-sidebar">
                                <!-- start single sidebar -->
                                <div class="mu-single-sidebar">
                                    <h3>Categories</h3>
                                    <ul class="mu-sidebar-catg">
                                        <?php foreach (\common\models\Kurslar::find()->limit(6)->all() as $md){ ?>
                                            <li><a href="<?= Url::to(['kurslar/view', 'id' => $md->id]) ?>"><?= $md->title ?></a></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                                <!-- end single sidebar -->
                                <!-- start single sidebar -->
                                <div class="mu-single-sidebar">
                                    <h3>Popular Course</h3>
                                    <div class="mu-sidebar-popular-courses">
                                        <?php foreach (\common\models\Kurslar::find()->where(['status' => 1])->limit(5)->all() as $me) { ?>
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="<?= Url::to(['kurslar/view', 'id' => $me->id]) ?>">
                                                        <img class="media-object" src="/kurslar/<?= $me->image ?>" alt="img">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="media-heading"><a href="<?= Url::to(['kurslar/view', 'id' => $me->id]) ?>"><?= $me->title ?></a></h4>
                                                    <span class="popular-course-price"><?= $me->summa ?> so'm</span>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                                <!-- end single sidebar -->
                            </aside>
                            <!-- / end sidebar -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php } ?>