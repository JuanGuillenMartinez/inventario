<?php

use yii\helpers\Html;
use app\models\Proveedor;
use kartik\select2\Select2;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Compra */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="compra-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">

        <div class="col-md-3">
            <?= $form->field($model, 'id_proveedor')->widget(Select2:: className(), [
            'data' => Proveedor::map(),
            'language' => 'es',
            'options' => ['placeholder' => 'Seleccione un Proveedor...'],
            'pluginOptions' => [
                'allowClear' => true
            ],
            ]) ?>
        </div>


        <div class="col-md-3">
            <?= $form->field($model, 'id_empleado')->textInput() ?>
        </div>

        <div class="col-md-3">
            <?= $form->field($model, 'subtotal')->textInput() ?>
        </div>

        <div class="col-md-3">
            <?= $form->field($model, 'descuento')->textInput() ?>
        </div>

        <div class="col-md-3">
            <?= $form->field($model, 'total')->textInput() ?>
        </div>

    </div>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>