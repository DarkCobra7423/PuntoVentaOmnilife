<?php

namespace app\controllers;

use Yii;
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

    public function actionAddtocart($id) {
        //INSERT INTO `shoppingcart` (`idshoppingcart`, `fkshopping`, `fkprofile`, `fkproduct`, `quantity`, `price`) VALUES (NULL, NULL, '2', '1', '1', '30');
        
        $product = \app\models\Product::findOne($id);
        
        $add = new Shoppingcart();
        $add->fkshopping = NULL;
        $add->fkprofile = Yii::$app->globalprofileid->idprofile;
        $add->fkproduct = $product->idproduct;
        $add->quantity = "1";
        $add->price = $product->price;
        $add->save();
        
        return $this->redirect(['shoppingcart/shoppingcart']);
    }

    public function actionShoppingcart() {
        //$carritos = Carrito::find()->where(['AND', 'car_fkperfil = '.Yii::$app->profile->per_id, 'car_fkventa IS NULL'])->all();
        $carts = Shoppingcart::find()->where(['AND', 'fkprofile = ' . Yii::$app->globalprofileid->idprofile, 'fkshopping IS NULL'])->all();

        return $this->render('shoppingcart', ['carts' => $carts]);
    }

    public function actionUpdatequantity($id, $cantidad, $precio) {

        if ($cantidad <= 0) {
            Yii::$app->db->createCommand("DELETE FROM shoppingcart WHERE `fkproduct` = '" . $id . "' AND `fkprofile` = '" . Yii::$app->globalprofileid->idprofile . "'")->execute();
            return $this->redirect(['/shoppingcart/shoppingcart/']);
        } else {

            Yii::$app->db->createCommand("UPDATE shoppingcart SET `quantity`='" . $cantidad . "', `price`='" . $precio . "' WHERE `fkproduct`='" . $id . "' AND `fkprofile`='" . Yii::$app->globalprofileid->idprofile . "'")->execute();
        }
    }

    public function actionMyshopping() {

        $myshoppings = \app\models\Shopping::find()->orderBy(['datetime' => SORT_DESC])->all();
        
        $count = \app\models\Shopping::find()->select('COUNT(*) AS shipping')->one();

        return $this->render('myshopping', [
                    'myshoppings' => $myshoppings,  
                    'count' => $count->shipping,
        ]);
    }
    
    public function actionTicket($id = 2) {
        
        $carts = Shoppingcart::find()->all();
        
        return $this->render('ticket', [
            'carts' => $carts,
            'model' => Shoppingcart::findOne($id),
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
                //$model->load(Yii::$app->request->post()) && $model->save();
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
    protected function findModel($id) {
        if (($model = Shoppingcart::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

}
