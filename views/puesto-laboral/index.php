<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PuestoLaboralSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Puesto Laborals';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="puesto-laboral-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Puesto Laboral', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_puesto_laboral',
            'nombre_puesto',
            'salario',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
