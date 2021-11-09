<?php

namespace app\controllers;

use app\models\Shoppingcart;
use app\models\ShoppingcartSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ShoppingcartController implements the CRUD actions for Shoppingcart model.
 */
class ShoppingcartController extends Controller {

    /**
     * @inheritDoc
     */
    public function behaviors() {
        return [
            'ghost-access' => [
                'class' => 'webvimark\modules\UserManagement\components\GhostAccessControl',
            ],
        ];
    }

    /**
     * Lists all Shoppingcart models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new ShoppingcartSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }
    
    public function actionMyshopping() {
        return $this->render('myshopping', [
        //            'searchModel' => $searchModel,
        //            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Shoppingcart model.
     * @param int $idshoppingcart Idshoppingcart
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($idshoppingcart) {
        return $this->render('view', [
                    'model' => $this->findModel($idshoppingcart),
        ]);
    }

    /**
     * Creates a new Shoppingcart model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new Shoppingcart();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'idshoppingcart' => $model->idshoppingcart]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
                    'model' => $model,
        ]);
    }

    /**
     * Updates an existing Shoppingcart model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $idshoppingcart Idshoppingcart
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($idshoppingcart) {
        $model = $this->findModel($idshoppingcart);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idshoppingcart' => $model->idshoppingcart]);
        }

        return $this->render('update', [
                    'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Shoppingcart model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $idshoppingcart Idshoppingcart
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($idshoppingcart) {
        $this->findModel($idshoppingcart)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Shoppingcart model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $idshoppingcart Idshoppingcart
     * @return Shoppingcart the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idshoppingcart) {
        if (($model = Shoppingcart::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

}
