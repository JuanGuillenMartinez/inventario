<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MarcaComercial */

$this->title = 'Update Marca Comercial: ' . $model->id_marca_comercial;
$this->params['breadcrumbs'][] = ['label' => 'Marca Comercials', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_marca_comercial, 'url' => ['view', 'id_marca_comercial' => $model->id_marca_comercial]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="marca-comercial-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
