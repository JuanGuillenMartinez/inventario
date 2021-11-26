<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Producto */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="producto-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_marca_comercial')->textInput() ?>

    <?= $form->field($model, 'id_unidad_medida')->textInput() ?>

    <?= $form->field($model, 'descripcion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'precio_unitario')->textInput() ?>

    <?= $form->field($model, 'fecha_registro')->textInput() ?>

    <?= $form->field($model, 'fecha_caducidad')->textInput() ?>

    <?= $form->field($model, 'codigo_qr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'codigo_barras')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'url_imagen')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
