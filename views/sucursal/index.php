<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SucursalSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sucursals';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sucursal-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Sucursal', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_sucursal',
            'id_tienda',
            'nombre_sucursal',
            'direccion',
            'telefono_contacto',
            //'hora_apertura',
            //'hora_cierre',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
