<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProductosSucursalSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="productos-sucursal-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_producto_sucursal') ?>

    <?= $form->field($model, 'cantidad') ?>

    <?= $form->field($model, 'fecha_registro') ?>

    <?= $form->field($model, 'id_producto') ?>

    <?= $form->field($model, 'id_sucursal') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
