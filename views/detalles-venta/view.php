<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\DetallesVenta */

$this->title = $model->id_detalle_venta;
$this->params['breadcrumbs'][] = ['label' => 'Detalles Ventas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="detalles-venta-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_detalle_venta' => $model->id_detalle_venta], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_detalle_venta' => $model->id_detalle_venta], [
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
            'id_detalle_venta',
            'id_venta',
            'id_producto',
            'precio_total',
            'cantidad',
        ],
    ]) ?>

</div>
