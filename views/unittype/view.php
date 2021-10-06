<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Unittype */

$this->title = $model->idunittype;
$this->params['breadcrumbs'][] = ['label' => 'Unittypes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="unittype-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'idunittype' => $model->idunittype], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'idunittype' => $model->idunittype], [
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
            'idunittype',
            'unittype',
        ],
    ]) ?>

</div>
