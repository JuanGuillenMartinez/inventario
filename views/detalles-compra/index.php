<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DetallesCompraSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Registrar Compra';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detalles-compra-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Registrar', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_detalle_compra',
            'id_compra',
            'id_producto',
            'precio_unitario',
            'cantidad',
            //'subtotal',
            //'descuento',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
