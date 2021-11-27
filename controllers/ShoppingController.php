<?php

namespace app\controllers;

class ShoppingController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
