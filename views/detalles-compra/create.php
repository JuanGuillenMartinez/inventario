<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DetallesCompra */

$this->title = 'Create Detalles Compra';
$this->params['breadcrumbs'][] = ['label' => 'Detalles Compras', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detalles-compra-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
