<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "compras".
 *
 * @property int $id_compra ID
 * @property int $id_proveedor ID del proveedor
 * @property int $id_empleado ID del empleado
 * @property float|null $subtotal Subtotal
 * @property int|null $descuento Descuento
 * @property float|null $total Precio final
 *
 * @property DetallesCompra[] $detallesCompras
 * @property DatosEmpleado $empleado
 * @property Proveedor $proveedor
 */
class Compra extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'compras';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_proveedor', 'id_empleado'], 'required'],
            [['id_proveedor', 'id_empleado', 'descuento'], 'integer'],
            [['subtotal', 'total'], 'number'],
            [['id_empleado'], 'exist', 'skipOnError' => true, 'targetClass' => DatosEmpleado::className(), 'targetAttribute' => ['id_empleado' => 'id_datos_empleado']],
            [['id_proveedor'], 'exist', 'skipOnError' => true, 'targetClass' => Proveedor::className(), 'targetAttribute' => ['id_proveedor' => 'id_proveedor']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_compra' => 'ID',
            'id_proveedor' => 'ID del proveedor',
            'id_empleado' => 'ID del empleado',
            'subtotal' => 'Subtotal',
            'descuento' => 'Descuento',
            'total' => 'Precio final',
        ];
    }

    /**
     * Gets query for [[DetallesCompras]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetallesCompras()
    {
        return $this->hasMany(DetallesCompra::className(), ['id_compra' => 'id_compra']);
    }

    /**
     * Gets query for [[Empleado]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEmpleado()
    {
        return $this->hasOne(DatosEmpleado::className(), ['id_datos_empleado' => 'id_empleado']);
    }

    /**
     * Gets query for [[Proveedor]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProveedor()
    {
        return $this->hasOne(Proveedor::className(), ['id_proveedor' => 'id_proveedor']);
    }
}
