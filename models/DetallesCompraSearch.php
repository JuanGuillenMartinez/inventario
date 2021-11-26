<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DetallesCompra;

/**
 * DetallesCompraSearch represents the model behind the search form of `app\models\DetallesCompra`.
 */
class DetallesCompraSearch extends DetallesCompra
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_detalle_compra', 'id_compra', 'id_producto', 'cantidad', 'descuento'], 'integer'],
            [['precio_unitario', 'subtotal'], 'number'],
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
        $query = DetallesCompra::find();

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
            'id_detalle_compra' => $this->id_detalle_compra,
            'id_compra' => $this->id_compra,
            'id_producto' => $this->id_producto,
            'precio_unitario' => $this->precio_unitario,
            'cantidad' => $this->cantidad,
            'subtotal' => $this->subtotal,
            'descuento' => $this->descuento,
        ]);

        return $dataProvider;
    }
}
