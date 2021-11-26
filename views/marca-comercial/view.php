<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\MarcaComercial */

$this->title = $model->id_marca_comercial;
$this->params['breadcrumbs'][] = ['label' => 'Marca Comercials', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="marca-comercial-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_marca_comercial' => $model->id_marca_comercial], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_marca_comercial' => $model->id_marca_comercial], [
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
            'id_marca_comercial',
            'nombre',
        ],
    ]) ?>

</div>
