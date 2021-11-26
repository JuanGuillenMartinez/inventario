<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DetallesVentaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Detalles Ventas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detalles-venta-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Detalles Venta', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_detalle_venta',
            'id_venta',
            'id_producto',
            'precio_total',
            'cantidad',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
