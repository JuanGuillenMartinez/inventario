<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SucursalSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sucursal-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_sucursal') ?>

    <?= $form->field($model, 'id_tienda') ?>

    <?= $form->field($model, 'nombre_sucursal') ?>

    <?= $form->field($model, 'direccion') ?>

    <?= $form->field($model, 'telefono_contacto') ?>

    <?php // echo $form->field($model, 'hora_apertura') ?>

    <?php // echo $form->field($model, 'hora_cierre') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
