<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "datos_empleados".
 *
 * @property int $id_datos_empleado ID
 * @property int $id_user User
 * @property int $id_sucursal Sucursal
 * @property int $id_puesto Puesto laboral
 * @property string $nombre Nombre
 * @property string $apellido_paterno Apellido paterno
 * @property string $apellido_materno Apellido Materno
 * @property string $direccion Dirección
 * @property string $numero_telefonico Teléfono
 * @property string $nacimiento Fecha de nacimiento
 *
 * @property Compra[] $compras
 * @property PuestoLaboral $puesto
 * @property Sucursal $sucursal
 * @property User $user
 * @property Venta[] $ventas
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
            [['id_sucursal', 'id_puesto', 'nombre', 'apellido_paterno', 'apellido_materno', 'direccion', 'numero_telefonico', 'nacimiento'], 'required'],
            [['id_user', 'id_sucursal', 'id_puesto'], 'integer'],
            [['nacimiento'], 'safe'],
            [['nombre', 'apellido_paterno', 'apellido_materno', 'direccion', 'numero_telefonico'], 'string', 'max' => 45],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id_user' => 'id']],
            [['id_sucursal'], 'exist', 'skipOnError' => true, 'targetClass' => Sucursal::className(), 'targetAttribute' => ['id_sucursal' => 'id_sucursal']],
            [['id_puesto'], 'exist', 'skipOnError' => true, 'targetClass' => PuestoLaboral::className(), 'targetAttribute' => ['id_puesto' => 'id_puesto_laboral']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_datos_empleado' => 'ID',
            'id_user' => 'User',
            'id_sucursal' => 'Sucursal',
            'id_puesto' => 'Puesto laboral',
            'nombre' => 'Nombre',
            'apellido_paterno' => 'Apellido paterno',
            'apellido_materno' => 'Apellido Materno',
            'direccion' => 'Dirección',
            'numero_telefonico' => 'Teléfono',
            'nacimiento' => 'Fecha de nacimiento',
            'nombreCompleto' => 'Nombre completo',
            'sucursalNombre' => 'Sucursal',
            'puestoNombre' => 'Puesto'
        ];
    }

    /**
     * Gets query for [[Compras]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCompras()
    {
        return $this->hasMany(Compra::className(), ['id_empleado' => 'id_datos_empleado']);
    }

    /**
     * Gets query for [[Puesto]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPuesto()
    {
        return $this->hasOne(PuestoLaboral::className(), ['id_puesto_laboral' => 'id_puesto']);
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
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'id_user']);
    }

    /**
     * Gets query for [[Ventas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getVentas()
    {
        return $this->hasMany(Venta::className(), ['id_empleado' => 'id_datos_empleado']);
    }

    public static function getCurrentEmpleado() {
        $user = Yii::$app->user;
        return isset($user) ? DatosEmpleado::find()->where(['id_user' => $user->id])->one() : null;
    }

    public function getIdEmpleado() {
        return DatosEmpleado::getCurrentEmpleado()->id_datos_empleado;
    }

    public function getNombreCompleto() {
        return $this->nombre . " " . $this->apellido_paterno . " " . $this->apellido_materno;
    }

    public function getSucursalNombre() {
        return $this->sucursal->nombre_sucursal;
    }

    public function getPuestoNombre() {
        return $this->puesto->nombre_puesto;
    }

}
