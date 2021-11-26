<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PuestoLaboral */

$this->title = 'Update Puesto Laboral: ' . $model->id_puesto_laboral;
$this->params['breadcrumbs'][] = ['label' => 'Puesto Laborals', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_puesto_laboral, 'url' => ['view', 'id_puesto_laboral' => $model->id_puesto_laboral]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="puesto-laboral-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
