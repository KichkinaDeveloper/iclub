<?php

namespace frontend\controllers;

use common\models\News;
use Yii;
use common\models\Kurslar;
use common\models\KurslarSearch;
use common\models\Raiting;
use Exception;
use yii\data\Pagination;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * KurslarController implements the CRUD actions for Kurslar model.
 */
class KurslarController extends Controller
{

    /**
     * Lists all Kurslar models.
     * @return mixed
     */
    public function actionIndex()
    {
        $model = new Kurslar();
        $model = $model->find()->limit(6);
        
        $pagination = new Pagination([
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

        $searchModel = new KurslarSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionView($id)
    {
        $model = Kurslar::find()->where(['id' => $id])->one();

        return $this->render('view',[
            'model' => $model,
        ]);
    }

    public function actionNext($id){

        $more = Kurslar::find()->where(['>', 'id', $id])->limit(1)->all();

        return $this->render('view',[
            'model' => $more,
        ]);
    }
    public function actionPrev($id){

        $more = Kurslar::find()->where(['<', 'id', $id])->limit(1)->all();

        return $this->render('view',[
            'model' => $more,
        ]);
    }

    public function actionRaiting($value, $id){
        
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

        $user_id = Yii::$app->user->identity->id;

        $models = Raiting::find()->where(['user_id' => Yii::$app->user->identity->id])
        ->andWhere(['pro_id' => $id])->one();
        if($models){
            $models->user_id = $user_id;
            $models->pro_id = $id;
            $models->data_create = date("Y-m-d");
            $models->raiting = $value;
            $models->save();

        }
        else{
                $model = new Raiting();
                $model->user_id = $user_id;
                $model->pro_id = $id;
                $model->data_create = date("Y-m-d");
                $model->raiting = $value;
                $model->save();
        }
        return ['value' => $value, 'id' => $id];
    }
}
