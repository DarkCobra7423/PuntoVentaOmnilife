<?php

namespace app\controllers;

use app\models\Shopping;
use app\models\ShoppingSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ShoppingController implements the CRUD actions for Shopping model.
 */
class ShoppingController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Shopping models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ShoppingSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Shopping model.
     * @param int $idshopping Idshopping
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($idshopping)
    {
        return $this->render('view', [
            'model' => $this->findModel($idshopping),
        ]);
    }

    /**
     * Creates a new Shopping model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Shopping();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'idshopping' => $model->idshopping]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Shopping model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $idshopping Idshopping
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($idshopping)
    {
        $model = $this->findModel($idshopping);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idshopping' => $model->idshopping]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Shopping model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $idshopping Idshopping
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($idshopping)
    {
        $this->findModel($idshopping)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Shopping model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $idshopping Idshopping
     * @return Shopping the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idshopping)
    {
        if (($model = Shopping::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
