<?php
/**
 * Created by PhpStorm.
 * User: jose
 * Date: 31/07/2016
 * Time: 17:14
 */

namespace common\models;

use yii\base\Model;

class formularioboleta extends model
{
    public $monto_bono;
    public $monto_viatico;
    public $monto_anticipo;
    public $monto_descuento;
    public $fecha_elaboracion;

    public function rules()
    {
        return[
            [['monto_bono','monto_viatico','monto_anticipo','monto_descuento','fecha_elaboracion'],'required'],
        ];
    }
}
