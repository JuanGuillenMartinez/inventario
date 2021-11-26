<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DatosEmpleadoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="datos-empleado-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_datos_empleado') ?>

    <?= $form->field($model, 'id_user') ?>

    <?= $form->field($model, 'id_sucursal') ?>

    <?= $form->field($model, 'id_puesto') ?>

    <?= $form->field($model, 'nombre') ?>

    <?php // echo $form->field($model, 'apellido_paterno') ?>

    <?php // echo $form->field($model, 'apellido_materno') ?>

    <?php // echo $form->field($model, 'direccion') ?>

    <?php // echo $form->field($model, 'numero_telefonico') ?>

    <?php // echo $form->field($model, 'nacimiento') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
