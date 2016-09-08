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
    <div align="center">

     <?= Html::img( 'data:'. $model->formato . ';base64,'. $model->imagen,['width'=>300]); ?>

    </div>
    <br>
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
    <div class="col-lg-3">

    <br>
    <?= Html::button(Yii::t('app', 'Asignar Vacacciones'), ['value'=>Url::to(['empleado/createvacaciones','id'=>$model->id]),'class' => 'btn btn-success','id'=>'modalButton']) ?>
    </div>

<div style="margin-top:10%"></div>

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
 <table class="table table-striped table-bordered table-hover" id="dataTables-example">
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
                        <td><?= $vaca->diaretorno;?></td>
                        <td><?= $vaca->fecha_elaboracion_reporte;?></td>
                        <td><a id="vacacion<?= $vaca->id; ?>" class="btn btn-success" href="<?= Url::to(['empleado/reportevacaciones','vacacion_id'=>$vaca->id,'empleado_id'=>$model->id])?>">generar reporte</a></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
             </table>
</div>
