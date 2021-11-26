<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ProductosSucursal */

$this->title = 'Update Productos Sucursal: ' . $model->id_producto_sucursal;
$this->params['breadcrumbs'][] = ['label' => 'Productos Sucursals', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_producto_sucursal, 'url' => ['view', 'id_producto_sucursal' => $model->id_producto_sucursal]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="productos-sucursal-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
