<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Shippingaddress */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="shippingaddress-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idprofile')->textInput() ?>

    <?= $form->field($model, 'namelastname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'postalcode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'state')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'municipalitymayoralty')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'suburb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'street')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'outdoornumber')->textInput() ?>

    <?= $form->field($model, 'interiornumber')->textInput() ?>

    <?= $form->field($model, 'typeaddress')->dropDownList([ 'Trabajo' => 'Trabajo', 'Casa' => 'Casa', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'telephonecontact')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'indications')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
