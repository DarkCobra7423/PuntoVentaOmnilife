<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Shopping */

$this->title = $model->idshopping;
$this->params['breadcrumbs'][] = ['label' => 'Shoppings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="shopping-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'idshopping' => $model->idshopping], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'idshopping' => $model->idshopping], [
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
            'idshopping',
            'datetime',
            'fkprofileseller',
            'ticket',
        ],
    ]) ?>

</div>
