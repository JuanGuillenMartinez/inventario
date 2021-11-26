<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "productos".
 *
 * @property int $id_producto ID del producto
 * @property int $id_marca_comercial ID de marca comercial
 * @property int $id_unidad_medida ID de presentación
 * @property string $descripcion Descripción
 * @property float $precio_unitario Precio
 * @property string $fecha_registro Fecha de registro
 * @property string $fecha_caducidad Fecha de caducidad
 * @property string|null $codigo_qr Código QR
 * @property string $codigo_barras Código de barras
 * @property string $url_imagen Imagen
 *
 * @property DetallesCompra[] $detallesCompras
 * @property DetallesVenta[] $detallesVentas
 * @property MarcaComercial $marcaComercial
 * @property ProductoPorCategoria[] $productosPorCategorias
 * @property ProductosSucursal[] $productosSucursals
 * @property UnidadMedida $unidadMedida
 */
class Producto extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'productos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_marca_comercial', 'id_unidad_medida', 'descripcion', 'precio_unitario', 'fecha_registro', 'fecha_caducidad', 'codigo_barras', 'url_imagen'], 'required'],
            [['id_marca_comercial', 'id_unidad_medida'], 'integer'],
            [['precio_unitario'], 'number'],
            [['fecha_registro', 'fecha_caducidad'], 'safe'],
            [['descripcion', 'codigo_qr', 'codigo_barras', 'url_imagen'], 'string', 'max' => 45],
            [['id_marca_comercial'], 'exist', 'skipOnError' => true, 'targetClass' => MarcaComercial::className(), 'targetAttribute' => ['id_marca_comercial' => 'id_marca_comercial']],
            [['id_unidad_medida'], 'exist', 'skipOnError' => true, 'targetClass' => UnidadMedida::className(), 'targetAttribute' => ['id_unidad_medida' => 'id_unidad_medida']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_producto' => 'ID del producto',
            'id_marca_comercial' => 'ID de marca comercial',
            'id_unidad_medida' => 'ID de presentación',
            'descripcion' => 'Descripción',
            'precio_unitario' => 'Precio',
            'fecha_registro' => 'Registro',
            'fecha_caducidad' => 'Caducidad',
            'codigo_qr' => 'Código QR',
            'codigo_barras' => 'Código de barras',
            'url_imagen' => 'Imagen',
            'marcaNombre' => 'Marca',
            'presentacion' => 'Presentacion'
        ];
    }

    /**
     * Gets query for [[DetallesCompras]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetallesCompras()
    {
        return $this->hasMany(DetallesCompra::className(), ['id_producto' => 'id_producto']);
    }

    /**
     * Gets query for [[DetallesVentas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetallesVentas()
    {
        return $this->hasMany(DetallesVenta::className(), ['id_producto' => 'id_producto']);
    }

    /**
     * Gets query for [[MarcaComercial]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMarcaComercial()
    {
        return $this->hasOne(MarcaComercial::className(), ['id_marca_comercial' => 'id_marca_comercial']);
    }

    /**
     * Gets query for [[ProductosPorCategorias]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProductosPorCategorias()
    {
        return $this->hasMany(ProductoPorCategoria::className(), ['id_producto' => 'id_producto']);
    }

    /**
     * Gets query for [[ProductosSucursals]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProductosSucursals()
    {
        return $this->hasMany(ProductosSucursal::className(), ['id_producto' => 'id_producto']);
    }

    /**
     * Gets query for [[UnidadMedida]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUnidadMedida()
    {
        return $this->hasOne(UnidadMedida::className(), ['id_unidad_medida' => 'id_unidad_medida']);
    }

    public function getMarcaNombre() {
        return $this->marcaComercial->nombre;
    }
    public function getPresentacion() {
        return $this->unidadMedida->medida;
    }
}
