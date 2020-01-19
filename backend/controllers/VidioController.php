<?php

namespace backend\controllers;

use common\models\Teachers;
use Yii;
use common\models\Vidio;
use common\models\VidioSearch;
use yii\filters\AccessControl;
use yii\helpers\Url;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * VidioController implements the CRUD actions for Vidio model.
 */
class VidioController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['view', 'index', 'create', 'update', 'delete'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Vidio models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new VidioSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Vidio model.
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
     * Creates a new Vidio model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Vidio();

        if ($model->load(Yii::$app->request->post())) {

            $imageFile = UploadedFile::getInstance($model, 'videoname');
            if (isset($imageFile->size)){
                $filename = floor(microtime(true) * 10000);
                $imageFile->saveAs(Url::to('@frontend/web/videolar/').$filename.$imageFile->baseName.'.'.$imageFile->extension);
            }
            $model->videoname = $filename.$imageFile->baseName.'.'.$imageFile->extension;
            $model->save(false);

            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Vidio model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {

            $imageFile = UploadedFile::getInstance($model, 'videoname');

            foreach (Vidio::find()->where(['id' => $id])->all() as $gg) {
                if (file_exists(Url::to('@frontend/web/videolar/').$gg->videoname)) {
                    unlink(Url::to('@frontend/web/videolar/') . $gg->videoname);
                }
            }

            if (isset($imageFile->size)){
                $filename = floor(microtime(true) * 10000);
                $imageFile->saveAs(Url::to('@frontend/web/videolar/').$filename.$imageFile->baseName.'.'.$imageFile->extension);
            }
            $model->videoname = $filename.$imageFile->baseName.'.'.$imageFile->extension;
            $model->save(false);

            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Vidio model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);

        if (file_exists(Url::to('@frontend/web/videolar/').$model->videoname)){
            unlink(Url::to('@frontend/web/videolar/').$model->videoname);
        }

        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Vidio model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Vidio the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Vidio::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
