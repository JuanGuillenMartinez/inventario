<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProductosSucursalSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Productos Sucursals';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="productos-sucursal-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Productos Sucursal', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_producto_sucursal',
            'cantidad',
            'fecha_registro',
            'id_producto',
            'id_sucursal',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
