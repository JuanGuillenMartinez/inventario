<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MarcaComercial */

$this->title = 'Create Marca Comercial';
$this->params['breadcrumbs'][] = ['label' => 'Marca Comercials', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="marca-comercial-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
