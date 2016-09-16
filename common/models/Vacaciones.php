<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
/**
 * This is the model class for table "vacaciones".
 *
 * @property integer $id
 * @property integer $empeado_id
 * @property string $fecha_inicio_vacacion
 * @property string $fecha_final_vacacion
 * @property string $fecha_inicio_laboral
 * @property string $fecha_elaboracion_reporte
 * @property string $periodo_inicial
 * @property string $periodo_final
 * @property string $observaciones
 * @property integer $created_at
 * @property integer $updated_at
 */
class Vacaciones extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'vacaciones';
    }
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['empleado_id',  'fecha_inicio_vacacion', 'fecha_final_vacacion', 'fecha_elaboracion_reporte','fecha_inicio_laboral','periodo_inicial','periodo_final'], 'required','message'=>'{attribute} esta vacio'],
            [['empleado_id'], 'integer'],
            [[ 'fecha_inicio_vacacion', 'fecha_final_vacacion', 'fecha_elaboracion_reporte'], 'safe'],
            [['observaciones'], 'string'],
            [['periodo_inicial','periodo_final'],'integer','min'=>1900,'max'=>2070],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'empleado_id' => 'Empeado ID',
            'fecha_inicio_vacacion' => 'Fecha Inicio Vacacion',
            'fecha_final_vacacion' => 'Fecha Final Vacacion',
            'fecha_inicio_laboral' => 'Fecha Inicio Laboral',
            'periodo_inicial'=>'Periodo Inicial',
            'periodo_final'=>'Periodo Final',
            'fecha_elaboracion_reporte' => 'Fecha Elaboracion Reporte',
            'observaciones' => 'Observaciones',

        ];
    }
    public function getDiasadisfrutar()
    {
        $s=date('d',strtotime($this->fecha_inicio_vacacion));
        $d=date('d',strtotime($this->fecha_final_vacacion));
        return $d-$s;
    }
}
