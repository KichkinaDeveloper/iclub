<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use common\widgets\cropper\CropperWidget;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use frontend\assets\SignAsset;
use yii\helpers\Url;

SignAsset::register($this);
$this->title = 'Account';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="login">
    <div class="modal-dialog login animated">
        <div class="modal-content">
            <h4 class="modal-title" style="text-align:center; background:rgb(35, 86, 255);color:white; font-weight:bold; width:100%; padding:0;
          margin:0;line-height:50px">Account</h4>
            <div class="modal-header">
            </div>
            <div class="modal-body">

                <div class="box">
                    <div class="content registerBox">
                        <div class="form">
                            <?php $form = ActiveForm::begin(['id' => 'login-forma',
                            'options' => [
                                'enctype' => 'multipart/form-data'
                            ]
                            ]); ?>

                            <?= $form->field($accountForm, 'username')->textInput([
                                // 'autofocus' => true,
                                'disabled' => true,
                                'class' => 'form-control',
                                'placeholder' => 'Username',
                            ]) ?>
                            <?= $form->field($accountForm, 'fullname')->textInput([
                                'class' => 'form-control',
                                'placeholder' => 'Username',
                            ]) ?>

                            <?= $form->field($accountForm, 'old_password')->passwordInput([
                                'class' => 'form-control',
                                'placeholder' => 'Password',
                            ]) ?>

                            <?= $form->field($accountForm, 'password')->passwordInput([
                                'class' => 'form-control',
                                'placeholder' => 'Repassword',
                            ]) ?>

                            <?= $form->field($accountForm, 'confirm_password')->passwordInput([
                                'class' => 'form-control',
                                'placeholder' => 'old password',
                            ]) ?>

                            <?= $form->field($accountForm, 'avatar')->widget(CropperWidget::className(), [
                                'uploadUrl' => Url::toRoute('/avatar/upload-photo'),
                                'prefixUrl' => Yii::getAlias('@frontend/avatar/'),
                                'width' => 595,
                                'height' => 842,
                            ]) ?>

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
                    <a href="site/index">Saqlash</a>
                </div>
                <h5><strong>Avatar</strong></h5>
            <?= Html::img(Yii::getAlias("@frontend/avatar") . $accountForm->avatar) ?>

            </div>
        </div>
    </div>
</div>