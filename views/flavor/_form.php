<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Flavor */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="flavor-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'flavor')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
