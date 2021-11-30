<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DatosEmpleado */

$this->title = 'Actualizar Datos del Empleado: ' . $model->nombre;
$this->params['breadcrumbs'][] = ['label' => 'Datos Empleados', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nombre, 'url' => ['view', 'id' => $model->id_datos_empleado]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="datos-empleado-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
