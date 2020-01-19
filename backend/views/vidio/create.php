<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Vidio */

$this->title = 'Create Vidio';
$this->params['breadcrumbs'][] = ['label' => 'Vidios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vidio-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
