<?php

use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Teachers */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="teachers-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'ismi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fannomi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'short_desc')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'description')->widget(CKEditor::className(), [
        'editorOptions' => ElFinder::ckeditorOptions('elfinder',
            ['options' => ['rows' => 6]]),
    ]); ?>

    <?= $form->field($model, 'telegrammanzili')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'facebookmanzili')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'okmanzili')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gmailmanzili')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
