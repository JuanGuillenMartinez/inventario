<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "unidad_medida".
 *
 * @property int $id_unidad_medida ID
 * @property string $medida Presentación
 *
 * @property Producto[] $productos
 */
class UnidadMedida extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'unidad_medida';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['medida'], 'required'],
            [['medida'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_unidad_medida' => 'ID',
            'medida' => 'Presentación',
        ];
    }

    /**
     * Gets query for [[Productos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProductos()
    {
        return $this->hasMany(Producto::className(), ['id_unidad_medida' => 'id_unidad_medida']);
    }
}
