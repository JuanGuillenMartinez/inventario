<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Venta;

/**
 * VentaSearch represents the model behind the search form of `app\models\Venta`.
 */
class VentaSearch extends Venta
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_venta', 'id_cliente', 'id_empleado'], 'integer'],
            [['subtotal', 'descuento', 'total'], 'number'],
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
        $query = Venta::find();

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
            'id_venta' => $this->id_venta,
            'id_cliente' => $this->id_cliente,
            'id_empleado' => $this->id_empleado,
            'subtotal' => $this->subtotal,
            'descuento' => $this->descuento,
            'total' => $this->total,
        ]);

        return $dataProvider;
    }
}
