<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Unittype */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="unittype-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'unittype')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
