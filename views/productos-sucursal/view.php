<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ProductosSucursal */

$this->title = $model->id_producto_sucursal;
$this->params['breadcrumbs'][] = ['label' => 'Productos Sucursals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="productos-sucursal-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_producto_sucursal' => $model->id_producto_sucursal], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_producto_sucursal' => $model->id_producto_sucursal], [
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
            'id_producto_sucursal',
            'cantidad',
            'fecha_registro',
            'id_producto',
            'id_sucursal',
        ],
    ]) ?>

</div>
