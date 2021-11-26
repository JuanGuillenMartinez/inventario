<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Producto;

/**
 * ProductoSearch represents the model behind the search form of `app\models\Producto`.
 */
class ProductoSearch extends Producto
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_producto', 'id_marca_comercial', 'id_unidad_medida'], 'integer'],
            [['descripcion', 'fecha_registro', 'fecha_caducidad', 'codigo_qr', 'codigo_barras', 'url_imagen'], 'safe'],
            [['precio_unitario'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Producto::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_producto' => $this->id_producto,
            'id_marca_comercial' => $this->id_marca_comercial,
            'id_unidad_medida' => $this->id_unidad_medida,
            'precio_unitario' => $this->precio_unitario,
            'fecha_registro' => $this->fecha_registro,
            'fecha_caducidad' => $this->fecha_caducidad,
        ]);

        $query->andFilterWhere(['like', 'descripcion', $this->descripcion])
            ->andFilterWhere(['like', 'codigo_qr', $this->codigo_qr])
            ->andFilterWhere(['like', 'codigo_barras', $this->codigo_barras])
            ->andFilterWhere(['like', 'url_imagen', $this->url_imagen]);

        return $dataProvider;
    }
}
