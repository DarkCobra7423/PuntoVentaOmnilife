<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Shippingaddress */

$this->title = $model->idshippingaddress;
$this->params['breadcrumbs'][] = ['label' => 'Shippingaddresses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="shippingaddress-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'idshippingaddress' => $model->idshippingaddress], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'idshippingaddress' => $model->idshippingaddress], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idshippingaddress',
            'idprofile',
            'namelastname',
            'postalcode',
            'state',
            'municipalitymayoralty',
            'suburb',
            'street',
            'outdoornumber',
            'interiornumber',
            'typeaddress',
            'telephonecontact',
            'indications:ntext',
        ],
    ]) ?>

</div>
