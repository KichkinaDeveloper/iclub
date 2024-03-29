<?php
namespace frontend\controllers;

use common\models\News;
use yii\web\Controller;
use yii\data\Pagination;

class NewsController extends Controller{

    public function actionIndex(){
        
        $this->layout = "main1";
        $model = new News();
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

        $model = News::find()->where(['id' => $id])->all();
        
        return $this->render('view',[
        'model' => $model,
        ]);
    }
    public function actionNext($id){

        $more = News::find()->where(['>', 'id', $id])->limit(1)->all();

        return $this->render('view',[
            'model' => $more,
            ]);
    }
    public function actionPrev($id){

        $more = News::find()->where(['<', 'id', $id])->limit(1)->all();

        return $this->render('view',[
            'model' => $more,
            ]);
    }
    public function actionChat(){
        
        return $this->render('chat');
    }
}
?>