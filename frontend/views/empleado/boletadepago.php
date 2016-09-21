<?php
/**
 * Created by PhpStorm.
 * User: jose
 * Date: 09/09/2016
 * Time: 11:02
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
/* @var $model common\models\Boleta */
/* @var $form ActiveForm */
$this->title = 'Boleta';
$this->params['breadcrumbs'][] = ['label' => 'Empleados', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="empleado-createboletadepago">
    <h1><?= Html::encode($this->title) ?></h1>
    <?php $form = ActiveForm::begin([
        "method" => "post",
        "enableClientValidation" => true,
    ]); 
    ?>

    <div style="display:none;">
        <input type="text" name="empleado_id" value="<?php echo $empleado_id?>">
    </div>

    <?= $form->field($model, 'fecha_inicio')->widget(\yii\jui\DatePicker::classname(), [
        'language' => 'es',
        'dateFormat' => 'yyyy-MM-dd',
        'options' => ['class' => 'form-control']
    ]) ?>
    <?= $form->field($model, 'fecha_final')->widget(\yii\jui\DatePicker::classname(), [
        'language' => 'es',
        'dateFormat' => 'yyyy-MM-dd',
        'options' => ['class' => 'form-control']
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton('GenerarBoleta', ['class' => 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div>