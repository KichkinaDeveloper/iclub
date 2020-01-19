<?php

use yii\helpers\Url;

?>
<section id="mu-page-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-page-breadcrumb-area">
                    <h2>Qidiruv</h2>
                    <ol class="breadcrumb">
                        <li><a href="<?= Url::to(['site/index']) ?>">Bosh sahifa</a></li>
                        <li class="active">Qidiruv</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- End breadcrumb -->
<section id="mu-course-content" style="padding:30px 0px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-course-content-area">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- start course content container -->
                            <h2 style="text-align:center; padding-top:0; margin-bottom:20px">Qidiruv natijasida <?=count($news)?> ta ma'lumot topildi!</h2>
                            <div class="mu-course-container mu-blog-archive">
                                <div class="row">
                                    <?php
                                    if (count($news) > 0) :; ?>
                                        <?php foreach ($news as $m) :; ?>
                                            <div class="col-md-6 col-sm-6">
                                                <article class="mu-blog-single-item">
                                                    <figure class="mu-blog-single-img">
                                                        <a href="<?= Url::to(['news/view', 'id' => $m->id]) ?>"><img src="/news/<?= $m->image ?>" alt="img"></a>
                                                        <figcaption class="mu-blog-caption">
                                                            <h3><a href="<?= Url::to(['news/view', 'id' => $m->id]) ?>"><?= $m->title ?></a></h3>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="mu-blog-meta">
                                                        <?= $m->author ?>
                                                        <?= $m->date ?>
                                                        <span><i class="fa fa-comments-o"></i>87</span>
                                                    </div>
                                                    <div class="mu-blog-description">
                                                        <p><?= $m->short_desc ?></p>
                                                        <a class="mu-read-more-btn" href="<?= Url::to(['news/view', 'id' => $m->id]) ?>">Read More</a>
                                                    </div>
                                                </article>
                                            </div>
                                        <?php  endforeach;
                                    endif;
                                    if (count($kurslar) > 0) :;
                                        foreach ($kurslar as $md) :; ?>
                                            <div class="col-md-6 col-sm-6">
                                                <article class="mu-blog-single-item">
                                                     <figure class="mu-blog-single-img">
                                                        <a href="<?= Url::to(['kurslar/view', 'id' => $md->id]) ?>"><img src="/kurslar/<?= $md->image ?>" alt="img"></a>
                                                        <figcaption class="mu-blog-caption">
                                                            <h3><a href="<?= Url::to(['kurslar/view', 'id' => $md->id]) ?>"><?= $md->title ?></a></h3>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="mu-blog-meta">
                                                        <?= $md->date ?>
                                                        <span><i class="fa fa-comments-o"></i>87</span>
                                                    </div>
                                                    <div class="mu-blog-description">
                                                        <p><?= $md->short_desc ?></p>
                                                        <a class="mu-read-more-btn" href="<?= Url::to(['kurslar/view', 'id' => $md->id]) ?>">Read More</a>
                                                    </div>
                                                </article>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        <?php else:;?>
                        <img src="/img/notfound.jpg" height="650px" width="100%" style="object-fit:cover" alt="rasm">
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>