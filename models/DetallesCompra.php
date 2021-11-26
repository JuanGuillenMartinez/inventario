<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "detalles_compras".
 *
 * @property int $id_detalle_compra ID
 * @property int $id_compra ID de compra
 * @property int $id_producto ID de producto
 * @property float $precio_unitario Precio de compra
 * @property int $cantidad Cantidad
 * @property float $subtotal Subtotal
 * @property int $descuento Descuento
 *
 * @property Compra $compra
 * @property Producto $producto
 */
class DetallesCompra extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'detalles_compras';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_compra', 'id_producto', 'precio_unitario', 'cantidad', 'subtotal', 'descuento'], 'required'],
            [['id_compra', 'id_producto', 'cantidad', 'descuento'], 'integer'],
            [['precio_unitario', 'subtotal'], 'number'],
            [['id_compra'], 'exist', 'skipOnError' => true, 'targetClass' => Compra::className(), 'targetAttribute' => ['id_compra' => 'id_compra']],
            [['id_producto'], 'exist', 'skipOnError' => true, 'targetClass' => Producto::className(), 'targetAttribute' => ['id_producto' => 'id_producto']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_detalle_compra' => 'ID',
            'id_compra' => 'ID de compra',
            'id_producto' => 'ID de producto',
            'precio_unitario' => 'Precio de compra',
            'cantidad' => 'Cantidad',
            'subtotal' => 'Subtotal',
            'descuento' => 'Descuento',
        ];
    }

    /**
     * Gets query for [[Compra]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCompra()
    {
        return $this->hasOne(Compra::className(), ['id_compra' => 'id_compra']);
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
}
