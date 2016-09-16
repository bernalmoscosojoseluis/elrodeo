<?php

use yii\helpers\Html;

use yii\widgets\ActiveForm;


/* @var $this yii\web\View */
/* @var $model common\models\Empleado */

$this->title = 'agregar vacacion';
$this->params['breadcrumbs'][] = ['label' => 'Empleados', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vacaciones-create">

    
<h1><?= Html::encode($this->title) ?></h1>
<?php $form = ActiveForm::begin([
        'enableAjaxValidation' => true
        ]);?>

    <div class="col-lg-4">
    <?= $form->field($model, 'fecha_inicio_vacacion')->widget(\yii\jui\DatePicker::classname(), [
    'language' => 'es',
    'dateFormat' => 'yyyy-MM-dd',
    'options' => ['class' => 'form-control']
    ]) ?>
    </div>

    <div class="col-lg-4">
    <?= $form->field($model, 'fecha_final_vacacion')->widget(\yii\jui\DatePicker::classname(), [
    'language' => 'es',
    'dateFormat' => 'yyyy-MM-dd',
    'options' => ['class' => 'form-control']
    ]) ?>
    </div>
    <div class="col-lg-4">
    <?= $form->field($model, 'fecha_inicio_laboral')->widget(\yii\jui\DatePicker::classname(), [
    'language' => 'es',
    'dateFormat' => 'yyyy-MM-dd',
    'options' => ['class' => 'form-control']
    ]) ?>
    </div>
    <div class="col-lg-12">
    <?= $form->field($model, 'observaciones')->textarea(['rows' => 6]) ?>
    </div>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
