<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Shoppingcart */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="shoppingcart-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fkshopping')->textInput() ?>

    <?= $form->field($model, 'fkprofile')->textInput() ?>

    <?= $form->field($model, 'fkproduct')->textInput() ?>

    <?= $form->field($model, 'quantity')->textInput() ?>

    <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
