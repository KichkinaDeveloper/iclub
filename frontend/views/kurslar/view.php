<?php

use common\models\Raiting;
use yii\helpers\Url;
?>
<style>
.rating {
display: inline-block;
position: relative;
height: 30px;
line-height: 30px;
font-size: 30px;
}

.rating label {
position: absolute;
top: 0;
left: 0;
height: 100%;
cursor: pointer;
}

.rating label:last-child {
position: static;
}

.rating label:nth-child(1) {
z-index: 5;
}

.rating label:nth-child(2) {
z-index: 4;
}

.rating label:nth-child(3) {
z-index: 3;
}

.rating label:nth-child(4) {
z-index: 2;
}

.rating label:nth-child(5) {
z-index: 1;
}

.rating label input {
position: absolute;
top: 0;
left: 0;
opacity: 0;
}

.rating label .icon {
float: left;
color: transparent;
}

.rating label:last-child .icon {
color: #000;
}

.rating:not(:hover) label input:checked~.icon,
.rating:hover label:hover input~.icon {
color: #deb217;
}

.rating label input:focus:not(:checked)~.icon:last-child {
color: #000;
text-shadow: 0 0 5px #09f;
}
</style>
<?php
$models = Raiting::find()->where(['user_id' => Yii::$app->user->identity->id])
->andWhere(['pro_id' => $model['id']])->one();
if($models){
    global $a;
    $a = $models['raiting'];
}
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
                                    <?php global $m;
                                        $m = $model['id'] ?>
                                    <div class="mu-latest-course-single">
                                        <figure class="mu-latest-course-img">
                                            <a href="javascript:void(0)" id="raiting" data-prod_id = "<?= $model['id']?>">
                                            <img src="/kurslar/<?= $model['image'] ?>" alt="img"></a>
                                            <?= $a->id?>
                                            <figcaption class="mu-latest-course-imgcaption">
                                                
                                                <form class="rating">
                                                    <?php if($a != 0):;?>
                                                    <label>
                                                        <input type="radio" name="stars" value="<?=$a?>" />
                                                        <?php for($i = $a+1; $i <= 5; $i++):;?>
                                                            <span class="icon" style="color:#000;">★</span>
                                                        <?php endfor;?>
                                                    <?php for($i = 1; $i <= $a; $i++):;?>
                                                        <span class="icon" style="color:#deb217;">★</span>
                                                    <?php endfor;?>
                                                </label>
                                                <?php endif;?>
                                                    <label>
                                                        <input type="radio" name="stars" value="1" />
                                                        <span class="icon">★</span>
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="stars" value="2" />
                                                        <span class="icon">★</span>
                                                        <span class="icon">★</span>
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="stars" value="3" />
                                                        <span class="icon">★</span>
                                                        <span class="icon">★</span>
                                                        <span class="icon">★</span>
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="stars" value="4" />
                                                        <span class="icon">★</span>
                                                        <span class="icon">★</span>
                                                        <span class="icon">★</span>
                                                        <span class="icon">★</span>
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="stars" value="5" />
                                                        <span class="icon">★</span>
                                                        <span class="icon">★</span>
                                                        <span class="icon">★</span>
                                                        <span class="icon">★</span>
                                                        <span class="icon">★</span>
                                                    </label>
                                                </form>
                                                <span><i class="fa fa-clock-o"></i><?= $model['date'] ?></span>
                                            </figcaption>
                                        </figure>
                                        <div class="mu-latest-course-single-content">
                                            <h2><a href="#"><?= $model['title']?></a></h2>
                                            <h4>Course Information</h4>
                                            <ul>
                                                <li> <span>Course Price</span> <span><?= $model['summa'] ?>so'm</span></li>
                                                <li> <span>Place</span> <span><?= $model['place'] ?></span></li>
                                                <li> <span>Total Students</span> <span><?= $model['student_soni'] ?>+</span></li>
                                                <li> <span>Course Start</span> <span><?= $model['start_day'] ?></span></li>
                                            </ul>
                                            <h4>Description</h4>
                                            <p><?= $model['description']?></p>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mu-blog-single-navigation">
                                <a class="mu-blog-prev" href="<?= Url::to(['vidio/index']) ?>?kurs_id=<?= $a->id ?>"><span class="glyphicon glyphicon-facetime-video"></span>videos</a>
                            </div>
                        </div>
                    </div>
                <!-- end course content container -->
                <!-- start related course item -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="mu-related-item">
                            <h3>Related Courses</h3>
                            <div class="mu-related-item-area">
                                <div id="mu-related-item-slide">
                                    <?php foreach (\common\models\Kurslar::find()->limit(4)->all() as $kurs) { ?>
                                        <div class="col-md-6">
                                            <div class="mu-latest-course-single">
                                                <figure class="mu-latest-course-img">
                                                    <a href="#"><img alt="img" src="/kurslar/<?= $kurs->image ?>"></a>
                                                    <figcaption class="mu-latest-course-imgcaption">
                                                        <a href="#">Drawing</a>
                                                        <span><i class="fa fa-clock-o"></i><?= $kurs->date ?></span>
                                                    </figcaption>
                                                </figure>
                                                <div class="mu-latest-course-single-content">
                                                    <h4><a href="<?= Url::to(['kurslar/view', 'id' => $a->id]) ?>"><?= $kurs->title ?></a></h4>
                                                    <p><?= $kurs->short_desc ?></p>
                                                    <div class="mu-latest-course-single-contbottom">
                                                        <a href="#" class="mu-course-details">Details</a>
                                                        <span href="#" class="mu-course-price"><?= $kurs->summa ?>so'm</span>
                                                    </div>
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
                                <div class="fb-comments" data-href="http://kurs.uz/news/<?= $m ?>" data-width="" data-numposts="5"></div>
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
                                <?php foreach (\common\models\Kurslar::find()->limit(6)->all() as $md) { ?>
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