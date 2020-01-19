<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Raiting */

$this->title = 'Update Raiting: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Raitings', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="raiting-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
