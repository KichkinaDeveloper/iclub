<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\TeachersSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="teachers-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'ismi') ?>

    <?= $form->field($model, 'fannomi') ?>

    <?= $form->field($model, 'short_desc') ?>

    <?= $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'telegrammanzili') ?>

    <?php // echo $form->field($model, 'facebookmanzili') ?>

    <?php // echo $form->field($model, 'okmanzili') ?>

    <?php // echo $form->field($model, 'gmailmanzili') ?>

    <?php // echo $form->field($model, 'image') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
