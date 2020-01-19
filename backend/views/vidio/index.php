<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\VidioSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Vidios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vidio-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Vidio', ['create'], ['class' => 'btn btn-success']) ?>
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
            'title',
            'description',
            [
                'attribute' => 'videoname',
                'format' => 'raw',
                'value' => function ($model){
                    if ($model->videoname != NULL){
                        return "<video src='../../frontend/web/kurslar/".$model->videoname."' controls style='width: 200px;'>";
                    } else{
                        return '<img src="../../frontend/web/kurslar/no_img.png" style="width:100px;">';
                    }
                }
            ],
            'status',
            //'kurslar_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
