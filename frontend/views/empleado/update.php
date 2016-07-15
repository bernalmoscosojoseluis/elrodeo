<?php

use yii\helpers\Html;
use yii\widgets\Pjax;
use yii\bootstrap\Modal;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $model common\models\Empleado */

$this->title = 'Actualizar Empleado: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Empleados', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="row">
<div class="empleado-actualizar">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php 
        Modal::begin([
                //'header'=>'<h1>Actualizar Area de Trabajo</h1>',
                'id'=>'modal',
                'size'=>'modal-lg',
            ]);
        echo "<div id='modalContent'></div>";
        Modal::end();
    ?>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
</div>
