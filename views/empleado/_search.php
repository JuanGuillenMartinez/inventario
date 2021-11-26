<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EmpleadoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="empleado-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_empleado') ?>

    <?= $form->field($model, 'id_sucursal') ?>

    <?= $form->field($model, 'id_datos_empleado') ?>

    <?= $form->field($model, 'id_puesto_laboral') ?>

    <?= $form->field($model, 'id_user') ?>

    <?php // echo $form->field($model, 'check_in') ?>

    <?php // echo $form->field($model, 'check_out') ?>

    <?php // echo $form->field($model, 'aumento') ?>

    <?php // echo $form->field($model, 'retardos') ?>

    <?php // echo $form->field($model, 'descuento') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
