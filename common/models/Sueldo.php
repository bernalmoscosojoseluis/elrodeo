<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
/**
 * This is the model class for table "sueldo".
 *
 * @property integer $id
 * @property integer $empleado_id
 * @property double $monto
 * @property integer $created_at
 * @property integer $updated_at
 */
class Sueldo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sueldo';
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
            'monto' => 'Monto',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
