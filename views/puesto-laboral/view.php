<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\PuestoLaboral */

$this->title = $model->id_puesto_laboral;
$this->params['breadcrumbs'][] = ['label' => 'Puesto Laborals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="puesto-laboral-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_puesto_laboral' => $model->id_puesto_laboral], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_puesto_laboral' => $model->id_puesto_laboral], [
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
            'id_puesto_laboral',
            'nombre_puesto',
            'salario',
        ],
    ]) ?>

</div>
