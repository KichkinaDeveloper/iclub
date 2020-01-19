<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\rating\StarRating;

/* @var $this yii\web\View */
/* @var $model common\models\Raiting */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="raiting-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'pro_id')->textInput() ?>

    <?= $form->field($model, 'data_create')->textInput() ?>

    <?= $form->field($model, 'raiting')->widget(StarRating::classname(), [
    'pluginOptions' => ['size'=>'lg']
    ]);?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    <?= StarRating::widget([
    'name' => 'raiting',
    'pluginOptions' => ['disabled'=>true, 'showClear'=>false]

]);?>
</div>
