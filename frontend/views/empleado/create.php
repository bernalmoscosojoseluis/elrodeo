<?php

use yii\helpers\Html;
use yii\widgets\Pjax;
use yii\bootstrap\Modal;


/* @var $this yii\web\View */
/* @var $model common\models\Empleado */


$this->title = 'Nuevo Empleado';
$this->params['breadcrumbs'][] = ['label' => 'Empleados', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
<div class="empleado-create">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php 
        Modal::begin([
                //'header'=>'<h1>Crear Area de Trabajo</h1>',
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
