<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Empleado */

$this->title = $model->id_empleado;
$this->params['breadcrumbs'][] = ['label' => 'Empleados', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="empleado-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_empleado' => $model->id_empleado], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_empleado' => $model->id_empleado], [
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
            'id_empleado',
            'id_sucursal',
            'id_datos_empleado',
            'id_puesto_laboral',
            'id_user',
            'check_in',
            'check_out',
            'aumento',
            'retardos',
            'descuento',
        ],
    ]) ?>

</div>
