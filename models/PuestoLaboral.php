<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "puestos_laborales".
 *
 * @property int $id_puesto_laboral ID
 * @property string $nombre_puesto Puesto
 * @property float $salario Salario
 *
 * @property DatosEmpleado[] $datosEmpleados
 */
class PuestoLaboral extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'puestos_laborales';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre_puesto', 'salario'], 'required'],
            [['salario'], 'number'],
            [['nombre_puesto'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_puesto_laboral' => 'ID',
            'nombre_puesto' => 'Puesto',
            'salario' => 'Salario',
        ];
    }

    /**
     * Gets query for [[DatosEmpleados]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDatosEmpleados()
    {
        return $this->hasMany(DatosEmpleado::className(), ['id_puesto' => 'id_puesto_laboral']);
    }
}
