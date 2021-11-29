<?php

use yii\helpers\Html;
use app\models\Tienda;
use kartik\select2\Select2;
use kartik\time\TimePicker;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Sucursal */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sucursal-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_tienda')->widget(Select2::classname(), [
        'data' => Tienda::getTiendaMap(),
        'options' => ['placeholder' => 'Selecciona la tienda ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>

    <?= $form->field($model, 'nombre_sucursal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'direccion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telefono_contacto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hora_apertura')->widget(TimePicker::classname(), []) ?>

    <?= $form->field($model, 'hora_cierre')->widget(TimePicker::classname(), []) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>