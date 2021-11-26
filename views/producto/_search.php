<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProductoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="producto-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_producto') ?>

    <?= $form->field($model, 'id_marca_comercial') ?>

    <?= $form->field($model, 'id_unidad_medida') ?>

    <?= $form->field($model, 'descripcion') ?>

    <?= $form->field($model, 'precio_unitario') ?>

    <?php // echo $form->field($model, 'fecha_registro') ?>

    <?php // echo $form->field($model, 'fecha_caducidad') ?>

    <?php // echo $form->field($model, 'codigo_qr') ?>

    <?php // echo $form->field($model, 'codigo_barras') ?>

    <?php // echo $form->field($model, 'url_imagen') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
