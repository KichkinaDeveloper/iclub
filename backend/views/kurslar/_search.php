<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\KurslarSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kurslar-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'summa') ?>

    <?= $form->field($model, 'place') ?>

    <?= $form->field($model, 'student_soni') ?>

    <?php // echo $form->field($model, 'start_day') ?>

    <?php // echo $form->field($model, 'short_desc') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'date') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'image') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
