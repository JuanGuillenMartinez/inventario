<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ventas".
 *
 * @property int $id_venta ID
 * @property int $id_cliente ID del cliente
 * @property int $id_empleado ID del empleado
 * @property float $subtotal Subtotal
 * @property float $descuento Descuento de venta
 * @property float $total Precio final
 *
 * @property Cliente $cliente
 * @property DetallesVenta[] $detallesVentas
 * @property Empleado $empleado
 */
class Venta extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ventas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_cliente', 'id_empleado', 'subtotal', 'descuento', 'total'], 'required'],
            [['id_cliente', 'id_empleado'], 'integer'],
            [['subtotal', 'descuento', 'total'], 'number'],
            [['id_cliente'], 'exist', 'skipOnError' => true, 'targetClass' => Cliente::className(), 'targetAttribute' => ['id_cliente' => 'id_cliente']],
            [['id_empleado'], 'exist', 'skipOnError' => true, 'targetClass' => Empleado::className(), 'targetAttribute' => ['id_empleado' => 'id_empleado']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_venta' => 'ID',
            'id_cliente' => 'ID del cliente',
            'id_empleado' => 'ID del empleado',
            'subtotal' => 'Subtotal',
            'descuento' => 'Descuento de venta',
            'total' => 'Precio final',
        ];
    }

    /**
     * Gets query for [[Cliente]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCliente()
    {
        return $this->hasOne(Cliente::className(), ['id_cliente' => 'id_cliente']);
    }

    /**
     * Gets query for [[DetallesVentas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetallesVentas()
    {
        return $this->hasMany(DetallesVenta::className(), ['id_venta' => 'id_venta']);
    }

    /**
     * Gets query for [[Empleado]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEmpleado()
    {
        return $this->hasOne(Empleado::className(), ['id_empleado' => 'id_empleado']);
    }
}
