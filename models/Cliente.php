<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "clientes".
 *
 * @property int $id_cliente ID del cliente
 * @property string $nombre Nombre
 * @property string $apellido_paterno Apellido paterno
 * @property string $apellido_materno Apellido materno
 * @property string $correo_electronico Correo electrónico
 * @property string $estatus Estatus
 *
 * @property Venta[] $ventas
 */
class Cliente extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'clientes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'apellido_paterno', 'apellido_materno', 'correo_electronico', 'estatus'], 'required'],
            [['estatus'], 'string'],
            [['nombre', 'apellido_paterno', 'apellido_materno', 'correo_electronico'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_cliente' => 'ID del cliente',
            'nombre' => 'Nombre',
            'apellido_paterno' => 'Apellido paterno',
            'apellido_materno' => 'Apellido materno',
            'correo_electronico' => 'Correo electrónico',
            'estatus' => 'Estatus',
        ];
    }

    /**
     * Gets query for [[Ventas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getVentas()
    {
        return $this->hasMany(Venta::className(), ['id_cliente' => 'id_cliente']);
    }
    public static function mapEstatus(){
        return ['Activo' => 'Activo', 'Baja' => 'Baja'];
    }
}
