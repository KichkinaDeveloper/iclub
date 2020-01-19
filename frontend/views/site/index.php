<?php

use yii\helpers\Url;
use common\models\Features;

/* @var $this yii\web\View */

$this->title = 'Intellect Club';
?>
<section id="mu-slider">
  <?php foreach(\common\models\News::find()->limit(3)->all() as $n): ;?>
  <div class="mu-slider-single">
    <div class="mu-slider-img">
      <figure>
        <img src="/news/<?= $n->image?>" alt="img">
      </figure>
    </div>
    <div class="mu-slider-content">
      <h4>Eng so'nggi yangiliklar</h4>
      <span></span>
      <h2><?=$n->title?></h2>
      <p><?=$n->short_desc?></p>
      <a href="<?= Url::to(['news/view', 'id' => $n->id]) ?>" class="mu-read-more-btn">Read More</a>
    </div>
  </div>
<?php endforeach;?>
</section>

<section id="mu-service">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="mu-service-area">
          <!-- Start single service -->
            <?php foreach (\common\models\Tagline::find()->limit(1)->all() as $md) { ?>
          <div class="mu-service-single">
            <span class="fa fa-book"></span>
            <h3><?= $md->learn_online_title ?></h3>
            <p><?= $md->learn_online_value ?></p>
          </div>
          <!-- Start single service -->
          <!-- Start single service -->
          <div class="mu-service-single">
            <span class="fa fa-users"></span>
            <h3><?= $md->expert_teachers_title ?></h3>
            <p><?= $md->expert_teachers_value ?></p>
          </div>
          <!-- Start single service -->
          <!-- Start single service -->
          <div class="mu-service-single">
            <span class="fa fa-table"></span>
            <h3><?= $md->best_classrooms_title ?></h3>
            <p><?= $md->best_classrooms_value ?></p>
          </div>
            <?php } ?>
          <!-- Start single service -->
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End service  -->

<!-- Start about us -->
<section id="mu-about-us">
  <div class="container">
    <div class="row">
    <div class="col-md-12">
          <div class="mu-about-us-area">           
            <div class="row">
                <?php foreach (\common\models\Aboutus::find()->limit(1)->all() as $md) { ?>
              <div class="col-lg-6 col-md-6">
                <div class="mu-about-us-left">
                  <!-- Start Title -->
                  <div class="mu-title">
                    <h2><?= $md->title ?></h2>
                  </div>
                  <!-- End Title -->
                  <p><?= $md->description ?></p>
                  
                </div>
              </div>
              <div class="col-lg-6 col-md-6">
                <div class="mu-about-us-right">                            
                <a id="mu-abtus-video" href="<?= $md->video_url ?>" target="mutube-video">
                  <img src="/img/images.png" alt="img">
                </a>                
                </div>
              </div>
                <?php } ?>
            </div>
          </div>
        </div>
    </div>
  </div>
</section>
<!-- End about us -->

