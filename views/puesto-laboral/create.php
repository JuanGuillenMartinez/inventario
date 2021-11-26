<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PuestoLaboral */

$this->title = 'Create Puesto Laboral';
$this->params['breadcrumbs'][] = ['label' => 'Puesto Laborals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="puesto-laboral-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
