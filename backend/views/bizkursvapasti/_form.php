<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Bizkursvapasti */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bizkursvapasti-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'bizningkurs')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bizkurs_description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'yangikurs')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'yangikurs_description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'oqituvchi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'oqituvchi_description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'aloqa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'manzil')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telefon')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'website')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'footeroxiri')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
