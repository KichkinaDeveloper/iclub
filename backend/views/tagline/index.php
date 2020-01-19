<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\TaglineSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Taglines';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tagline-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tagline', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <input class="form-control fa fa-search" style="
        width: 100%;
        box-sizing: border-box;
        font-size: 16px;
        background-image: url('../css/asset/img/searchicon.png');
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
            'learn_online_title',
            'learn_online_value:ntext',
            'expert_teachers_title',
            'expert_teachers_value:ntext',
            //'best_classrooms_title',
            //'best_classrooms_value:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
