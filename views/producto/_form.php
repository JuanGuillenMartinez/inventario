<?php

use yii\helpers\Html;
use app\models\Sucursal;
use kartik\date\DatePicker;
use kartik\select2\Select2;
use yii\widgets\ActiveForm;
use app\models\UnidadMedida;
use app\models\MarcaComercial;

/* @var $this yii\web\View */
/* @var $model app\models\Producto */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="producto-form">

    <?php $form = ActiveForm::begin(); ?>
    
    <?= $form->field($model, 'descripcion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_marca_comercial')->widget(Select2::classname(), [
        'data' => MarcaComercial::getMarcaMap(),
        'options' => ['placeholder' => 'Selecciona la marca ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>

    <?= $form->field($model, 'id_unidad_medida')->widget(Select2::classname(), [
        'data' => UnidadMedida::getUnidadMap(),
        'options' => ['placeholder' => 'Selecciona la marca ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>


    <?= $form->field($model, 'precio_unitario')->textInput() ?>

    <?= $form->field($model, 'fecha_caducidad')->widget(DatePicker::classname(), [
        'options' => ['placeholder' => 'Fecha de caducidad'],
        'removeButton' => false,
        'pickerIcon' => '<i class = "fas fa-calendar-alt text-primary"></i>',
        'pluginOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd'
        ]
    ]); ?>

    <?= $form->field($model, 'codigo_qr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'codigo_barras')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'url_imagen')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>