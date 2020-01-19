<?php

use yii\widgets\LinkPager;
use yii\helpers\Url;

?>
<section id="mu-page-breadcrumb">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-page-breadcrumb-area">
           <h2>Yangiliklar</h2>
           <ol class="breadcrumb">
            <li><a href="<?= Url::to(['site/index'])?>">Bosh sahifa</a></li>            
            <li class="active">Yangiliklar</li>
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
                             <div class="mu-course-container mu-blog-archive">
                                 <div class="row">
                <?php foreach($model as $m): ;?>
                   <div class="col-md-6 col-sm-6">
                      <article class="mu-blog-single-item">
                        <figure class="mu-blog-single-img">
                          <a href="<?= Url::to(['news/view', 'id' => $m->id]) ?>"><img src="/news/<?= $m->image?>" height="300px" alt="img"></a>
                          <figcaption class="mu-blog-caption">
                            <h3><a href="<?= Url::to(['news/view', 'id' => $m->id]) ?>"><?= $m->title?></a></h3>
                          </figcaption>                      
                        </figure>
                        <div class="mu-blog-meta">
                          <p><?= $m->author?> <?= $m->date?></a></p>
                          <span><i class="fa fa-comments-o"></i>87</span>
                        </div>
                        <div class="mu-blog-description">
                          <p><?= $m->short_desc?></p>
                          <a class="mu-read-more-btn" href="<?= Url::to(['news/view', 'id' => $m->id]) ?>">Read More</a>
                        </div>
                    </article>
                </div>
                <?php endforeach;?>   
                  </div>
                </div>
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
