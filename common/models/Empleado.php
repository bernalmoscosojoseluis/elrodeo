<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\web\UploadedFile;
/**
 * This is the model class for table "empleado".
 *
 * @property integer $id
 * @property string $CI
 * @property string $nombres
 * @property string $apellidos
 * @property string $telefono
 * @property string $email
 * @property string $ocupacion
 * @property string $estadocivil
 * @property integer $elminado
 * @property string $fechaingreso
 * @property string $sueldomes
 * @property string $imagen
 * @property string $imagenombre
 * @property string $imagentamano
 * @property string $formato
 * @property integer $created_at
 * @property integer $updated_at
 */
class Empleado extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $imageFile;
    public static function tableName()
    {
        return 'empleado';
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
            [['CI', 'nombres', 'apellidos', 'telefono', 'email', 'ocupacion', 'estadocivil', 'fechaingreso', 'sueldomes'], 'required'],
            [['areatrabajo_id'], 'integer'],
            [['fechaingreso','formato','imagenombre','imagentamano'], 'safe'],
            [['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
            [['sueldomes'], 'number'],
            [['CI', 'telefono'], 'string', 'max' => 10],
            [['nombres', 'apellidos', 'email'], 'string', 'max' => 255],
            [['ocupacion', 'estadocivil'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'CI' => 'Carnet de Identidad',
            'nombres' => 'Nombres',
            'apellidos' => 'Apellidos',
            'areatrabajo_id' => 'Area de Trabajo',
            'telefono' => 'Telefono',
            'email' => 'Email',
            'ocupacion' => 'Ocupacion',
            'estadocivil' => 'Estado Civil',
            'elminado' => 'Elminado',
            'fechaingreso' => 'Fecha Ingreso',
            'sueldomes' => 'Sueldo Mensual',
            'imageFile' => 'Imagenes',
            
        ];
    }
    
}
