<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Fact */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fact-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kitoblar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'talabalar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tajriba')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'oqutuvchilar')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
