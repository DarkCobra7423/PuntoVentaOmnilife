<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProfileSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="profile-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idprofile') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'lastname') ?>

    <?= $form->field($model, 'phonenumber') ?>

    <?= $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'account') ?>

    <?php // echo $form->field($model, 'fkuser') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
