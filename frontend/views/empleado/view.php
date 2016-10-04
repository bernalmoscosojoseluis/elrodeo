<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\bootstrap\Modal;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $model common\models\Empleado */

$this->title = $model->nombres;
/*$this->params['breadcrumbs'][] = ['label' => 'Empleados', 'url' => ['index']];*/
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">

<div class="empleado-view">
    <h1><?= Html::encode($this->title) ?></h1>
    <p>
    </p>
    <div class="col-lg-12" align="center">

     <?= Html::img( 'data:'. $model->formato . ';base64,'. $model->imagen,['width'=>300]); ?>

    </div>
    <br>
    <div class="col-lg-12">
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            'CI',
            'nombres',
            'apellidos',
            'telefono',
            'email:email',
            'ocupacion',
            'estadocivil',
            'fechaingreso',
            'sueldomes',

        ],
        'options'=>['class'=>'table table-striped table-hover detail-view'],
    ]) ?>
<<<<<<< 906f66f113c2b8447c606cffdf66b4e628939413
<div class="col-lg-12">
    <div class="col-lg-3">
    <?= Html::button(Yii::t('app', 'Asignar Vacaciones'), ['value'=>Url::to(['empleado/createvacaciones','id'=>$model->id]),'class' => 'btn btn-success','id'=>'modalButton']) ?>
=======
>>>>>>> algunas actualizaciones
    </div>
    <div class="col-lg-12" align="center">
    <?= Html::button(Yii::t('app', 'Asignar Vacacciones'), ['value'=>Url::to(['empleado/createvacaciones','id'=>$model->id]),'class' => 'btn btn-success','id'=>'modalButton']) ?>
    
        <?= Html::button(Yii::t('app', 'Dar dinero'), ['value'=>Url::to(['empleado/createboleta','id'=>$model->id]),'class' => 'btn btn-success','id'=>'modalButton1']) ?>
    
        
        <?= Html::button(Yii::t('app', 'boleta de pago'), ['value'=>Url::to(['empleado/createboletadepago','id'=>$model->id]),'class' => 'btn btn-success','id'=>'modalButton2']) ?>
    
        
        <a class="btn btn-success" href="<?= Url::to(['empleado/reportefiniquito','id'=>$model->id])?>">Finiquito</a>
    </div>
    



</div>

<?php
        Modal::begin([
                //'header'=>'<h1>Actualizar Area de Trabajo</h1>',
                'id'=>'modal',
                'size'=>'modal-lg',
            ]);
        echo "<div id='modalContent'></div>";
        Modal::end();
    ?>
<div style="margin-top:10%"></div>

    <div class="col-lg-12">
 <table class="table table-responsive" id="dataTables-example">
                <thead>
                    <tr>
                      <th>Fecha Ingreso</th>
                      <th>Dias a Disfrutar</th>
                      <th>Fecha Inicial Vacaciones</th>
                      <th>Fecha Final Vacaciones</th>
                      <th>Dia de Inicio Labores</th>
                      <th>Fecha Elaboracion de Reporte</th>
                      <th>Accion</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($listado as $vaca){
                        ?>
                        <tr>
                        <td><?= $model->fechaingreso; ?></td>
                        <td><?= $vaca->diasadisfrutar;?></td>
                        <td><?= $vaca->fecha_inicio_vacacion;?></td>
                        <td><?= $vaca->fecha_final_vacacion;?></td>
                        <td><?= $vaca->fecha_inicio_laboral;?></td>
                        <td><?= $vaca->fecha_elaboracion_reporte;?></td>
                        <td><a class="btn btn-success" href="<?= Url::to(['empleado/reportevacaciones','vacacion_id'=>$vaca->id])?>">Imprimir</a>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
             </table>
             </div>
    <?php
    Modal::begin([
        'id'=>'modal1',
        'size'=>'modal-lg',
    ]);
    echo "<div id='modalContent1'></div>";
    Modal::end();
    ?>

    <?php
    Modal::begin([
        'id'=>'modal2',
        'size'=>'modal-lg',
    ]);
    echo "<div id='modalContent2'></div>";
    Modal::end();
    ?>

</div>
