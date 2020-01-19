<?php


namespace frontend\services;

use common\models\User;
use frontend\models\AccountForm;
use http\Exception\RuntimeException;
use Yii;

class UserSettings {

    public function settings(AccountForm $form)
    {
        $admin = User::findOne(Yii::$app->user->identity->id);
        $admin->fullname = $form->fullname;
        $admin->username = $form->username;
        $admin->password_hash = Yii::$app->security->generatePasswordHash($form->password);

        if (!$admin->save()) {
            throw new RuntimeException('Error while saving admin data');
        }
    }
}