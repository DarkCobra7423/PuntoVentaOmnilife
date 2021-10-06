<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Flavor */

$this->title = 'Update Flavor: ' . $model->idflavor;
$this->params['breadcrumbs'][] = ['label' => 'Flavors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idflavor, 'url' => ['view', 'idflavor' => $model->idflavor]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="flavor-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
