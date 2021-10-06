<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Shoppingcart */

$this->title = 'Update Shoppingcart: ' . $model->idshoppingcart;
$this->params['breadcrumbs'][] = ['label' => 'Shoppingcarts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idshoppingcart, 'url' => ['view', 'idshoppingcart' => $model->idshoppingcart]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="shoppingcart-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
