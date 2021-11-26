<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "productos_por_categorias".
 *
 * @property int $id_producto_categoria ID
 * @property int $id_producto ID del producto
 * @property int $id_categoria ID de categoría
 *
 * @property Categoria $categoria
 * @property Producto $producto
 */
class ProductoPorCategoria extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'productos_por_categorias';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_producto', 'id_categoria'], 'required'],
            [['id_producto', 'id_categoria'], 'integer'],
            [['id_categoria'], 'exist', 'skipOnError' => true, 'targetClass' => Categoria::className(), 'targetAttribute' => ['id_categoria' => 'id_categoria']],
            [['id_producto'], 'exist', 'skipOnError' => true, 'targetClass' => Producto::className(), 'targetAttribute' => ['id_producto' => 'id_producto']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_producto_categoria' => 'ID',
            'id_producto' => 'ID del producto',
            'id_categoria' => 'ID de categoría',
        ];
    }

    /**
     * Gets query for [[Categoria]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategoria()
    {
        return $this->hasOne(Categoria::className(), ['id_categoria' => 'id_categoria']);
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
