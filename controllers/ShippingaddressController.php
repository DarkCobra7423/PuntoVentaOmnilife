<?php

namespace app\controllers;

use app\models\Shippingaddress;
use app\models\ShippingaddressSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ShippingaddressController implements the CRUD actions for Shippingaddress model.
 */
class ShippingaddressController extends Controller
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
     * Lists all Shippingaddress models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ShippingaddressSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Shippingaddress model.
     * @param int $idshippingaddress Idshippingaddress
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($idshippingaddress)
    {
        return $this->render('view', [
            'model' => $this->findModel($idshippingaddress),
        ]);
    }

    /**
     * Creates a new Shippingaddress model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Shippingaddress();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'idshippingaddress' => $model->idshippingaddress]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Shippingaddress model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $idshippingaddress Idshippingaddress
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($idshippingaddress)
    {
        $model = $this->findModel($idshippingaddress);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idshippingaddress' => $model->idshippingaddress]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Shippingaddress model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $idshippingaddress Idshippingaddress
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($idshippingaddress)
    {
        $this->findModel($idshippingaddress)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Shippingaddress model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $idshippingaddress Idshippingaddress
     * @return Shippingaddress the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idshippingaddress)
    {
        if (($model = Shippingaddress::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
