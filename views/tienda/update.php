<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tienda */

$this->title = 'Update Tienda: ' . $model->id_tienda;
$this->params['breadcrumbs'][] = ['label' => 'Tiendas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_tienda, 'url' => ['view', 'id_tienda' => $model->id_tienda]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tienda-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
