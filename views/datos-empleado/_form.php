<?php

use yii\helpers\Html;
use app\models\Sucursal;
use kartik\date\DatePicker;
use kartik\select2\Select2;
use yii\widgets\ActiveForm;
use app\models\PuestoLaboral;

/* @var $this yii\web\View */
/* @var $model app\models\DatosEmpleado */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="datos-empleado-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_user')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_sucursal')->widget(Select2::classname(), [
        'data' => Sucursal::getSucursalesTiendaMap(),
        'options' => ['placeholder' => 'Selecciona la sucursal ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>

    <?= $form->field($model, 'id_puesto')->widget(Select2::classname(), [
        'data' => PuestoLaboral::getPuestoMap(),
        'options' => ['placeholder' => 'Selecciona el puesto ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'apellido_paterno')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'apellido_materno')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'direccion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'numero_telefonico')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nacimiento')->widget(DatePicker::classname(), [
        'options' => ['placeholder' => 'Fecha de nacimiento'],
        'removeButton' => false,
        'pickerIcon' => '<i class = "fas fa-calendar-alt text-primary"></i>',
        'pluginOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd'
        ]
    ]); ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
