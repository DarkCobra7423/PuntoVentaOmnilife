<?php

namespace app\controllers;

use Yii;
use app\models\Product;
use app\models\ProductSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;




/**
 * ProductController implements the CRUD actions for Product model.
 */
class ProductController extends Controller {

    public $freeAccessActions = ['seeproduct'];
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
     * Lists all Product models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new ProductSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }
    
    public function actionProducts($id){
        
        if($id == 'generaly'){    
        $products = Product::find()->all();    
        }else{
        $products = Product::find()->where(['fkunittype' => $id])->all();   
        }
        
        return $this->render('products', ['products' => $products]);
    }

        public function actionDashboard() {
        return $this->render('dashboard', [
                    //'model' => $this->findModel($id),
        ]);
    }
    
    public function actionSeeproduct($id) {
        
        if(Yii::$app->user->isGuest){
            $addresss = [];
        }else{
            $addresss = \app\models\Shippingaddress::find()->where(['idprofile' => Yii::$app->globalprofileid->idprofile])->all();
        }
        
        
        
        return $this->render('seeproduct', [
                    'model' => $this->findModel($id),
                    'addresss' => $addresss,
        ]);
    }
    
    public function actionSearch($value) {
      //SELECT * FROM `product` WHERE `product` LIKE '%Cafezzino%'
        $searchs = Product::find()->andWhere(['LIKE', 'product', $value])->all();
        
        foreach ($searchs as $search):
        echo '<div id="card1">
                <a href="'. Yii::$app->homeUrl .'product/seeproduct/'. $search->idproduct .'" style="text-decoration: none; color: #212529;">
                    <div class="card" style="width: 14rem;">
                        <img class="card-img-top" src="'. $search->imagen .'" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">$ '. $search->price .'.00 <span class="unittype">'. $search->unittype .'</span></h5>
                            <p class="card-text">'. $search->product .'</p>    
                        </div>
                    </div>
                </a>
            </div>';
        endforeach;
       
        //return print_r($searchs);
    }

    /**
     * Displays a single Product model.
     * @param int $id Idproduct
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Product model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */

       public function actionCreate() {
        $model = new Product();
        if ($model->load(Yii::$app->request->post())) {
            $images = \yii\web\UploadedFile::getInstance($model, 'images');
            if (!is_null($images)) {
                $name = explode(".", $images->name);
                $ext = end($name);
                $model->image = Yii::$app->security->generateRandomString() . ".{$ext}";
                $carpetaProducts = Yii::$app->basePath . '/web/resources/images/products/';
                $path = $carpetaProducts . $model->image;
                if ($images->saveAs($path)) {
                    if ($model->save()) {
                        return $this->redirect(['view', 'id' => $model->idproduct]);
                    }
                }
            }
        }
        

        return $this->render('create', [
                    'model' => $model,
        ]);
    } 

    /**
     * Updates an existing Product model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id Idproduct
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);

        /*if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->idproduct]);
        }*/
           if ($model->load(Yii::$app->request->post())) {
            $images = \yii\web\UploadedFile::getInstance($model, 'images');
            if (!is_null($images)) {
                $name = explode(".", $images->name);
                $ext = end($name);
                $model->image = Yii::$app->security->generateRandomString() . ".{$ext}";
                $carpetaProducts = Yii::$app->basePath . '/web/resources/images/products/';
                $path = $carpetaProducts . $model->image;
                if ($images->saveAs($path)) {
                    if ($model->save()) {
                        return $this->redirect(['view', 'id' => $model->idproduct]);
                    }
                }
            }
        }

        return $this->render('update', [
                    'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Product model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id Idproduct
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Product model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id Idproduct
     * @return Product the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = Product::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

}
