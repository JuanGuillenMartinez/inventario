<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DetallesCompraSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="detalles-compra-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_detalle_compra') ?>

    <?= $form->field($model, 'id_compra') ?>

    <?= $form->field($model, 'id_producto') ?>

    <?= $form->field($model, 'precio_unitario') ?>

    <?= $form->field($model, 'cantidad') ?>

    <?php // echo $form->field($model, 'subtotal') ?>

    <?php // echo $form->field($model, 'descuento') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
