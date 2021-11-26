<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ProductoPorCategoria */

$this->title = 'Update Producto Por Categoria: ' . $model->id_producto_categoria;
$this->params['breadcrumbs'][] = ['label' => 'Producto Por Categorias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_producto_categoria, 'url' => ['view', 'id_producto_categoria' => $model->id_producto_categoria]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="producto-por-categoria-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
