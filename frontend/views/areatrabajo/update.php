<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Areatrabajo */

$this->title = 'Update Areatrabajo: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Areatrabajos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="areatrabajo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
