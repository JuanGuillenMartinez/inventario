<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Producto */

$this->title = 'Actualizar Producto: ' . $model->id_producto;
$this->params['breadcrumbs'][] = ['label' => 'Productos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->descripcion, 'url' => ['view', 'id_producto' => $model->id_producto]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="producto-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
