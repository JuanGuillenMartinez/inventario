<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\UnidadMedida */

$this->title = $model->id_unidad_medida;
$this->params['breadcrumbs'][] = ['label' => 'Unidad Medidas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="unidad-medida-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_unidad_medida' => $model->id_unidad_medida], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_unidad_medida' => $model->id_unidad_medida], [
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
            'id_unidad_medida',
            'medida',
        ],
    ]) ?>

</div>
