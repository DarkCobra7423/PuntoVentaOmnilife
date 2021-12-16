<?php

namespace app\controllers;

use app\models\Shopping;

class ShoppingController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    
    public function actionState($id, $state){
        
        $model = Shopping::findOne($id);                
        $model->shipping = $state;
        
        if($model->save()){
            //echo 'Funciona';
        }    
    }
}
