<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PuestoLaboral */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="puesto-laboral-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre_puesto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'salario')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
