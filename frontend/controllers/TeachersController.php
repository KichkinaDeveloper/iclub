<?php

namespace frontend\controllers;

use common\models\News;
use common\models\Teachers;
use yii\data\Pagination;

class TeachersController extends \yii\web\Controller
{

    public function actionIndex(){

        $model = new Teachers();
        $model = $model->find()->limit(6);
        // echo "<pre>";
        // print_r($model);
        // die;

        $pagination = new Pagination ([
            'defaultPageSize' => 4,
            'totalCount' => $model->count()
        ]);

        $model->limit($pagination->limit);

        $model->offset($pagination->offset);

        return $this->render('index',[
            'model' => $model->all(),
            'pagination' => $pagination
        ]);

        return $this->render('index',[
            'model' => $model
        ]);
    }

    public function actionView($id){

        $model = Teachers::find()->where(['id' => $id])->all();

        return $this->render('view',[
            'model' => $model,
        ]);
    }
    public function actionNext($id){

        $more = Teachers::find()->where(['>', 'id', $id])->limit(1)->all();

        return $this->render('view',[
            'model' => $more,
        ]);
    }
    public function actionPrev($id){

        $more = Teachers::find()->where(['<', 'id', $id])->limit(1)->all();

        return $this->render('view',[
            'model' => $more,
        ]);
    }

}
