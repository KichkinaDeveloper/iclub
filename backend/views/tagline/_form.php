<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Tagline */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tagline-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'learn_online_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'learn_online_value')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'expert_teachers_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'expert_teachers_value')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'best_classrooms_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'best_classrooms_value')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
