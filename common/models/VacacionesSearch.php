<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Vacaciones;
/**
 * This is the model class for table "vacaciones".
 *
 * @property integer $id
 * @property integer $empeado_id
 * @property string $fecha_inicio_vacacion
 * @property string $fecha_final_vacacion
 * @property string $fecha_elaboracion_reporte
 * @property string $observaciones
 * @property integer $created_at
 * @property integer $updated_at
 */
class VacacionesSearch extends Vacaciones
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['empleado_id',  'fecha_inicio_vacacion', 'fecha_final_vacacion', 'fecha_elaboracion_reporte', 'observaciones'], 'required'],
            [['empleado_id'], 'integer'],
            [[ 'fecha_inicio_vacacion', 'fecha_final_vacacion', 'fecha_elaboracion_reporte'], 'safe'],
            [['observaciones'], 'string'],
        ];
    }

    /**
     * @inheritdoc
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
            'id' => $this->id,
            'empleado_id' => $this->empleado_id,
            'fecha_inicio_vacacion' => $this->fecha_inicio_vacacion,
            'fecha_final_vacacion' => $this->fecha_final_vacacion,
            'fecha_elaboracion_reporte' => $this->fecha_elaboracion_reporte,
            'observaciones' => $this->observaciones,
        ]);

        $query->andFilterWhere(['like', 'id', $this->id])
            ->andFilterWhere(['like', 'empleado_id', $this->empleado_id])
            ->andFilterWhere(['like', 'fecha_inicio_vacacion', $this->fecha_inicio_vacacion])
            ->andFilterWhere(['like', 'fecha_final_vacacion', $this->fecha_final_vacacion])
            ->andFilterWhere(['like', 'fecha_elaboracion_reporte', $this->fecha_elaboracion_reporte])
            ->andFilterWhere(['like', 'observaciones', $this->observaciones]);

        return $dataProvider;
    }
}
