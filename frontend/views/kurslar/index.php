<?php

use frontend\models\Wishlist;
use yii\widgets\LinkPager;
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

    .rating label input:focus:not(:checked)~.icon:last-child {
        color: #000;
        text-shadow: 0 0 5px #09f;
    }
</style>
<section id="mu-page-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-page-breadcrumb-area">
                    <h2>Course</h2>
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
                            <div class="mu-course-container">
                                <div class="row">
                                    <?php foreach ($model as $a) { ?>
                                        <?php
                                            $sql = Yii::$app->db->createCommand("select kurslar.title, (select ceiling(avg(raiting.raiting))
                                            from raiting where pro_id = kurslar.id) as ball from kurslar join raiting on 
                                            kurslar.id = raiting.pro_id where raiting.pro_id = $a->id group by title")->queryOne();
                                            ?>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="mu-latest-course-single">
                                                <figure class="mu-latest-course-img">
                                                    <a href="<?= Url::to(['kurslar/view', 'id' => $a->id]) ?>" data-pro_id="<?= $a->id ?>"><img src="/kurslar/<?= $a->image ?>" alt="img"></a>
                                                    <figcaption class="mu-latest-course-imgcaption">
                                                        <?php if (Wishlist::find()->where(['user_id' => Yii::$app->user->identity->id])
                                                                ->andWhere(['pro_id' => $a->id])->one()
                                                            ) :; ?>
                                                            <a href="javascript:void(0)" data-pro_id="<?= $a->id ?>" id="wlist"><i class="fa fa-heart" id="wcha"></i></a>
                                                        <?php else :; ?>
                                                            <a href="javascript:void(0)" data-pro_id="<?= $a->id ?>" id="wlist"><i class="fa fa-heart-o" id="wcha"></i></a>
                                                        <?php endif; ?>
                                                    </figcaption>
                                                </figure>
                                                <div class="mu-latest-course-single-content">
                                                    <h4><a href="<?= Url::to(['kurslar/view', 'id' => $a->id]) ?>"><?= $a->title ?></a></h4>
                                                    <p><?= $a->short_desc ?></p>
                                                    <div class="mu-latest-course-single-contbottom">
                                                        <a class="mu-course-details" href="#">Details</a>
                                                        <span class="mu-course-price" href="#"><?= $a->summa ?> so'm</span>
                                                    </div>
                                                    <form class="rating">
                                                        <?php if ($sql['ball'] != 0) :; ?>
                                                            <label>
                                                                <input type="radio" disabled name="stars" value="<?= $sql['ball'] ?>" />
                                                                <?php for ($i = 1; $i <= $sql['ball']; $i++) :; ?>
                                                                    <span class="icon" style="color:#deb217;">★</span>
                                                                <?php endfor; ?>
                                                                <?php for ($i = $sql['ball'] + 1; $i <= 5; $i++) :; ?>
                                                                    <span class="icon" style="color:#000;">★</span>
                                                                <?php endfor; ?>
                                                            </label>
                                                        <?php endif; ?>
                                                        <label>
                                                            <input type="radio" disabled name="stars" value="1" />
                                                            <span class="icon">★</span>
                                                        </label>
                                                        <label>
                                                            <input type="radio" disabled name="stars" value="2" />
                                                            <span class="icon">★</span>
                                                            <span class="icon">★</span>
                                                        </label>
                                                        <label>
                                                            <input type="radio" disabled name="stars" value="3" />
                                                            <span class="icon">★</span>
                                                            <span class="icon">★</span>
                                                            <span class="icon">★</span>
                                                        </label>
                                                        <label>
                                                            <input type="radio" disabled name="stars" value="4" />
                                                            <span class="icon">★</span>
                                                            <span class="icon">★</span>
                                                            <span class="icon">★</span>
                                                            <span class="icon">★</span>
                                                        </label>
                                                        <label>
                                                            <input type="radio" name="stars" disabled value="5" />
                                                            <span class="icon">★</span>
                                                            <span class="icon">★</span>
                                                            <span class="icon">★</span>
                                                            <span class="icon">★</span>
                                                            <span class="icon">★</span>
                                                        </label>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <!-- end course content container -->
                            <!-- start course pagination -->
                            <div class="mu-pagination">
                                <nav>
                                    <?= LinkPager::widget([
                                        'pagination' => $pagination,
                                        'pageCssClass' => "page-itemn",
                                        'linkOptions' => [
                                            'class' => 'page-link',
                                        ],
                                        'disabledPageCssClass' => "d-none"
                                    ]) ?>
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