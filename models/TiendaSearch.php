<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Tienda;

/**
 * TiendaSearch represents the model behind the search form of `app\models\Tienda`.
 */
class TiendaSearch extends Tienda
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_tienda'], 'integer'],
            [['nombre_tienda', 'nombre_dueño'], 'safe'],
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
        $query = isset($tienda) ? Tienda::find()->where(['id_tienda' => $tienda->id_tienda]) : Tienda::find();        

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
            'id_tienda' => $this->id_tienda,
        ]);

        $query->andFilterWhere(['like', 'nombre_tienda', $this->nombre_tienda])
            ->andFilterWhere(['like', 'nombre_dueño', $this->nombre_dueño]);

        return $dataProvider;
    }
}
