<?php
namespace frontend\controllers;

use common\models\Features;
use yii\base\Controller;

class FeaturesController extends Controller{

    public function actionIndex(){
        
        $model = new Features();
        $model = $model->find()->limit(6)->all();
        // echo "<pre>";
        // print_r($model);
        // die;

        return $this->render('index',[
            'model' => $model
        ]);
    }

    public function actionView($id){

        // $id = 2 ;
        $model = Features::find()->where(['id' => $id])->all();

        // echo "<pre>";
        // print_r($model);
        // die;

        return $this->render('view',[
            'model' => $model
        ]);
    }
}
?>