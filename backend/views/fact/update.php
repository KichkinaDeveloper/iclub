<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Fact */

$this->title = 'Update Fact: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Facts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="fact-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
