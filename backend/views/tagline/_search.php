<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\TaglineSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tagline-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'learn_online_title') ?>

    <?= $form->field($model, 'learn_online_value') ?>

    <?= $form->field($model, 'expert_teachers_title') ?>

    <?= $form->field($model, 'expert_teachers_value') ?>

    <?php // echo $form->field($model, 'best_classrooms_title') ?>

    <?php // echo $form->field($model, 'best_classrooms_value') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
