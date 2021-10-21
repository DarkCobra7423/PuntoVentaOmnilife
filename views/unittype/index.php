<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UnittypeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Unittypes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="unittype-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Unittype', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idunittype',
            'unittype',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
