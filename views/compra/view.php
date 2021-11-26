<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Compra */

$this->title = $model->id_compra;
$this->params['breadcrumbs'][] = ['label' => 'Compras', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="compra-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_compra' => $model->id_compra], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_compra' => $model->id_compra], [
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
            'id_compra',
            'id_proveedor',
            'id_empleado',
            'subtotal',
            'descuento',
            'total',
        ],
    ]) ?>

</div>
