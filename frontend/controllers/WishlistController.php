<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Wishlist;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * WishlistController implements the CRUD actions for Wishlist model.
 */
class WishlistController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
        'verbs' => [
            'class' => VerbFilter::className(),
            'actions' => [
                'logout' => ['post'],
                'delete' => ['POST'],
            ],
        ],
    ];
    }
    
    /**
     * Lists all Wishlist models.
     * @return mixed
     */
    public function actionIndex()
    {
        $user_id = Yii::$app->user->identity->id;
        $command = Yii::$app->db->createCommand("SELECT kurslar.id as k_id,
        kurslar.title as k_title, kurslar.image as image, kurslar.summa as summa, 
        kurslar.short_desc as shortdesc FROM `wishlist` 
        JOIN kurslar on wishlist.pro_id = kurslar.id WHERE wishlist.user_id = $user_id");
            $result= $command->queryAll();
        
        return $this->render('index', [
            'result' => $result
        ]);
    }

    /**
     * Displays a single Wishlist model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Wishlist model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionAdd($id)
    {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

        $user_id = Yii::$app->user->identity->id;
        
        $model = Wishlist::find()->where(['user_id' => $user_id])
        ->andWhere(['pro_id' => $id])->one();
        $added = false;
        if($model){
            $model->delete();
        }
        else {
            $model = new Wishlist();
            $model->user_id = $user_id;
            $model->pro_id = $id;
            $model->data_create = date("Y-m-d");
            $model->status = 1;
            $model->save();
            $added = true;  
        }
        
        $count = 0;
        if(!Yii::$app->user->isGuest) {
            $count = Wishlist::find()->where(['user_id' => $user_id])->count();
        }
        
        return ['count' => $count, 'added' => $added];
    }
}
