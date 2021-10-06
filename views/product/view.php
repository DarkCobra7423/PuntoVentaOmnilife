<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Product */

$this->title = $model->idproduct;
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="product-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'idproduct' => $model->idproduct], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'idproduct' => $model->idproduct], [
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
            'idproduct',
            'product',
            'image',
            'description:ntext',
            'fkflavor',
            'content',
            'fkunittype',
            'stock',
            'price',
        ],
    ]) ?>

</div>
