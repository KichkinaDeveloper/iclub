<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\VideoActive */

$this->title = 'Create Video Active';
$this->params['breadcrumbs'][] = ['label' => 'Video Actives', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="video-active-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
