<?php

namespace app\controllers;

use app\models\Unittype;
use app\models\UnittypeSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * UnittypeController implements the CRUD actions for Unittype model.
 */
class UnittypeController extends Controller {

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
     * Lists all Unittype models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new UnittypeSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Unittype model.
     * @param int $idunittype Idunittype
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($idunittype) {
        return $this->render('view', [
                    'model' => $this->findModel($idunittype),
        ]);
    }

    /**
     * Creates a new Unittype model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new Unittype();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'idunittype' => $model->idunittype]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
                    'model' => $model,
        ]);
    }

    /**
     * Updates an existing Unittype model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $idunittype Idunittype
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($idunittype) {
        $model = $this->findModel($idunittype);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idunittype' => $model->idunittype]);
        }

        return $this->render('update', [
                    'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Unittype model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $idunittype Idunittype
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($idunittype) {
        $this->findModel($idunittype)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Unittype model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $idunittype Idunittype
     * @return Unittype the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idunittype) {
        if (($model = Unittype::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

}
