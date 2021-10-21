<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Shopping */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="shopping-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'datetime')->textInput() ?>

    <?= $form->field($model, 'fkprofileseller')->textInput() ?>

    <?= $form->field($model, 'ticket')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
