<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Viatico */
/* @var $form ActiveForm */
//$this->title = "Reporte Vacaciones";
/*$this->params['breadcrumbs'][] = ['label' => 'Empleados', 'url' => ['index']];*/
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="col-xs-12">

    <table width="100%">
       	<tr>
        	<td colspan="2" style="text-align: right;"><div align="right" style="font-size: 9pt;"><h2>Super Pollo A la Broasted "EL RODEO"</h2></div><td>
        </tr>
        <tr>
        	<td colspan="2" style="text-align: right;"><div align="right" style="font-size: 9pt;"><h2>Solicitud y Autorizacion de Vacaciones</h2></div><td>
        </tr>
        <tr>
        	<td style="text-align: left;"><?= Html::img('@web/img/logo.jpg',['style'=>'width:100px;height:100px; margin-top:-12%;']);?></td>
        </tr>
    </table>
    <table>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr>
            <td style="font-size: 9pt;">
                Nombre de la Empresa:
            </td>
            <td style="font-size: 9pt;">
                <p><b>Super Pollo "EL RODEO"</b></p>
            </td>
            <td></td>
            <td style="font-size: 9pt;">
                Area y/o Departamento:
            </td>
            <td style="font-size: 9pt;">
                <p><b><?= $model->empleado->areatrabajoname; ?></b></p>
            </td>
        </tr>
    </table>    
    <table>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr>
            <td style="font-size: 9pt;">
                Nro de Empleado:
            </td>
            <td style="font-size: 9pt;">
                <p><b><?= $model->empleado_id; ?></b></p>    
            </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td style="font-size: 9pt;">
                Nombres:
            </td>
            <td style="font-size: 9pt;">
                <p><b><?= $model->empleado->fullname; ?></b></p>    
            </td>
        </tr>
    </table>
    <table>
        <tr>
            <td style="font-size: 9pt;">
                Fecha de Ingreso:
            </td>
            <td style="font-size: 9pt;">
                <p><b><?= $model->empleado->fechadeingreso; ?></b></p>    
            </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td style="font-size: 9pt;">
                Años de Servicios:
            </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            
            <td style="font-size: 9pt;">
                <p><b><?= $model->anoservicio;?> Años</b></p>    
            </td>
        </tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
    </table>
    <table>
        <tr>
            <td style="font-size: 9pt;">
                Dias que corresponden:
            </td>
            <td style="font-size: 9pt;">
                <p><b><?= $model->diasadisfrutar;?></b></p>    
            </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>  
            <td></td>
            <td style="font-size: 9pt;">
                Dias a Disfrutar:
            </td>
            <td style="font-size: 9pt;">
                <p><b><?= $model->diasadisfrutar;?></b></p>
            </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>

            <td style="font-size: 9pt;">
                Dias Pendientes:
            </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td style="font-size: 9pt;">
                <p><b><?= $model->diasadisfrutar;?></b></p>    
            </td>
        </tr>
        <tr></tr>
        <tr></tr>
        
        <tr></tr>
    </table>
    <table>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td style="font-size: 9pt;">
               Periodo
            </td>
            <td></td>
            <td></td>
            <td></td>  
            <td style="font-size: 9pt;">
                del
            </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td style="font-size: 9pt;">
                año
            </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td style="font-size: 9pt;">
                de
            </td>
            <td></td>
            <td></td>
            <td></td>
            <td style="font-size: 9pt;">
                <p><b><?= $model->periodo_inicial;?></b></p>    
            </td>
            <td></td>
            <td style="font-size: 9pt;">al</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td style="font-size: 9pt;">año</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td style="font-size: 9pt;">
                <p><b><?= $model->periodo_final;?></b></p>
            </td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
    </table>
    <table>
        <tr>
            <td style="font-size: 9pt;">
                Dias que inician sus vacaciones:
            </td>
        </tr>
        <tr>
    </table>
    <table>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>  
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>  
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>  
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td style="font-size: 9pt;">del</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td style="font-size: 9pt;">
                <p><b><?= $model->diainicio;?></b></p>    
            </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td style="font-size: 9pt;">de</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            
            <td></td>
            <td style="font-size: 9pt;">
                <p><b><?= $model->mesinicio;?></b></p>
            </td>
            
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td style="font-size: 9pt;">de</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            
            <td style="font-size: 9pt;">
                <p><b><?= $model->anoinicio;?></b></p>
            </td>
            <td></td>
            <td></td>
        </tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
    </table>
    <table>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>  
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>  
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>  
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td style="font-size: 9pt;">Al</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td style="font-size: 9pt;">
                <p><b><?= $model->diafinal; ?></b></p>    
            </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td style="font-size: 9pt;">de</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            
            <td></td>
            <td style="font-size: 9pt;">
                <p><b><?= $model->mesfinal;?></b></p>
            </td>
        
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td style="font-size: 9pt;">de</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            
            <td style="font-size: 9pt;">
                <p><b><?= $model->anofinal;?></b></p>
            </td>
            <td></td>
            <td></td>
        </tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
    </table>
    <table>
        <tr></tr>
        <tr></tr>
        <tr></tr><tr></tr>
        <tr></tr>
        <tr></tr><tr></tr>
        <tr></tr>
        <tr></tr><tr></tr>
        <tr></tr>
        <tr></tr><tr></tr>
        <tr></tr>
        <tr></tr><tr></tr>
        <tr></tr>
        <tr></tr>
        <tr>
            <td style="font-size: 9pt;">
                Fecha en que debera de presentarse a trabajar:
            </td>
            <td></td>
            <td></td>
            <td style="font-size: 9pt;">
                <p><b><?= $model->fecharegreso?></b></p>
            </td>
        </tr>
    </table>
    <table>
        <tr></tr>
        <tr></tr>
        <tr></tr><tr></tr>
        <tr></tr>
        <tr></tr><tr></tr>
        <tr></tr>
        <tr></tr><tr></tr>
        <tr></tr>
        <tr></tr><tr></tr>
        <tr></tr>
        <tr></tr><tr></tr>
        <tr></tr>
        <tr>
            <td style="font-size: 9pt;">
                Observaciones:
            </td>
            <td></td>
            <td></td>
            
        </tr>
        <tr>
            <td style="font-size: 9pt;">
                <p><b><?= $model->observaciones?></b></p>
            </td>
        </tr>
    </table>
    <table>
        <tr></tr>
        <tr></tr>
        <tr></tr><tr></tr>
        <tr></tr>
        <tr></tr><tr></tr>
        <tr></tr>
        <tr></tr><tr></tr>
        <tr></tr>
        <tr></tr><tr></tr>
        <tr></tr>
        <tr></tr><tr></tr>
        <tr></tr>
        <tr>
            <td style="font-size: 9pt;">
                Por el presente expreso mi conformidad de solicitar y gozar mis vacaciones de acuerdo a lo que establece el articulo de la ley general de trabajo, considerando los siguientes datos:
            </td>
            <td></td>
            <td></td>
            
        </tr>
        <tr>
            
        </tr>
    </table>
    <table>
        <tr></tr>
        <tr></tr>
        <tr></tr><tr></tr>
        <tr></tr>
        <tr></tr><tr></tr>
        <tr></tr>
        <tr></tr><tr></tr>
        <tr></tr>
        <tr></tr><tr></tr>
        <tr></tr>
        <tr></tr><tr></tr>
        <tr></tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td style="font-size: 9pt;">
                Santa Cruz, Bolivia <?= $model->fechaactual?>
            </td>
            <td></td>
            <td></td>
            
        </tr>
        <tr>
            
        </tr>
    </table>
    <table style="margin-top:7%;">
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr>
            <td style="font-size: 9pt;">___________________________</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td><td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>

            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td style="font-size: 9pt;">___________________________</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td><td></td>
            <td></td>

            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td style="font-size: 9pt;">___________________________</td>
            
        </tr>
        <tr>
            <td style="font-size: 9pt;">&nbsp;&nbsp;&nbsp;&nbsp;Firma del Empleado</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td><td></td>
            <td></td>
            <td></td>
            <td></td>

            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td style="font-size: 9pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sello</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td><td></td>
            <td></td>
            <td></td>
            <td></td>

            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td style="font-size: 9pt;">Firma del Gerente y/o Director</td>
        </tr>
    </table>
