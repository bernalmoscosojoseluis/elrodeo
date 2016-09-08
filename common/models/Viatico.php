<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
/**
 * This is the model class for table "viatico".
 *
 * @property integer $id
 * @property integer $empleado_id
 * @property double $monto
 * @property integer $created_at
 * @property integer $updated_at
 */
class Viatico extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'viatico';
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
            [['empleado_id', 'monto'], 'required'],
            [['empleado_id'], 'integer'],
            [['monto'], 'number'],
            [['fecha_viatico'], 'safe'],
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
            'monto' => 'Monto Viatico',
            'fecha_viatico' => 'fecha viatico',
        ];
    }
}
