<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\DatosEmpleado */

$this->title = $model->id_datos_empleado;
$this->params['breadcrumbs'][] = ['label' => 'Datos Empleados', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="datos-empleado-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_datos_empleado' => $model->id_datos_empleado], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_datos_empleado' => $model->id_datos_empleado], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_datos_empleado',
            'nombre',
            'apellido_paterno',
            'apellido_materno',
            'direccion',
            'numero_telefonico',
            'nacimiento',
        ],
    ]) ?>

</div>
