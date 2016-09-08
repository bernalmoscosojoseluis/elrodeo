<?php
/**
 * Created by PhpStorm.
 * User: jose
 * Date: 09/09/2016
 * Time: 11:16
 */
namespace common\models;

use yii\base\Model;

class Boleta extends model
{
    public $fecha_inicio;
    public $fecha_final;

    public function rules()
    {
        return[
            [['fecha_inicio','fecha_final'],'required'],
        ];
    }
}