<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
/* @var $model common\models\Viatico */
/* @var $form ActiveForm */
$this->title = 'agregar boleta';
$this->params['breadcrumbs'][] = ['label' => 'Empleados', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="empleado-createboleta">
    <h1><?= Html::encode($this->title) ?></h1>
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'monto_bono') ?>
    <?= $form->field($model, 'monto_viatico') ?>
    <?= $form->field($model, 'monto_anticipo') ?>
    <?= $form->field($model, 'monto_descuento') ?>
    <?= $form->field($model, 'fecha_elaboracion')->widget(\yii\jui\DatePicker::classname(), [
        'language' => 'es',
        'dateFormat' => 'yyyy-MM-dd',
        'options' => ['class' => 'form-control']
    ]) ?>

        <div class="form-group">
            <?= Html::submitButton('Crear Pago', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- empleado-createboleta -->
