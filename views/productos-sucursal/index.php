<?php

use yii\helpers\Html;
use app\models\Tienda;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProductosSucursalSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Inventario';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="productos-sucursal-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Registrar Producto', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>
    <a href="/"></a>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_producto_sucursal',
            // 'id_producto',
            [
                'label' => 'Producto',
                'format' => 'raw',
                'value' => 'productoNombre'
            ],
            // 'productoNombre',
            'productoPrecio',
            // 'id_sucursal',
            'cantidad',
            'valorMonetario',
            'fecha_registro',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>