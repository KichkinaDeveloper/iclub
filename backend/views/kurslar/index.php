<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\KurslarSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kurslars';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kurslar-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Kurslar', ['create'], ['class' => 'btn btn-success']) ?>
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
            'summa',
            'place',
            'student_soni',
            //'start_day',
            //'short_desc:ntext',
            //'description:ntext',
            //'date',
            //'status',
            //'image',
            [
                'attribute' => 'image',
                'format' => 'raw',
                'value' => function ($model){
                    if ($model->image != NULL){
                        return "<img src='../../frontend/web/kurslar/".$model->image."' style='width: 100px;'>";
                    } else{
                        return '<img src="../../frontend/web/kurslar/no_img.png" style="width:100px;">';
                    }
                }
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
