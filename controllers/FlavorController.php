<?php

namespace app\controllers;

use app\models\Flavor;
use app\models\FlavorSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * FlavorController implements the CRUD actions for Flavor model.
 */
class FlavorController extends Controller {

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
     * Lists all Flavor models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new FlavorSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Flavor model.
     * @param int $idflavor Idflavor
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($idflavor) {
        return $this->render('view', [
                    'model' => $this->findModel($idflavor),
        ]);
    }

    /**
     * Creates a new Flavor model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new Flavor();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'idflavor' => $model->idflavor]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
                    'model' => $model,
        ]);
    }

    /**
     * Updates an existing Flavor model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $idflavor Idflavor
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($idflavor) {
        $model = $this->findModel($idflavor);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idflavor' => $model->idflavor]);
        }

        return $this->render('update', [
                    'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Flavor model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $idflavor Idflavor
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($idflavor) {
        $this->findModel($idflavor)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Flavor model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $idflavor Idflavor
     * @return Flavor the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idflavor) {
        if (($model = Flavor::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

}
