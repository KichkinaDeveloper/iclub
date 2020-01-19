<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\NewsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'News';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create News', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <input class="form-control fa fa-search" style="
        width: 100%;
        box-sizing: border-box;
        font-size: 16px;
        background-image: url('css/asset/img/searchicon.png');
        background-position: 10px 6px;
        background-repeat: no-repeat;
        padding: 12px 20px 12px 40px;"
        id="myInput"
        type="text"
        placeholder="Search..">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'id' => 'myTable',
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'author',
            'title',
            'short_desc:ntext',
            // 'description:ntext',
            //'date',
            //'image',
            [
                'attribute' => 'Rasm',
                'value' => function ($m){
                    return '<img style="width: 150px; height:150px;  object-fit: cover;" src="../../frontend/web/news/'.$m->image . '">';
                    },
                    'format' => 'raw'
                ],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
