<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\BizkursvapastiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bizkursvapasti-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'bizningkurs') ?>

    <?= $form->field($model, 'bizkurs_description') ?>

    <?= $form->field($model, 'yangikurs') ?>

    <?= $form->field($model, 'yangikurs_description') ?>

    <?php // echo $form->field($model, 'oqituvchi') ?>

    <?php // echo $form->field($model, 'oqituvchi_description') ?>

    <?php // echo $form->field($model, 'aloqa') ?>

    <?php // echo $form->field($model, 'manzil') ?>

    <?php // echo $form->field($model, 'telefon') ?>

    <?php // echo $form->field($model, 'website') ?>

    <?php // echo $form->field($model, 'footeroxiri') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
