<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ProductosSucursal;

/**
 * ProductosSucursalSearch represents the model behind the search form of `app\models\ProductosSucursal`.
 */
class ProductosSucursalSearch extends ProductosSucursal
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_producto_sucursal', 'cantidad', 'id_producto', 'id_sucursal'], 'integer'],
            [['fecha_registro'], 'safe'],
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
        $query = ProductosSucursal::find();

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
            'id_producto_sucursal' => $this->id_producto_sucursal,
            'cantidad' => $this->cantidad,
            'fecha_registro' => $this->fecha_registro,
            'id_producto' => $this->id_producto,
            'id_sucursal' => $this->id_sucursal,
        ]);

        return $dataProvider;
    }
}
