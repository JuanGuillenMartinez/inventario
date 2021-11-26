<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\DetallesCompra */

$this->title = $model->id_detalle_compra;
$this->params['breadcrumbs'][] = ['label' => 'Detalles Compras', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="detalles-compra-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_detalle_compra' => $model->id_detalle_compra], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_detalle_compra' => $model->id_detalle_compra], [
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
            'id_detalle_compra',
            'id_compra',
            'id_producto',
            'precio_unitario',
            'cantidad',
            'subtotal',
            'descuento',
        ],
    ]) ?>

</div>
