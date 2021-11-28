<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "proveedores".
 *
 * @property int $id_proveedor ID
 * @property string|null $nombre Proveedor
 * @property string|null $descripcion Descripción
 *
 * @property Compra[] $compras
 */
class Proveedor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'proveedores';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'descripcion'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_proveedor' => 'ID',
            'nombre' => 'Proveedor',
            'descripcion' => 'Descripción',
        ];
    }

    /**
     * Gets query for [[Compras]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCompras()
    {
        return $this->hasMany(Compra::className(), ['id_proveedor' => 'id_proveedor']);
    }
    public static function map(){
        return ArrayHelper::map(Proveedor::find()->all(),'id_proveedor','nombre');
    }
}
