<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Raiting */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Raitings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="raiting-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'user_id',
            'pro_id',
            'data_create',
            'raiting',
        ],
    ]) ?>

</div>
