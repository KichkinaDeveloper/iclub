<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use frontend\assets\BlankAsset;
use yii\helpers\Url;

BlankAsset::register($this);
$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box">
    <div class="shadow-box" style="opacity: 1; z-index: 2147483647;">
        <div class="form-box container-fluid">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
            <div class="heading" style="border:none">
                <h5 class="card-header text-center py-4 w-100 m-0 p-0" style="background:white; border-top:none">
                    <strong>Login</strong>
                </h5>
            </div>
            <div class="bi-box in1">
                <div class="icon-face"></div>
                <p>Facebook orqali kirish</p>
            </div>
            <div class="bi-box in2">
                <div class="icon-face"></div>
                <p>Google orqali kirish</p>
            </div>
            <div class="bi-box in3">
                <div class="icon-face"> <i class="fa fa-envelope"></i> </div>
                <?= $form->field($model, 'username')->label(false)->textInput([
                    'autofocus' => true,
                    'placeholder' => 'Username',
                ]) ?>
            </div>
            <div class="bi-box in4">
                <div class="icon-face"> <i class="fa fa-lock"></i> </div>
                <?= $form->field($model, 'password')->label(false)->passwordInput([
                    'placeholder' => 'Password'
                ]) ?>
            </div>
            <div class="bi-box in5">
                <button type="submit">Kirish</button>
            </div>
            <div class="bi-box in7">
                <p>Ro'yhatdan o'tmaganmisiz? </p> <a href="<?= Url::to(['site/signup'])?>">SignUp</a>
            </div>
            <?= yii\authclient\widgets\AuthChoice::widget([
                'baseAuthUrl' => ['site/auth'],
                'popupMode' => false,
            ]) ?>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>