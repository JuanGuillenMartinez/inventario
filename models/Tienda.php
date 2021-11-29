<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "tiendas".
 *
 * @property int $id_tienda ID
 * @property string $nombre_tienda Nombre
 * @property string $nombre_dueño Dueño
 *
 * @property Sucursal[] $sucursales
 */
class Tienda extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tiendas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre_tienda', 'nombre_dueño'], 'required'],
            [['nombre_tienda', 'nombre_dueño'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_tienda' => 'ID',
            'nombre_tienda' => 'Nombre',
            'nombre_dueño' => 'Dueño',
        ];
    }

    /**
     * Gets query for [[Sucursales]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSucursales()
    {
        return $this->hasMany(Sucursal::className(), ['id_tienda' => 'id_tienda']);
    }

    public static function getCurrentTienda() {
        $empleado = DatosEmpleado::find()->where(['id_user' => Yii::$app->user->identity->getId()])->one();
        if(isset($empleado)) {
            $tienda = Tienda::find()->where(['id_tienda' => $empleado->sucursal->tienda->id_tienda])->one();
            return $tienda; 
        }
        return null;
    }

    public static function getTiendaMap()
    {
        return ArrayHelper::map(Tienda::find()->all(), 'id_tienda', 'nombre_tienda');
    }
    
}
