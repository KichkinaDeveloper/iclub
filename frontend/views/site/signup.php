<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use frontend\assets\SignAsset;

SignAsset::register($this);
$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="login">
    <div class="modal-dialog login animated">
        <div class="modal-content">
            <h4 class="modal-title" style="text-align:center; background:rgb(35, 86, 255);color:white; font-weight:bold; width:100%; padding:0;
          margin:0;line-height:50px">Regstratsiya</h4>
            <div class="modal-header">
            </div>
            <div class="modal-body">
                <div class="box">
                    <div class="content">
                        <div class="social">
                            <a id="google_login" class="circle google" href="#">
                                <i class="fa fa-google fa-fw"></i>
                            </a>
                            <a id="facebook_login" class="circle facebook" href="#">
                                <i class="fa fa-facebook fa-fw"></i>
                            </a>
                        </div>
                        <div class="division">
                            <div class="line l"></div>
                            <span>yoki</span>
                            <div class="line r"></div>
                        </div>
                        <div class="error"></div>
                    </div>
                </div>
                <div class="box">
                    <div class="content registerBox">
                        <div class="form">
                            <?php $form = ActiveForm::begin(['id' => 'login-forma']); ?>

                            <?= $form->field($model, 'username')->textInput([
                                'autofocus' => true,
                                'class' => 'form-control',
                                'placeholder' => 'Username',
                            ]) ?>

                            <?= $form->field($model, 'email')->textInput([
                                'autofocus' => true,
                                'class' => 'form-control',
                                'placeholder' => 'E-mail',
                            ]) ?>

                            <?= $form->field($model, 'password')->passwordInput([
                                'class' => 'form-control',
                                'placeholder' => 'Password',
                            ]) ?>

                            <?= $form->field($model, 'repassword')->passwordInput([
                                'class' => 'form-control',
                                'placeholder' => 'Repassword',
                            ]) ?>

                            <?= $form->field($model, 'avatar')->fileInput()?>

                            <?= Html::submitButton('Signup', ['class' => 'btn-default btn-register', 'name' => 'signup-button']) ?>
                            <?php ActiveForm::end(); ?>

                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="forgot login-footer">
                </div>
                <div class="forgot register-footer" style="display:none">
                    <span>Already have an account?</span>
                    <a href="site/login">Login</a>
                </div>
            </div>
        </div>
    </div>
</div>