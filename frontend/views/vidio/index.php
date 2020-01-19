<?php
use yii\widgets\LinkPager;
use yii\helpers\Url;

$active = "";
$global;
$array = [];
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

foreach (\common\models\Vidio::find()->all() as $a) {
    if ($a->kurslar_id == $kurs_id) {
        $global++;
    }
}

if ($global == 0){ ?>
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
    <?php
}
if ($global != 0){
?>

<section id="mu-page-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-page-breadcrumb-area">
                    <h2>Course</h2>
                    <ol class="breadcrumb">
                        <li><a href="<?= Url::to(['site/index'])?>">Home</a></li>
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
                            <div class="mu-course-container">
                                <div class="row">
                                    <?php
                                    foreach ($model as $a){
                                        ?>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="mu-latest-course-single">
                                                <figure class="mu-latest-course-img">
                                                    <video id="my-video" class="video-js fa-file-video-o/" <?php if ($a->status == 1) { echo "controls preload='auto' controlsList='nodownload'";} ?> <?= $active ?> height="100%" width="100%" poster="<?= $a->videoname ?>" data-setup='{}'>
                                                        <source src="/videolar/<?= $a->videoname ?>" type='video/mp4'>
                                                    </video>
                                                </figure>
                                                <div class="mu-latest-course-single-content">
                                                    <h4><a href="<?= Url::to(['vidio/view', 'id' => $a->id]) ?>?kurs_id=<?= $a->kurslar_id ?>"><?= $a->title ?></a></h4>
                                                    <p><?= $a->description ?></p>
                                                </div>
                                        <?php if(Wishlist::find()->where(['user_id' => Yii::$app->user->identity->id])
                              ->andWhere(['pro_id' => $m->id])->one()):;?>
                                 <a href="javascript:void(0)" data-pro_id = "<?= $m->id?>" id="wlist"><i class="fa fa-heart" id="wcha"></i></a>
                                <?php else:;?>
                                <a href="javascript:void(0)" data-pro_id = "<?= $m->id?>" id="wlist"><i class="fa fa-heart-o" id="wcha"></i></a>
                          <?php endif;?>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <!-- end course content container -->
                            <!-- start course pagination -->
                            <div class="mu-pagination">
                                <nav>
                                    <?=LinkPager::widget([
                                        'pagination' => $pagination,
                                        'pageCssClass' => "page-itemn",
                                        'linkOptions' => [
                                            'class' => 'page-link',
                                        ],
                                        'disabledPageCssClass' => "d-none"
                                    ])?>
                                </nav>
                            </div>
                            <!-- end course pagination -->
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
