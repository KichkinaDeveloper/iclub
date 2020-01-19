<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Vidio */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vidio-form">

    <?php $form = ActiveForm::begin([
        'options' => [
            'enctype' => 'multipart/form-data',
            'class' => 'md-form',
        ],
    ]); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'videoname')->fileInput(['multiple' => true, 'class' => 'btn btn-success'])->label("Attachment"); ?>

    <?= $form->field($model, 'status')->dropdownList([
        0 => 'no active',
        1 => 'active',
    ]) ?>

    <?= $form->field($model, 'kurslar_id')->dropdownList(
        \yii\helpers\ArrayHelper::map(\common\models\Kurslar::find()->all(), 'id', 'title')
    ) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
