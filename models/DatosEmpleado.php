<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "datos_empleados".
 *
 * @property int $id_datos_empleado ID
 * @property string $nombre Nombre
 * @property string $apellido_paterno Apellido paterno
 * @property string $apellido_materno Apellido Materno
 * @property string $direccion Dirección
 * @property string $numero_telefonico Teléfono
 * @property string $nacimiento Fecha de nacimiento
 *
 * @property Empleado[] $empleados
 */
class DatosEmpleado extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'datos_empleados';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'apellido_paterno', 'apellido_materno', 'direccion', 'numero_telefonico', 'nacimiento'], 'required'],
            [['nacimiento'], 'safe'],
            [['nombre', 'apellido_paterno', 'apellido_materno', 'direccion', 'numero_telefonico'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_datos_empleado' => 'ID',
            'nombre' => 'Nombre',
            'apellido_paterno' => 'Apellido paterno',
            'apellido_materno' => 'Apellido Materno',
            'direccion' => 'Dirección',
            'numero_telefonico' => 'Teléfono',
            'nacimiento' => 'Fecha de nacimiento',
        ];
    }

    /**
     * Gets query for [[Empleados]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEmpleados()
    {
        return $this->hasMany(Empleado::className(), ['id_datos_empleado' => 'id_datos_empleado']);
    }
}
