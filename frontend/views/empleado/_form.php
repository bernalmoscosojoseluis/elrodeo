<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Areatrabajo;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $model common\models\Empleado */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="row">

<div class="empleado-form">

    <?php $form = ActiveForm::begin($model->isNewRecord ? ['options' => ['enctype' => 'multipart/form-data']]:[]); ?>

    <div class="col-lg-6"<?php echo $model->isNewRecord ? "" : " style='display:none;'";?>>
    <?= $form->field($model, 'CI')->textInput(['maxlength' => true]) ?>
    </div>
    
    <div class="col-lg-6">    
    <?= $form->field($model, 'nombres')->textInput(['maxlength' => true]) ?>
    </div>

    <div class="col-lg-6">    
    <?= $form->field($model, 'apellidos')->textInput(['maxlength' => true]) ?>
    </div>

    <div class="col-lg-6">    
    <?= $form->field($model, 'telefono')->textInput(['maxlength' => true]) ?>
    </div>

    <div class="col-lg-6">    
    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
    </div>

    <div class="col-lg-3">    
    
    <?= $form->field($model, 'areatrabajo_id')->dropDownList($model->areatrabajoList,['prompt'=>'seleccione area']) ?>
    </div>
    <div class="col-lg-3">
    <br>    
    <?= Html::button(Yii::t('app', 'Crear Area de Trabajo'), ['value'=>Url::toRoute(['areatrabajo/createajax']),'class' => 'btn btn-success','id'=>'modalButton']) ?>
    </div>

    <div class="col-lg-6"<?php echo $model->isNewRecord ? "" : " style='display:none;'";?>>
    <?= $form->field($model, 'ocupacion')->textInput(['maxlength' => true]) ?>
    </div>

    <div class="col-lg-6"<?php echo $model->isNewRecord ? "" : " style='display:none;'";?>>
    <?= $form->field($model, 'estadocivil')->textInput(['maxlength' => true]) ?>
    </div>

    <div class="col-lg-6"<?php echo $model->isNewRecord ? "" : " style='display:none;'";?>>
    <?= $form->field($model, 'fechaingreso')->widget(\yii\jui\DatePicker::classname(), [
    'language' => 'es',
    'dateFormat' => 'yyyy-MM-dd',
    'options' => ['class' => 'form-control']
    ]) ?>
    </div>
    
    <div class="col-lg-6">
    <?= $form->field($model, 'sueldomes')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-lg-6"<?= $model->isNewRecord ? "" : " style='display:none;'";?>>
    <?php echo $model->isNewRecord ? $form->field($model, 'imageFile')->fileInput(['maxlength' => true]) :""; ?>
    </div>
    <div class="col-lg-12">    
        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? 'Guardar Datos' : 'Actualizar Datos', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>
    </div>
</div>
    <?php ActiveForm::end(); ?>

</div>
