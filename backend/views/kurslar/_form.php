<?php

use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Kurslar */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kurslar-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'summa')->textInput() ?>

    <?= $form->field($model, 'place')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'student_soni')->textInput() ?>

    <?= $form->field($model, 'start_day')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'short_desc')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'description')->widget(CKEditor::className(), [
        'editorOptions' => ElFinder::ckeditorOptions('elfinder',
            ['options' => ['rows' => 6]]),
    ]); ?>
    <?= $form->field($model, 'status')->dropDownList([
        0 => 'no popular',
        1 => 'popular',
    ]) ?>

    <?= $form->field($model, 'image')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