<!-- Start about us counter -->
<section id="mu-abtus-counter">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="mu-abtus-counter-area">
          <div class="row">
              <?php foreach (\common\models\Fact::find()->limit(1)->all() as $md) { ?>
            <!-- Start counter item -->
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-abtus-counter-single">
                <span class="fa fa-youtube-play"></span>
                <h4 class="counter"><?= count(\common\models\Vidio::find()->all()) ?></h4>
                <p><?= $md->kitoblar ?></p>
              </div>
            </div>
            <!-- End counter item -->
            <!-- Start counter item -->
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-abtus-counter-single">
                <span class="fa fa-users"></span>
                <h4 class="counter"><?= count(\common\models\User::find()->all()) ?></h4>
                <p><?= $md->talabalar ?></p>
              </div>
            </div>
            <!-- End counter item -->
            <!-- Start counter item -->
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-abtus-counter-single">
                <span class="fa fa-flask"></span>
                <h4 class="counter"><?= count(\common\models\Kurslar::find()->all()) ?></h4>
                <p><?= $md->tajriba ?></p>
              </div>
            </div>
            <!-- End counter item -->
            <!-- Start counter item -->
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-abtus-counter-single no-border">
                <span class="fa fa-user-secret"></span>
                <h4 class="counter"><?= count(\common\models\Teachers::find()->all()) ?></h4>
                <p><?= $md->oqutuvchilar ?></p>
              </div>
            </div>
              <?php } ?>
            <!-- End counter item -->
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php foreach (\common\models\Bizkursvapasti::find()->limit(1)->all() as $mdb) { ?>
<section id="mu-features">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="mu-features-area">
            <!-- Start Title -->
            <div class="mu-title">
              <h2><?= $mdb->bizningkurs ?></h2>
              <p><?= $mdb->bizkurs_description ?></p>
            </div>
            <!-- End Title -->
            <!-- Start features content -->
          <?php
          $array = ['fa fa-book','fa fa-users','fa fa-laptop',
          'fa fa-microphone','fa fa-film','fa fa-certificate'];
          ?>
            <div class="mu-features-content">
              <div class="row">
            <?php foreach(\common\models\Features::find()->all() as $f): ;?>
                <div class="col-lg-4 col-md-4 col-sm-6">
                  <div class="mu-single-feature">
                    <span class="<?=$array[$f->id - 1]?>"></span>
                    <h4><?=$f->title?></h4>
                    <p><?=$f->short_desc?></p>
                  </div>
                </div>
                <?endforeach;?>
              </div>
            </div>
            <!-- End features content -->
          </div>
        </div>
      </div>
    </div>
</section>

<section id="mu-latest-courses">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="mu-latest-courses-area">
                    <!-- Start Title -->
                    <div class="mu-title">
                        <h2><?= $mdb->yangikurs ?></h2>
                        <p><?= $mdb->yangikurs_description ?></p>
                    </div>
                    <!-- End Title -->
                    <!-- Start latest course content -->
                    <div id="mu-latest-course-slide" class="mu-latest-courses-content">
                        <?php foreach (\common\models\Kurslar::find()->limit(6)->all() as $md){ ?>
                            <div class="col-lg-4 col-md-4 col-xs-12">
                                <div class="mu-latest-course-single">
                                    <figure class="mu-latest-course-img">
                                        <a href="<?= Url::to(['kurslar/view', 'id' => $md->id]) ?>"><img src="/kurslar/<?= $md->image ?>" alt="img"></a>
                                        <figcaption class="mu-latest-course-imgcaption">
                                            <a href="#">Drawing</a>
                                            <span><i class="fa fa-clock-o"></i><?= $md->date ?></span>
                                        </figcaption>
                                    </figure>
                                    <div class="mu-latest-course-single-content">
                                        <h4><a href="<?= Url::to(['kurslar/view', 'id' => $md->id]) ?>"><?= $md->title ?></a></h4>
                                        <p><?= $md->short_desc ?></p>
                                        <div class="mu-latest-course-single-contbottom">
                                            <a class="mu-course-details" href="#">Details</a>
                                            <span class="mu-course-price" href="#"><?= $md->summa ?>so'm</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <!-- End latest course content -->
                </div>
            </div>
        </div>
    </div>
</section>

<section id="mu-our-teacher">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-our-teacher-area">
                    <!-- begain title -->
                    <div class="mu-title">
                        <h2><?= $mdb->oqituvchi ?></h2>
                        <p><?= $mdb->oqituvchi_description ?></p>
                    </div>
                    <!-- end title -->
                    <!-- begain our teacher content -->
                    <div class="mu-our-teacher-content">
                        <div class="row">
                            <?php foreach (\common\models\Teachers::find()->limit(4)->all() as $md){ ?>
                                <div class="col-lg-3 col-md-3  col-sm-6">
                                    <div class="mu-our-teacher-single">
                                        <figure class="mu-our-teacher-img">
                                            <img src="/teachers/<?= $md->image ?>" alt="teacher img">
                                            <div class="mu-our-teacher-social">
                                                <a href="<?= $md->facebookmanzili ?>"><span class="fa fa-facebook"></span></a>
                                                <a href="<?= $md->okmanzili ?>"><span class="fa fa-odnoklassniki"></span></a>
                                                <a href="<?= $md->gmailmanzili ?>"><span class="fa fa-envelope"></span></a>
                                                <a href="<?= $md->telegrammanzili ?>"><span class="fa fa-paper-plane"></span></a>
                                            </div>
                                        </figure>
                                        <div class="mu-ourteacher-single-content">
                                            <a href="<?= Url::to(['teachers/view', 'id' => $md->id]) ?>"><h4><?= $md->ismi ?></h4></a>
                                            <span><?= $md->fannomi ?></span>
                                            <a href="<?= Url::to(['teachers/view', 'id' => $md->id]) ?>"><p><?= $md->short_desc ?></p></a>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <!-- End our teacher content -->
                </div>
            </div>
        </div>
    </div>
</section>
<?php } ?>
  
  <section id="mu-testimonial">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-testimonial-area">
            <div id="mu-testimonial-slide" class="mu-testimonial-content">
              <!-- start testimonial single item -->
              <?php foreach(\common\models\Comment::find()->limit(3)->all() as $comment): ;?>
              <div class="mu-testimonial-item">
                <div class="mu-testimonial-quote">
                  <blockquote>
                    <p><?=$comment->text?></p>
                  </blockquote>
                </div>
                <div class="mu-testimonial-img">
                  <img src="/frontend/web/comment/<?= $comment->image ?>" alt="img" width="120px" height="120px" style="object-fit:cover">
                </div>
                <div class="mu-testimonial-info">
                  <h4><?=$comment->author?></h4>
                  <span><?=$comment->job?></span>
                </div>
              </div>
              <?php endforeach;?>
              <!-- end testimonial single item -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
