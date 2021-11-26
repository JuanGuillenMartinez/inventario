<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Empleado;

/**
 * EmpleadoSearch represents the model behind the search form of `app\models\Empleado`.
 */
class EmpleadoSearch extends Empleado
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_empleado', 'id_sucursal', 'id_datos_empleado', 'id_puesto_laboral', 'id_user', 'retardos'], 'integer'],
            [['check_in', 'check_out'], 'safe'],
            [['aumento', 'descuento'], 'number'],
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
        $query = Empleado::find();

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
            'id_empleado' => $this->id_empleado,
            'id_sucursal' => $this->id_sucursal,
            'id_datos_empleado' => $this->id_datos_empleado,
            'id_puesto_laboral' => $this->id_puesto_laboral,
            'id_user' => $this->id_user,
            'check_in' => $this->check_in,
            'check_out' => $this->check_out,
            'aumento' => $this->aumento,
            'retardos' => $this->retardos,
            'descuento' => $this->descuento,
        ]);

        return $dataProvider;
    }
}
