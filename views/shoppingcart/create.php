<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Shoppingcart */

$this->title = 'Create Shoppingcart';
$this->params['breadcrumbs'][] = ['label' => 'Shoppingcarts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shoppingcart-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
