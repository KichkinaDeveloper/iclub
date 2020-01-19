<?php

namespace frontend\controllers;

class WebinarController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
