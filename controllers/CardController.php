<?php

namespace app\controllers;

use Yii;
use app\models\Card;
use app\models\CardSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CardController implements the CRUD actions for Card model.
 */
class CardController extends Controller {

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
     * Lists all Card models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new CardSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    public function actionPayment($id = 1) {
        //SELECT * FROM `shippingaddress` WHERE `idprofile` = 2 LIMIT 1;
        //SELECT SUM(price) AS price FROM `shoppingcart` WHERE (fkprofile = 2) AND (fkshopping IS NULL) 
        $model = \app\models\Shoppingcart::find()->select('SUM(price) AS price')->where(['AND', 'fkprofile = ' . Yii::$app->globalprofileid->idprofile, 'fkshopping IS NULL'])->one();
        $cards = Card::find()->all();

        return $this->render('payment', [
                    'model' => $model,
                    'address' => \app\models\Shippingaddress::find()->where(['idprofile' => Yii::$app->globalprofileid->idprofile])->limit(1)->one(),
                    'cards' => $cards,
        ]);
    }
    
    public function actionPayment1($id) {
        //SELECT * FROM `shippingaddress` WHERE `idprofile` = 2 LIMIT 1;

        $cards = Card::find()->all();

        return $this->render('payment1', [
                    'model' => \app\models\Product::findOne($id),
                    'address' => \app\models\Shippingaddress::find()->where(['idprofile' => Yii::$app->globalprofileid->idprofile])->limit(1)->one(),
                    'cards' => $cards,
        ]);
    }

    public function actionUpdatecard() {

        $cards = Card::find()->all();

        foreach ($cards as $card):
            echo '<li class="badge-type-selection__list-item ui-list__item">
                            <div>
                                <label class="ui-radio__label ">
                                    <div class="ui-radio-element">
                                        <input type="radio" data-js="payment-type" name="paymentType" class="ui-radio__input" value="DEBIT_CARD" required="" aria-invalid="false">
                                        <div class="ui-radio__background">
                                            <div class="ui-radio__outer-circle"></div>
                                            <div class="ui-radio__inner-circle"></div>
                                        </div>
                                        <input data-js="payment-type-id" type="hidden" name="paymentMethodId" value="debvisa">
                                        <input data-js="payment-type-card-id" type="hidden" name="cardId" value="' . $card->cardnumber . '">
                                    </div>
                                    <div class="ui-radio__text">
                                        <span class="ui-badge ui-badge--small">
                                            <span class="ui-badge__icon ui-badge__icon--payment-logo">
                                                <i class="payment-icon payments-cho_badge _debvisa-cho_badge"></i>
                                            </span>
                                        </span>
                                        <div class="badge-type__metadata">
                                            <h2 class="badge-type-selection__list-title" aria-label="Bancomer terminada en 1382">' . $card->getBank() . ' Débito <span id="idCardnumber' . $card->idcard
            ?>"><?=
            $card->cardnumber . '</span><span id="idCardnumber1' . $card->idcard . '"></span></h2>                                        
                                        </div>
                                        <input value="'. $card->idcard .'" name="idCard" hidden=""/>
                                            <input value="'. $card->getBank() .'" name="idBank" hidden=""/>
                                    </div>
                                </label>
                            </div>
                        </li>';
        endforeach;
        exit();
    }

    public function actionNewcard() {
        
        //if (!isset($_POST["cardNumber"]) || !isset($_POST["cardName"]) || !isset($_POST["cardMonth"]) || !isset($_POST["cardCvv"]) || !isset($_POST["cardBank"]))
            //exit();
            print_r($_POST); 
            echo 'aqui es';
            die();
        if ($_POST) {
            echo 'valor en true';
            $cardNumber = $_POST['cardNumber'];
            $cardName = $_POST['cardName'];
            $cardMonth = $_POST['cardMonth'];
            $cardCvv = $_POST['cardCvv'];
            $cardBank = $_POST['cardBank'];

            $model = new Card();

            $model->fkprofile = Yii::$app->globalprofileid->idprofile;
            $model->fkbank = $cardBank;
            $model->cardnumber = $cardNumber;
            $model->expirationdate = $cardMonth;
            $model->securitycode = $cardCvv;
            $model->namelastname = $cardName;
            $model->type = "Debito";
            //$model->save(false);

            /*
            if ($model->save()) {
                echo '<br><br>se guardo';
            } else {
                echo "<br><br>MODEL NOT SAVED";
                print_r($model->getAttributes());
                print_r($model->getErrors());
                exit;
            }*/
        }else{
            echo 'valor en false';
        }
    }

    /*
      public function actionNewcard() {
      $model = new Card();

      if (Yii::$app->request->post()) {

      $model->fkprofile = Yii::$app->globalprofileid->idprofile;
      $model->fkbank = Yii::$app->request->post('cardBank');
      $model->cardnumber = Yii::$app->request->post('cardnumber');
      $model->expirationdate = Yii::$app->request->post('cardMonth') . "/" . Yii::$app->request->post('cardYear');
      $model->securitycode = Yii::$app->request->post('cardCVV');
      $model->namelastname = Yii::$app->request->post('cardName');
      $model->type = "Debito";
      $model->save();
      /*
      print_r($model);
      echo '<br><br>';

      if ($model->save()) {
      echo '<br><br>se guardo';
      } else {
      echo "<br><br>MODEL NOT SAVED";
      print_r($model->getAttributes());
      print_r($model->getErrors());
      exit;
      } *

      //return $this->redirect(['view', 'id' => $model->pag_id]);


      //return false;
      }
     */

    /**
     * Displays a single Card model.
     * @param int $idcard Idcard
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($idcard),
        ]);
    }

    /**
     * Creates a new Card model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new Card();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'idcard' => $model->idcard]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
                    'model' => $model,
        ]);
    }

    /**
     * Updates an existing Card model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $idcard Idcard
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($idcard) {
        $model = $this->findModel($idcard);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idcard' => $model->idcard]);
        }

        return $this->render('update', [
                    'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Card model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $idcard Idcard
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($idcard) {
        $this->findModel($idcard)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Card model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $idcard Idcard
     * @return Card the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idcard) {
        if (($model = Card::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

}

/*
////////////////////////////////////////////////////////////////
if (!isset($_POST["cardNumber"]) || !isset($_POST["cardName"]) || !isset($_POST["cardMonth"]) || !isset($_POST["cardCvv"]) || !isset($_POST["cardBank"])) {
    exit();
}
if ($_POST) {
    $cardNumber = $_POST['cardNumber'];
    $cardName = $_POST['cardName'];
    $cardMonth = $_POST['cardMonth'];
    $cardCvv = $_POST['cardCvv'];
    $cardBank = $_POST['cardBank'];

    $model = new Card();

    $model->fkprofile = Yii::$app->globalprofileid->idprofile;
    $model->fkbank = $cardBank;
    $model->cardnumber = $cardNumber;
    $model->expirationdate = $cardMonth;
    $model->securitycode = $cardCvv;
    $model->namelastname = $cardName;
    $model->type = "Debito";
    $model->save();
}

///////////////////////////////////////////////////////////////
*/