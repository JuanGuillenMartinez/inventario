<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "productos_sucursal".
 *
 * @property int $id_producto_sucursal ID producto por sucursal
 * @property int $cantidad Cantidad
 * @property string $fecha_registro Fecha de registro
 * @property int $id_producto ID del producto
 * @property int $id_sucursal ID de sucursal
 *
 * @property Producto $producto
 * @property Sucursal $sucursal
 */
class ProductosSucursal extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'productos_sucursal';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cantidad', 'fecha_registro', 'id_producto', 'id_sucursal'], 'required'],
            [['cantidad', 'id_producto', 'id_sucursal'], 'integer'],
            [['fecha_registro'], 'safe'],
            [['id_producto'], 'exist', 'skipOnError' => true, 'targetClass' => Producto::className(), 'targetAttribute' => ['id_producto' => 'id_producto']],
            [['id_sucursal'], 'exist', 'skipOnError' => true, 'targetClass' => Sucursal::className(), 'targetAttribute' => ['id_sucursal' => 'id_sucursal']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_producto_sucursal' => 'ID producto por sucursal',
            'cantidad' => 'Cantidad',
            'fecha_registro' => 'Fecha de registro',
            'id_producto' => 'ID del producto',
            'id_sucursal' => 'ID de sucursal',
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
     * Gets query for [[Sucursal]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSucursal()
    {
        return $this->hasOne(Sucursal::className(), ['id_sucursal' => 'id_sucursal']);
    }
}
