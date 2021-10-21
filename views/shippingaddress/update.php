<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Shippingaddress */

$this->title = 'Update Shippingaddress: ' . $model->idshippingaddress;
$this->params['breadcrumbs'][] = ['label' => 'Shippingaddresses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idshippingaddress, 'url' => ['view', 'idshippingaddress' => $model->idshippingaddress]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="shippingaddress-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
