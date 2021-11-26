<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "detalles_ventas".
 *
 * @property int $id_detalle_venta ID
 * @property int $id_venta ID de venta
 * @property int $id_producto ID de producto
 * @property float $precio_total Precio final
 * @property int $cantidad Cantidad
 *
 * @property Producto $producto
 * @property Venta $venta
 */
class DetallesVenta extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'detalles_ventas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_venta', 'id_producto', 'precio_total', 'cantidad'], 'required'],
            [['id_venta', 'id_producto', 'cantidad'], 'integer'],
            [['precio_total'], 'number'],
            [['id_producto'], 'exist', 'skipOnError' => true, 'targetClass' => Producto::className(), 'targetAttribute' => ['id_producto' => 'id_producto']],
            [['id_venta'], 'exist', 'skipOnError' => true, 'targetClass' => Venta::className(), 'targetAttribute' => ['id_venta' => 'id_venta']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_detalle_venta' => 'ID',
            'id_venta' => 'ID de venta',
            'id_producto' => 'ID de producto',
            'precio_total' => 'Precio final',
            'cantidad' => 'Cantidad',
        ];
    }

    /**
     * Gets query for [[Producto]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProducto()
    {
        return $this->hasOne(Producto::className(), ['id_producto' => 'id_producto']);
    }

    /**
     * Gets query for [[Venta]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getVenta()
    {
        return $this->hasOne(Venta::className(), ['id_venta' => 'id_venta']);
    }
}
