<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
// use mihaildev\ckeditor\CKEditor;
// use mihaildev\elfinder\ElFinder;

/* @var $this yii\web\View */
/* @var $model common\models\Features */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="features-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'short_desc')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
