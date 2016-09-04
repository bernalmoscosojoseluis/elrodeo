<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
/**
 * This is the model class for table "anticipo".
 *
 * @property integer $id
 * @property integer $empleado_id
 * @property double $monto
 * @property string $fecha_anticipo
 * @property integer $created_at
 * @property integer $updated_at
 */
class Anticipo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'anticipo';
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
            [['empleado_id', 'monto', 'fecha_anticipo'], 'required'],
            [['empleado_id'], 'integer'],
            [['monto'], 'number'],
            [['fecha_anticipo'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'empleado_id' => 'Empleado ID',
            'monto' => 'Monto Anticipo',
            'fecha_anticipo' => 'Fecha Anticipo',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
