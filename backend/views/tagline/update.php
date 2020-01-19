<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Tagline */

$this->title = 'Update Tagline: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Taglines', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tagline-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
