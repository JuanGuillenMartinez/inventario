<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DatosEmpleado;

/**
 * DatosEmpleadoSearch represents the model behind the search form of `app\models\DatosEmpleado`.
 */
class DatosEmpleadoSearch extends DatosEmpleado
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_datos_empleado', 'id_user', 'id_sucursal', 'id_puesto'], 'integer'],
            [['nombre', 'apellido_paterno', 'apellido_materno', 'direccion', 'numero_telefonico', 'nacimiento'], 'safe'],
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
        $sucursal = Sucursal::getCurrentSucursal();
        $query = isset($sucursal) ? DatosEmpleado::find()->where(['id_sucursal' => $sucursal->id_sucursal]) : DatosEmpleado::find();
        
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
            'id_datos_empleado' => $this->id_datos_empleado,
            'id_user' => $this->id_user,
            'id_sucursal' => $this->id_sucursal,
            'id_puesto' => $this->id_puesto,
            'nacimiento' => $this->nacimiento,
        ]);

        $query->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'apellido_paterno', $this->apellido_paterno])
            ->andFilterWhere(['like', 'apellido_materno', $this->apellido_materno])
            ->andFilterWhere(['like', 'direccion', $this->direccion])
            ->andFilterWhere(['like', 'numero_telefonico', $this->numero_telefonico]);

        return $dataProvider;
    }
}
