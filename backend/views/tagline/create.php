<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Tagline */

$this->title = 'Create Tagline';
$this->params['breadcrumbs'][] = ['label' => 'Taglines', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tagline-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
