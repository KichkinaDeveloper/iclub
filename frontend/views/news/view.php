<?php

use yii\helpers\Url;
?>
<section id="mu-page-breadcrumb">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="mu-page-breadcrumb-area">
          <h2>Yangiliklar</h2>
          <ol class="breadcrumb">
            <li><a href="<?= Url::to(['site/index']) ?>">Bosh Sahifa</a></li>
            <li class="active">yangiliklar/</li>
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
              <div class="mu-course-container mu-blog-single">
                <div class="row">
                  <div class="col-md-12">
                    <?php foreach ($model as $m) :; ?>
                      <?php global $a1;
                      $a = $m->id; ?>
                      <article class="mu-blog-single-item">
                        <figure class="mu-blog-single-img">
                          <a href="#"><img alt="img" src="/news/<?= $m->image ?>"></a>
                          <figcaption class="mu-blog-caption">
                            <h3><a href="#"><?= $m->title ?></a></h3>
                          </figcaption>
                        </figure>
                        <div class="mu-blog-meta">
                          <a href="#"><?= $m->author ?></a>
                          <a href="#"><?= $m->date ?></a>
                          <span><i class="fa fa-comments-o"></i>87</span>
                        </div>
                        <div class="mu-blog-description">
                          <p><?= $m->description ?></p>
                        </div>
                        <div class="mu-blog-social">
                          <ul class="mu-news-social-nav">
                            <li>SOCIAL SHARE :</li>
                            <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                            <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                          </ul>
                        </div>
                      </article>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="mu-blog-single-navigation">
                      <a class="mu-blog-prev" href="<?= Url::to(['news/prev', 'id' => $m->id]) ?>"><span class="fa fa-angle-left"></span>Prev</a>
                      <a class="mu-blog-next" href="<?= Url::to(['news/next', 'id' => $m->id]) ?>">Next<span class="fa fa-angle-right"></span></a>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>
              <!-- end blog navigation -->
              <!-- start related course item -->
              <div class="row">
                <div class="col-md-12">
                  <div class="mu-related-item">
                    <h3>Related News</h3>
                    <div class="mu-related-item-area">
                      <div id="mu-related-item-slide">
                        <?php foreach (\common\models\News::find()->limit(4)->all() as $news) :; ?>
                          <div class="col-md-6">
                            <article class="mu-blog-single-item">
                              <figure class="mu-blog-single-img">
                                <a href="#"><img alt="img" src="/news/<?= $news->image ?>" height="300px"></a>
                                <figcaption class="mu-blog-caption">
                                  <h3><a href="#"><?= $news->title ?></a></h3>
                                </figcaption>
                              </figure>
                              <div class="mu-blog-meta">
                                <a href="#"><?= $news->author ?></a>
                                <a href="#"><?= $news->date ?></a>
                                <span><i class="fa fa-comments-o"></i>87</span>
                              </div>
                              <div class="mu-blog-description">
                                <p><?= $m->short_desc?></p>
                                <a href="<?= Url::to(['news/view', 'id' => $news->id]) ?>" class="mu-read-more-btn">Read More</a>
                              </div>
                            </article>
                          </div>
                        <?php endforeach; ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end start related course item -->
              <!-- start blog comment -->
              <div class="row">
                <div class="col-md-12">
                  <div class="mu-comments-area">
                    <h3>Comments</h3>
                    <div class="comments">
                      <div id="fb-root"></div>
                      <script async defer crossorigin="anonymous" src="https://connect.facebook.net/uz_UZ/sdk.js#xfbml=1&version=v3.3"></script>
                      <div class="fb-comments" data-href="http://kurs.uz/news/<?= $a1 ?>" data-width="" data-numposts="5"></div>
                    </div>
                  </div>
                </div>
              </div>
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
                  <h3>Popular News</h3>
                  <div class="mu-sidebar-popular-courses">
                      <?php foreach (\common\models\News::find()->limit(5)->all() as $me) { ?>
                          <div class="media">
                              <div class="media-left">
                                  <a href="<?= Url::to(['news/view', 'id' => $me->id]) ?>">
                                      <img class="media-object" src="/news/<?= $me->image ?>" alt="img">
                                  </a>
                              </div>
                              <div class="media-body">
                                  <h4 class="media-heading"><a href="<?= Url::to(['news/view', 'id' => $me->id]) ?>"><?= $me->title ?></a></h4>
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