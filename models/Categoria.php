<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "categorias".
 *
 * @property int $id_categoria ID de categoría
 * @property string $nombre Nombre
 *
 * @property ProductoPorCategoria[] $productosPorCategorias
 */
class Categoria extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'categorias';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre'], 'required'],
            [['nombre'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_categoria' => 'ID de categoría',
            'nombre' => 'Nombre',
        ];
    }

    /**
     * Gets query for [[ProductosPorCategorias]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProductosPorCategorias()
    {
        return $this->hasMany(ProductoPorCategoria::className(), ['id_categoria' => 'id_categoria']);
    }
}
