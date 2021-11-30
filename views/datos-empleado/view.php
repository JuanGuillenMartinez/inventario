<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\DatosEmpleado */

$this->title = $model->getNombreCompleto();
$this->params['breadcrumbs'][] = ['label' => 'Datos Empleados', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="datos-empleado-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->id_datos_empleado], ['class' => 'btn btn-primary']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_datos_empleado',
            // 'id_user',
            // 'id_sucursal',
            'sucursalNombre',
            // 'id_puesto',
            'puestoNombre',
            'nombre',
            'apellido_paterno',
            'apellido_materno',
            'direccion',
            'numero_telefonico',
            'nacimiento',
        ],
    ]) ?>

</div>
