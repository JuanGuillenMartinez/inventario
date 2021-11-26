<?php

use app\models\Tienda;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use webvimark\modules\UserManagement\UserManagementModule;
?>
<?php
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
            ['label' => 'Tienda', 'url' => ['/paquetes']],
            ['label' => 'Inventario', 'url' => ['/plantilla/vuelos']],
            ['label' => 'Compras', 'url' => ['/plantilla/hoteles']],
            ['label' => 'Ventas', 'url' => ['/site/contact']],
            [
                'label' => 'Administrador', 
                'items'=>UserManagementModule::menuItems(), 
                'visible' => Yii::$app->user->isSuperAdmin
            ],
            ['label'=>'<i class="fas fa-sign-in-alt"></i>', 'url'=>['/user-management/auth/login'] , 'visible' => Yii::$app->user->isGuest],
			['label'=>'Salir <i class="fas fa-sign-out-alt"></i>', 'url'=>['/user-management/auth/logout'], 'visible' => !Yii::$app->user->isGuest],
        ],
    ]);
    NavBar::end();
?>