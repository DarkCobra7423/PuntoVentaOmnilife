<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Flavor;
use app\models\Unittype;
use yii\helpers\ArrayHelper;
use kartik\file\FileInput;

$flavor = ArrayHelper::map(Flavor::find()->all(), 'idflavor', 'flavor');
$unittype = ArrayHelper::map(Unittype::find()->all(), 'idunittype', 'unittype');

/* @var $this yii\web\View */
/* @var $model app\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'product')->textInput(['maxlength' => true]) ?>

    <!--<? $form->field($model, 'image')->textInput(['maxlength' => true]) ?>-->
     <?=
    $form->field($model, 'images')->widget(FileInput::classname(), [
        'options' => ['accept' => 'image/*'],
    ]);
    ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'fkflavor')->dropDownList($flavor, ['prompt' => 'Selecione uno...']) ?>

    <?= $form->field($model, 'content')->textInput() ?>

    <?= $form->field($model, 'fkunittype')->dropDownList($unittype, ['prompt' => 'Selecione uno...'])?>

    <?= $form->field($model, 'stock')->textInput() ?>

    <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar Registro', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
