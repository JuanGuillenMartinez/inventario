<?php

use yii\bootstrap4\Html;
?>
<!DOCTYPE html>
<!-- <html lang="en" style="background: url(&quot;https://cdn.bootstrapstudio.io/placeholders/1400x800.png&quot;);"> -->

<body style="background: #94a4ac;">
    <section class="border rounded section-botonera">

        <div class="titulo-botonera">
            <h1 class="text-uppercase titulo-botonera"><?= Yii::$app->name ?></h1>
        </div>

        <div class="contenedor-botonera">
            <div data-bss-hover-animate="pulse" class="div-boton">
                <a href="/producto">
                    <?php echo Html::img('@web/img/icons/productos.png', ['class' => 'rounded-circle img-fluid', 'width' => '40%']) ?>
                </a>
                <h2 class="nombre-boton">Productos</h2>
            </div>
            <div data-bss-hover-animate="pulse" class="div-boton">
                <a href="/productos-sucursal">
                    <?php echo Html::img('@web/img/icons/productos-sucursal.png', ['class' => 'rounded-circle img-fluid', 'width' => '40%']) ?>
                </a>
                <h2 class="nombre-boton">Productos en sucursal</h2>
            </div>
            <div data-bss-hover-animate="pulse" class="div-boton">
                <a href="/detalles-compra">
                    <?php echo Html::img('@web/img/icons/compras.png', ['class' => 'rounded-circle img-fluid', 'width' => '40%']) ?>
                </a>
                <h2 class="nombre-boton">Compras</h2>
            </div>
            <div data-bss-hover-animate="pulse" class="div-boton">
                <a href="/venta">
                    <?php echo Html::img('@web/img/icons/ventas.png', ['class' => 'rounded-circle img-fluid', 'width' => '40%']) ?>
                </a>
                <h2 class="nombre-boton">Ventas</h2>
            </div>
            <div data-bss-hover-animate="pulse" class="div-boton">
                <a href="/sucursal">
                    <?php echo Html::img('@web/img/icons/sucursal.png', ['class' => 'rounded-circle img-fluid', 'width' => '40%']) ?>
                </a>
                <h2 class="nombre-boton">Sucursales</h2>
            </div>
            <div data-bss-hover-animate="pulse" class="div-boton">
                <a href="/tienda">
                    <?php echo Html::img('@web/img/icons/tienda.png', ['class' => 'rounded-circle img-fluid', 'width' => '40%']) ?>
                </a>
                <h2 class="nombre-boton">Tiendas</h2>
            </div>
            <div data-bss-hover-animate="pulse" class="div-boton">
                <a href="/user-management/auth/registration">
                    <?php echo Html::img('@web/img/icons/registrar.png', ['class' => 'rounded-circle img-fluid', 'width' => '40%']) ?>
                </a>
                <h2 class="nombre-boton">Registrar empleado</h2>
            </div>
            <div data-bss-hover-animate="pulse" class="div-boton">
                <a href="/datos-empleado">
                    <?php echo Html::img('@web/img/icons/empleado.png', ['class' => 'rounded-circle img-fluid', 'width' => '40%']) ?>
                </a>
                <h2 class="nombre-boton">Empleados</h2>
            </div>
            <div data-bss-hover-animate="pulse" class="div-boton">
                <a href="/cliente">
                    <?php echo Html::img('@web/img/icons/clientes.png', ['class' => 'rounded-circle img-fluid', 'width' => '40%']) ?>
                </a>
                <h2 class="nombre-boton">Clientes</h2>
            </div>
        </div>
    </section>
</body>

</html>