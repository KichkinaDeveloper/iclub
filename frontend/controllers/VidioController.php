<?php

namespace frontend\controllers;

use common\models\VideoActive;
use common\models\Vidio;
use yii\data\Pagination;

class VidioController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $model = new Vidio();
        $modelvideo = VideoActive::find()->all();
        $model = $model->find()->where(['kurslar_id' => $_GET['kurs_id']])->limit(6);

        $pagination = new Pagination([
            'defaultPageSize' => 6,
            'totalCount' => $model->count()
        ]);

        $model->limit($pagination->limit);
        $model->offset($pagination->offset);

        return $this->render('index',[
            'mores' => $modelvideo,
            'model' => $model->all(),
            'pagination' => $pagination
        ]);
    }

    public function actionView($id)
    {
        $model = Vidio::find()->where(['id' => $id])->all();

        return $this->render('view',[
            'model' => $model,
        ]);
    }

    public function actionNext($id){

        $more = Vidio::find()->where(['>', 'id', $id])->limit(1)->all();

        return $this->render('view',[
            'model' => $more,
        ]);
    }

    public function actionPrev($id){

        $more = Vidio::find()->where(['<', 'id', $id])->limit(1)->all();

        return $this->render('view',[
            'model' => $more,
        ]);
    }

}
