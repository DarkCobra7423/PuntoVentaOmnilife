<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ShippingaddressSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Shippingaddresses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shippingaddress-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Shippingaddress', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idshippingaddress',
            'idprofile',
            'namelastname',
            'postalcode',
            'state',
            //'municipalitymayoralty',
            //'suburb',
            //'street',
            //'outdoornumber',
            //'interiornumber',
            //'typeaddress',
            //'telephonecontact',
            //'indications:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
