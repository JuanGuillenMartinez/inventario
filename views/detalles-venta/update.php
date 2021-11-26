<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DetallesVenta */

$this->title = 'Update Detalles Venta: ' . $model->id_detalle_venta;
$this->params['breadcrumbs'][] = ['label' => 'Detalles Ventas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_detalle_venta, 'url' => ['view', 'id_detalle_venta' => $model->id_detalle_venta]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="detalles-venta-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
