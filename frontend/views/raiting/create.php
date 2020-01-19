<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Raiting */

$this->title = 'Create Raiting';
$this->params['breadcrumbs'][] = ['label' => 'Raitings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="raiting-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
