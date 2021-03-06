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
        <?= Html::a('Actualizar', ['update', 'id' => $model->idproduct], ['class' => 'btn btn-primary']) ?>
        <?=
        Html::a('Eliminar', ['delete', 'id' => $model->idproduct], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ])
        ?>
    </p>

    <?=
    DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idproduct',
            'product',
            //'image'
            /* ['attribute' => 'imagen',
              'format' => 'raw'], */
                ['attribute' => 'imagen',
                'format' => 'raw',
                'value' => function($model) {
                    return Html::img($model->imagen);
                }
            ],
            'description:ntext',
            'fkflavor',
            'content',
            'fkunittype',
            'stock',
            'price',
        ],
    ])
    ?>

</div>
