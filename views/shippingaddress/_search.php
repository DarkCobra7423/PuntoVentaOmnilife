<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ShippingaddressSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="shippingaddress-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idshippingaddress') ?>

    <?= $form->field($model, 'idprofile') ?>

    <?= $form->field($model, 'namelastname') ?>

    <?= $form->field($model, 'postalcode') ?>

    <?= $form->field($model, 'state') ?>

    <?php // echo $form->field($model, 'municipalitymayoralty') ?>

    <?php // echo $form->field($model, 'suburb') ?>

    <?php // echo $form->field($model, 'street') ?>

    <?php // echo $form->field($model, 'outdoornumber') ?>

    <?php // echo $form->field($model, 'interiornumber') ?>

    <?php // echo $form->field($model, 'typeaddress') ?>

    <?php // echo $form->field($model, 'telephonecontact') ?>

    <?php // echo $form->field($model, 'indications') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
