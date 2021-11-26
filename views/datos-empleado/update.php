<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DatosEmpleado */

$this->title = 'Update Datos Empleado: ' . $model->id_datos_empleado;
$this->params['breadcrumbs'][] = ['label' => 'Datos Empleados', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_datos_empleado, 'url' => ['view', 'id_datos_empleado' => $model->id_datos_empleado]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="datos-empleado-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
