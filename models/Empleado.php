<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "empleados".
 *
 * @property int $id_empleado ID
 * @property int $id_sucursal ID de sucursal
 * @property int $id_datos_empleado ID de información
 * @property int $id_puesto_laboral ID de puesto laboral
 * @property int $id_user User Webvimark
 * @property string|null $check_in Entrada
 * @property string|null $check_out Salida
 * @property float|null $aumento Aumento
 * @property int|null $retardos Retardos
 * @property float|null $descuento Descuentos
 *
 * @property Compra[] $compras
 * @property DatosEmpleado $datosEmpleado
 * @property PuestoLaboral $puestoLaboral
 * @property Sucursal $sucursal
 * @property Venta[] $ventas
 */
class Empleado extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'empleados';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_sucursal', 'id_datos_empleado', 'id_puesto_laboral', 'id_user'], 'required'],
            [['id_sucursal', 'id_datos_empleado', 'id_puesto_laboral', 'id_user', 'retardos'], 'integer'],
            [['check_in', 'check_out'], 'safe'],
            [['aumento', 'descuento'], 'number'],
            [['id_datos_empleado'], 'exist', 'skipOnError' => true, 'targetClass' => DatosEmpleado::className(), 'targetAttribute' => ['id_datos_empleado' => 'id_datos_empleado']],
            [['id_puesto_laboral'], 'exist', 'skipOnError' => true, 'targetClass' => PuestoLaboral::className(), 'targetAttribute' => ['id_puesto_laboral' => 'id_puesto_laboral']],
            [['id_sucursal'], 'exist', 'skipOnError' => true, 'targetClass' => Sucursal::className(), 'targetAttribute' => ['id_sucursal' => 'id_sucursal']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_empleado' => 'ID',
            'id_sucursal' => 'ID de sucursal',
            'id_datos_empleado' => 'ID de información',
            'id_puesto_laboral' => 'ID de puesto laboral',
            'id_user' => 'User Webvimark',
            'check_in' => 'Entrada',
            'check_out' => 'Salida',
            'aumento' => 'Aumento',
            'retardos' => 'Retardos',
            'descuento' => 'Descuentos',
        ];
    }

    /**
     * Gets query for [[Compras]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCompras()
    {
        return $this->hasMany(Compra::className(), ['id_empleado' => 'id_empleado']);
    }

    /**
     * Gets query for [[DatosEmpleado]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDatosEmpleado()
    {
        return $this->hasOne(DatosEmpleado::className(), ['id_datos_empleado' => 'id_datos_empleado']);
    }

    /**
     * Gets query for [[PuestoLaboral]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPuestoLaboral()
    {
        return $this->hasOne(PuestoLaboral::className(), ['id_puesto_laboral' => 'id_puesto_laboral']);
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

    /**
     * Gets query for [[Ventas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getVentas()
    {
        return $this->hasMany(Venta::className(), ['id_empleado' => 'id_empleado']);
    }
}
