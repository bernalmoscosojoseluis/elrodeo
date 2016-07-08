<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
/**
 * This is the model class for table "vacaciones".
 *
 * @property integer $id
 * @property integer $empeado_id
 * @property string $fecha_ingreso
 * @property integer $años_servicio
 * @property integer $dias_disfrutar
 * @property string $fecha_inicio_vacacion
 * @property string $fecha_final_vacacion
 * @property string $fecha_elaboracion_reporte
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
            [['empeado_id', 'fecha_ingreso', 'años_servicio', 'dias_disfrutar', 'fecha_inicio_vacacion', 'fecha_final_vacacion', 'fecha_elaboracion_reporte', 'observaciones'], 'required'],
            [['empeado_id', 'años_servicio', 'dias_disfrutar'], 'integer'],
            [['fecha_ingreso', 'fecha_inicio_vacacion', 'fecha_final_vacacion', 'fecha_elaboracion_reporte'], 'safe'],
            [['observaciones'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'empeado_id' => 'Empeado ID',
            'fecha_ingreso' => 'Fecha Ingreso',
            'años_servicio' => 'Años Servicio',
            'dias_disfrutar' => 'Dias Disfrutar',
            'fecha_inicio_vacacion' => 'Fecha Inicio Vacacion',
            'fecha_final_vacacion' => 'Fecha Final Vacacion',
            'fecha_elaboracion_reporte' => 'Fecha Elaboracion Reporte',
            'observaciones' => 'Observaciones',

        ];
    }
}
