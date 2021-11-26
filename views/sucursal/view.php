<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Sucursal */

$this->title = $model->id_sucursal;
$this->params['breadcrumbs'][] = ['label' => 'Sucursals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="sucursal-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_sucursal' => $model->id_sucursal], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_sucursal' => $model->id_sucursal], [
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
            'id_sucursal',
            'id_tienda',
            'nombre_sucursal',
            'direccion',
            'telefono_contacto',
            'hora_apertura',
            'hora_cierre',
        ],
    ]) ?>

</div>
