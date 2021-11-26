<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "marcas_comerciales".
 *
 * @property int $id_marca_comercial ID marca comercial
 * @property string $nombre Nombre
 *
 * @property Producto[] $productos
 */
class MarcaComercial extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'marcas_comerciales';
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
            'id_marca_comercial' => 'ID marca comercial',
            'nombre' => 'Nombre',
        ];
    }

    /**
     * Gets query for [[Productos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProductos()
    {
        return $this->hasMany(Producto::className(), ['id_marca_comercial' => 'id_marca_comercial']);
    }
}
