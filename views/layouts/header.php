<?php

use app\models\DatosEmpleado;
use app\models\Tienda;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use webvimark\modules\UserManagement\models\User;
use webvimark\modules\UserManagement\UserManagementModule;
?>
<?php
    $empleado = DatosEmpleado::getCurrentEmpleado();

    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'collapseOptions' => ['class' => 'justify-content-end'],
        'options' => [
            'class' => 'navbar-dark bg-dark navbar navbar-expand-md fixed-top',
            'id' => "fh5co-menu-wrap",
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav sf-menu', 'id' => "fh5co-primary-menu"],
        'encodeLabels' => false,
        'items' => [
            ['label' => 'Inicio', 'url' => ['/']],
            ['label' => 'Tienda', 'url' => ['/tienda']],
            ['label' => 'Inventario', 'url' => ['/productos-sucursal']],
            ['label' => 'Compras', 'url' => ['/compra']],
            ['label' => 'Ventas', 'url' => ['/venta']],
            [
                'label' => 'Administrador', 
                'items'=>UserManagementModule::menuItems(), 
                'visible' => Yii::$app->user->isSuperAdmin
            ],
			['label'=> isset($empleado) ? $empleado->nombre : "" . ' <i class="fas fa-user-check"></i>', 'url'=>[isset($empleado) ? '/datos-empleado/view?id=' . $empleado->id_datos_empleado : '/'], 'visible' => !Yii::$app->user->isGuest],
            ['label'=>'Entrar <i class="fas fa-sign-in-alt"></i>', 'url'=>['/user-management/auth/login'] , 'visible' => Yii::$app->user->isGuest],
			['label'=>'Salir <i class="fas fa-sign-out-alt"></i>', 'url'=>['/user-management/auth/logout'], 'visible' => !Yii::$app->user->isGuest],
        ],
    ]);
    NavBar::end();
?>