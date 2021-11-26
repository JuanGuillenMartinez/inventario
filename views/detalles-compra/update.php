<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DetallesCompra */

$this->title = 'Update Detalles Compra: ' . $model->id_detalle_compra;
$this->params['breadcrumbs'][] = ['label' => 'Detalles Compras', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_detalle_compra, 'url' => ['view', 'id_detalle_compra' => $model->id_detalle_compra]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="detalles-compra-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
