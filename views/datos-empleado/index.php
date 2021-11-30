<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DatosEmpleadoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Datos Empleados';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="datos-empleado-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Registrar Empleado', ['/user-management/auth/registration'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id_datos_empleado',
            // 'id_user',
            // 'id_sucursal',
            'sucursalNombre',
            // 'id_puesto',
            'puestoNombre',
            'nombreCompleto',
            //'apellido_paterno',
            //'apellido_materno',
            'numero_telefonico',
            'direccion',
            //'nacimiento',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
