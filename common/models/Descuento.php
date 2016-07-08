<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
/**
 * This is the model class for table "descuento".
 *
 * @property integer $id
 * @property integer $empleado_id
 * @property double $monto
 * @property string $concepto
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $fecha_descuento
 */
class Descuento extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'descuento';
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
            [['empleado_id', 'monto', 'concepto', 'fecha_descuento'], 'required'],
            [['empleado_id'], 'integer'],
            [['monto'], 'number'],
            [['concepto'], 'string'],
            [['fecha_descuento'], 'safe'],
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
            'concepto' => 'Concepto',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'fecha_descuento' => 'Fecha Descuento',
        ];
    }
}
