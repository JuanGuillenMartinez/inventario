<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DetallesVenta;

/**
 * DetallesVentaSearch represents the model behind the search form of `app\models\DetallesVenta`.
 */
class DetallesVentaSearch extends DetallesVenta
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_detalle_venta', 'id_venta', 'id_producto', 'cantidad'], 'integer'],
            [['precio_total'], 'number'],
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
        $query = DetallesVenta::find();

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
            'id_detalle_venta' => $this->id_detalle_venta,
            'id_venta' => $this->id_venta,
            'id_producto' => $this->id_producto,
            'precio_total' => $this->precio_total,
            'cantidad' => $this->cantidad,
        ]);

        return $dataProvider;
    }
}
