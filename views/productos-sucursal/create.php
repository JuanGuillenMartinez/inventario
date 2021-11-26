<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ProductosSucursal */

$this->title = 'Create Productos Sucursal';
$this->params['breadcrumbs'][] = ['label' => 'Productos Sucursals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="productos-sucursal-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
