<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "sucursales".
 *
 * @property int $id_sucursal ID
 * @property int|null $id_tienda ID de tienda
 * @property string|null $nombre_sucursal Nombre
 * @property string $direccion Dirección
 * @property string $telefono_contacto Teléfono
 * @property string $hora_apertura Apertura
 * @property string $hora_cierre Cierre
 *
 * @property DatosEmpleado[] $datosEmpleados
 * @property ProductosSucursal[] $productosSucursals
 * @property Tienda $tienda
 */
class Sucursal extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sucursales';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_tienda'], 'integer'],
            [['direccion', 'telefono_contacto', 'hora_apertura', 'hora_cierre'], 'required'],
            [['hora_apertura', 'hora_cierre'], 'safe'],
            [['nombre_sucursal', 'direccion', 'telefono_contacto'], 'string', 'max' => 45],
            [['id_tienda'], 'exist', 'skipOnError' => true, 'targetClass' => Tienda::className(), 'targetAttribute' => ['id_tienda' => 'id_tienda']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_tienda' => 'ID tienda',
            'id_sucursal' => 'ID sucursal',
            'tiendaNombre' => 'Tienda',
            'nombre_sucursal' => 'Sucursal',
            'direccion' => 'Dirección',
            'telefono_contacto' => 'Teléfono',
            'hora_apertura' => 'Apertura',
            'hora_cierre' => 'Cierre',
        ];
    }

    /**
     * Gets query for [[DatosEmpleados]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDatosEmpleados()
    {
        return $this->hasMany(DatosEmpleado::className(), ['id_sucursal' => 'id_sucursal']);
    }

    /**
     * Gets query for [[ProductosSucursals]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProductosSucursals()
    {
        return $this->hasMany(ProductosSucursal::className(), ['id_sucursal' => 'id_sucursal']);
    }

    /**
     * Gets query for [[Tienda]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTienda()
    {
        return $this->hasOne(Tienda::className(), ['id_tienda' => 'id_tienda']);
    }

    public static function getCurrentSucursal() {
        $empleado = DatosEmpleado::find()->where(['id_user' => Yii::$app->user->identity->getId()])->one();
        if(isset($empleado)) {
            $sucursal = Sucursal::find()->where(['id_sucursal' => $empleado->sucursal->id_sucursal])->one();
            return $sucursal;
        }
        return null;
    }

    public function getInfoSucursal() {
        return $this->tienda->nombre_tienda . " - " . $this->nombre_sucursal;
    }

    public function getTiendaNombre() {
        return $this->tienda->nombre_tienda;
    }

    public static function getSucursalMap()
    {
        return ArrayHelper::map(Sucursal::find()->all(), 'id_sucursal', 'infoSucursal');
    }
}
