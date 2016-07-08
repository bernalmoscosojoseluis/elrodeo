<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Areatrabajo */

$this->title = 'Create Areatrabajo';
$this->params['breadcrumbs'][] = ['label' => 'Areatrabajos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="areatrabajo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
