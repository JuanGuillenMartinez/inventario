<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DatosEmpleado */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="datos-empleado-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_user')->textInput() ?>

    <?= $form->field($model, 'id_sucursal')->textInput() ?>

    <?= $form->field($model, 'id_puesto')->textInput() ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'apellido_paterno')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'apellido_materno')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'direccion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'numero_telefonico')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nacimiento')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
