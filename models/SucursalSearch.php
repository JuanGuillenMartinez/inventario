<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Sucursal;

/**
 * SucursalSearch represents the model behind the search form of `app\models\Sucursal`.
 */
class SucursalSearch extends Sucursal
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_sucursal', 'id_tienda'], 'integer'],
            [['nombre_sucursal', 'direccion', 'telefono_contacto', 'hora_apertura', 'hora_cierre'], 'safe'],
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
        $tienda = Tienda::getCurrentTienda();
        $query = isset($tienda) ? Sucursal::find()-> where(['id_tienda' => $tienda->id_tienda]) : Sucursal::find();

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
            'id_sucursal' => $this->id_sucursal,
            'id_tienda' => $this->id_tienda,
            'hora_apertura' => $this->hora_apertura,
            'hora_cierre' => $this->hora_cierre,
        ]);

        $query->andFilterWhere(['like', 'nombre_sucursal', $this->nombre_sucursal])
            ->andFilterWhere(['like', 'direccion', $this->direccion])
            ->andFilterWhere(['like', 'telefono_contacto', $this->telefono_contacto]);

        return $dataProvider;
    }
}
