<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Empleado */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Empleados', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    
<div class="empleado-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['actualizar', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?php /*echo Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ])*/ ?>
    </p>
    
    <div align="center">
       
     <?= Html::img( 'data:'. $model->formato . ';base64,'. $model->imagen,['width'=>300]); ?>
        
    </div>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
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


</div>

</div>