</div>
______________________________________________________________________________________________________
<div class="col-xs-12" style="margin-top:5%">
    <table width="100%">
        <tr>
            <td colspan="2" style="text-align: right;"><div align="right" style="font-size: 9pt;"><h2>Super Pollo A la Broasted "EL RODEO"</h2></div><td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: right;"><div align="right" style="font-size: 9pt;"><h2>Solicitud y Autorizacion de Vacaciones</h2></div><td>
        </tr>
        <tr>
            <td style="text-align: left;"><?= Html::img('@web/img/logo.jpg',['style'=>'width:100px;height:100px; margin-top:-12%;']);?></td>
        </tr>
    </table>
    <table>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr>
            <td style="font-size: 9pt;">
                Nombre de la Empresa:
            </td>
            <td style="font-size: 9pt;">
                <p><b>Super Pollo "EL RODEO"</b></p>
            </td>
            <td></td>
            <td style="font-size: 9pt;">
                Area y/o Departamento:
            </td>
            <td style="font-size: 9pt;">
                <p><b><?= $model->empleado->areatrabajoname; ?></b></p>
            </td>
        </tr>
    </table>    
    <table>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr>
            <td style="font-size: 9pt;">
                Nro de Empleado:
            </td>
            <td style="font-size: 9pt;">
                <p><b><?= $model->empleado_id; ?></b></p>    
            </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td style="font-size: 9pt;">
                Nombres:
            </td>
            <td style="font-size: 9pt;">
                <p><b><?= $model->empleado->fullname; ?></b></p>    
            </td>
        </tr>
    </table>
    <table>
        <tr>
            <td style="font-size: 9pt;">
                Fecha de Ingreso:
            </td>
            <td style="font-size: 9pt;">
                <p><b><?= $model->empleado->fechadeingreso; ?></b></p>    
            </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td style="font-size: 9pt;">
                Años de Servicios:
            </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            
            <td style="font-size: 9pt;">
                <p><b><?= $model->anoservicio;?> Años</b></p>    
            </td>
        </tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
    </table>
    <table>
        <tr>
            <td style="font-size: 9pt;">
                Dias que corresponden:
            </td>
            <td style="font-size: 9pt;">
                <p><b><?= $model->diasadisfrutar;?></b></p>    
            </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>  
            <td></td>
            <td style="font-size: 9pt;">
                Dias a Disfrutar:
            </td>
            <td style="font-size: 9pt;">
                <p><b><?= $model->diasadisfrutar;?></b></p>
            </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>

            <td style="font-size: 9pt;">
                Dias Pendientes:
            </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td style="font-size: 9pt;">
                <p><b><?= $model->diasadisfrutar;?></b></p>    
            </td>
        </tr>
        <tr></tr>
        <tr></tr>
        
        <tr></tr>
    </table>
    <table>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td style="font-size: 9pt;">
               Periodo
            </td>
            <td></td>
            <td></td>
            <td></td>  
            <td style="font-size: 9pt;">
                del
            </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td style="font-size: 9pt;">
                año
            </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td style="font-size: 9pt;">
                de
            </td>
            <td></td>
            <td></td>
            <td></td>
            <td style="font-size: 9pt;">
                <p><b><?= $model->periodo_inicial;?></b></p>    
            </td>
            <td></td>
            <td style="font-size: 9pt;">al</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td style="font-size: 9pt;">año</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td style="font-size: 9pt;">
                <p><b><?= $model->periodo_final;?></b></p>
            </td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
    </table>
    <table>
        <tr>
            <td style="font-size: 9pt;">
                Dias que inician sus vacaciones:
            </td>
        </tr>
        <tr>
    </table>
    <table>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>  
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>  
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>  
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td style="font-size: 9pt;">del</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td style="font-size: 9pt;">
                <p><b><?= $model->diainicio;?></b></p>    
            </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td style="font-size: 9pt;">de</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            
            <td></td>
            <td style="font-size: 9pt;">
                <p><b><?= $model->mesinicio;?></b></p>
            </td>
            
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td style="font-size: 9pt;">de</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            
            <td style="font-size: 9pt;">
                <p><b><?= $model->anoinicio;?></b></p>
            </td>
            <td></td>
            <td></td>
        </tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
    </table>
    <table>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>  
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>  
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>  
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td style="font-size: 9pt;">Al</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td style="font-size: 9pt;">
                <p><b><?= $model->diafinal; ?></b></p>    
            </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td style="font-size: 9pt;">de</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            
            <td></td>
            <td style="font-size: 9pt;">
                <p><b><?= $model->mesfinal;?></b></p>
            </td>
        
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td style="font-size: 9pt;">de</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            
            <td style="font-size: 9pt;">
                <p><b><?= $model->anofinal;?></b></p>
            </td>
            <td></td>
            <td></td>
        </tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
    </table>
    <table>
        <tr></tr>
        <tr></tr>
        <tr></tr><tr></tr>
        <tr></tr>
        <tr></tr><tr></tr>
        <tr></tr>
        <tr></tr><tr></tr>
        <tr></tr>
        <tr></tr><tr></tr>
        <tr></tr>
        <tr></tr><tr></tr>
        <tr></tr>
        <tr></tr>
        <tr>
            <td style="font-size: 9pt;">
                Fecha en que debera de presentarse a trabajar:
            </td>
            <td></td>
            <td></td>
            <td style="font-size: 9pt;">
                <p><b><?= $model->fecharegreso?></b></p>
            </td>
        </tr>
    </table>
    <table>
        <tr></tr>
        <tr></tr>
        <tr></tr><tr></tr>
        <tr></tr>
        <tr></tr><tr></tr>
        <tr></tr>
        <tr></tr><tr></tr>
        <tr></tr>
        <tr></tr><tr></tr>
        <tr></tr>
        <tr></tr><tr></tr>
        <tr></tr>
        <tr>
            <td style="font-size: 9pt;">
                Observaciones:
            </td>
            <td></td>
            <td></td>
            
        </tr>
        <tr>
            <td style="font-size: 9pt;">
                <p><b><?= $model->observaciones?></b></p>
            </td>
        </tr>
    </table>
    <table>
        <tr></tr>
        <tr></tr>
        <tr></tr><tr></tr>
        <tr></tr>
        <tr></tr><tr></tr>
        <tr></tr>
        <tr></tr><tr></tr>
        <tr></tr>
        <tr></tr><tr></tr>
        <tr></tr>
        <tr></tr><tr></tr>
        <tr></tr>
        <tr>
            <td style="font-size: 9pt;">
                Por el presente expreso mi conformidad de solicitar y gozar mis vacaciones de acuerdo a lo que establece el articulo de la ley general de trabajo, considerando los siguientes datos:
            </td>
            <td></td>
            <td></td>
            
        </tr>
        <tr>
            
        </tr>
    </table>
    <table>
        <tr></tr>
        <tr></tr>
        <tr></tr><tr></tr>
        <tr></tr>
        <tr></tr><tr></tr>
        <tr></tr>
        <tr></tr><tr></tr>
        <tr></tr>
        <tr></tr><tr></tr>
        <tr></tr>
        <tr></tr><tr></tr>
        <tr></tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td style="font-size: 9pt;">
                Santa Cruz, Bolivia <?= $model->fechaactual?>
            </td>
            <td></td>
            <td></td>
            
        </tr>
        <tr>
            
        </tr>
    </table>
    <table style="margin-top:7%;">
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr>
            <td style="font-size: 9pt;">___________________________</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td><td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>

            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td style="font-size: 9pt;">___________________________</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td><td></td>
            <td></td>

            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td style="font-size: 9pt;">___________________________</td>
            
        </tr>
        <tr>
            <td style="font-size: 9pt;">&nbsp;&nbsp;&nbsp;&nbsp;Firma del Empleado</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td><td></td>
            <td></td>
            <td></td>
            <td></td>

            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td style="font-size: 9pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sello</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td><td></td>
            <td></td>
            <td></td>
            <td></td>

            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td style="font-size: 9pt;">Firma del Gerente y/o Director</td>
        </tr>
    </table>
</div>