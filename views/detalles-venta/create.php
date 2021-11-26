<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DetallesVenta */

$this->title = 'Create Detalles Venta';
$this->params['breadcrumbs'][] = ['label' => 'Detalles Ventas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detalles-venta-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
