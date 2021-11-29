<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ProductosSucursal */

$this->title = $model->producto->descripcion;
$this->params['breadcrumbs'][] = ['label' => 'Inventario', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="productos-sucursal-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->id_producto_sucursal], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->id_producto_sucursal], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Desea eliminarlo?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_producto_sucursal',
            'id_producto',
            [
                'label' => 'Producto',
                'format' => 'raw',
                'value' => $model->getProductoNombre()
            ],
            'cantidad',
            'productoPrecio',
            'valorMonetario',
            'fecha_registro',
        ],
    ]) ?>

</div>
