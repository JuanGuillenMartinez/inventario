<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PuestoLaboral;

/**
 * PuestoLaboralSearch represents the model behind the search form of `app\models\PuestoLaboral`.
 */
class PuestoLaboralSearch extends PuestoLaboral
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_puesto_laboral'], 'integer'],
            [['nombre_puesto'], 'safe'],
            [['salario'], 'number'],
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
        $query = PuestoLaboral::find();

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
            'id_puesto_laboral' => $this->id_puesto_laboral,
            'salario' => $this->salario,
        ]);

        $query->andFilterWhere(['like', 'nombre_puesto', $this->nombre_puesto]);

        return $dataProvider;
    }
}
