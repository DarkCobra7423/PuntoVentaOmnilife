<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ShoppingcartSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="shoppingcart-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idshoppingcart') ?>

    <?= $form->field($model, 'fkshopping') ?>

    <?= $form->field($model, 'fkprofile') ?>

    <?= $form->field($model, 'fkproduct') ?>

    <?= $form->field($model, 'quantity') ?>

    <?php // echo $form->field($model, 'price') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
