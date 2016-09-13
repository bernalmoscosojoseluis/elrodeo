<?php

use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Viatico */
/* @var $form ActiveForm */
?>
<div class="empleado-createreporte">
    <?php $form = ActiveForm::begin([
        "method"=>"get",
        "enableClientValidation"=>true,
    ]); ?>
    <?php ActiveForm::end(); ?>
    <address>
        <strong style="color: orange">Pollo el RODEO, LTDA.</strong><br>
        El mejor sabor, a tu alcanze<br>
        Rotonda 2do anillo, CA 94103<br>
        <abbr title="Phone">Phone:</abbr> (123) 456-7890
    </address>
    <h2 align="center">Boleta de Pago</h2>
    <table cellpadding="3" cellspacing="0" style="font-family: arial; font-size: 12px;text-align:left;width : 100%;">
        <?php foreach ($model5 as $row5):?>      
        <tr>
            <td>Cedula :</td>
            <td><?= $row5->CI ?></td>
        </tr>
        <tr>
            <td>Nombre :</td>
            <td><?= $row5->nombres ?></td>
        </tr>
        <tr>
            <td>Apellido :</td>
            <td><?= $row5->apellidos ?></td>
        </tr>
        <tr>
            <td>Ocupacion :</td>
            <td><?= $row5->ocupacion ?></td>
        </tr>
        <tr>
            <td>Sueldo :</td>
            <td><?= $row5->sueldomes ?></td>
        </tr>
        <?php endforeach ?>
    </table>
    <table class="table table-bordered" width="100%">
        <tr>
            <th width="16.666666666667%">Anticipo</th>
            <th width="16.666666666667%">Bono</th>
            <th width="16.666666666667%">Descuento</th>
            <th width="16.666666666667%">Viatico</th>
        </tr>
        <?php foreach ($model as $row):?>
            <?php foreach ($model1 as $row1):?>
                <?php foreach ($model2 as $row2):?>
                    <?php foreach ($model3 as $row3):?>
            <tr>
                <td align="center"><?= $row->monto?></td>
                <td align="center"><?= $row1->monto?></td>
                <td align="center"><?= $row2->monto?></td>
                <td align="center"><?= $row3->monto?></td>
            </tr>
                    <?php endforeach ?>
                <?php endforeach ?>
            <?php endforeach ?>
        <?php endforeach ?>
    </table>
    <h2 align="center">___________________________________________________________</h2>
    <table class="table table-bordered" width="100%">
        <tr>
            <th width="25%">Liquido Pagable: <?=$acu?>bs</th>
        </tr>
    </table>
    <br>
    <br>
    <br>
    <br>
    <address>
        <strong style="color: orange">Pollo el RODEO, LTDA.</strong><br>
        El mejor sabor, a tu alcanze<br>
        Rotonda 2do anillo, CA 94103<br>
        <abbr title="Phone">Phone:</abbr> (123) 456-7890
    </address>
    <h2 align="center">Boleta de Pago</h2>
    <table cellpadding="3" cellspacing="0" style="font-family: arial; font-size: 12px;text-align:left;width : 100%;">
        <?php foreach ($model5 as $row5):?>
            <tr>
                <td>Cedula :</td>
                <td><?= $row5->CI ?></td>
            </tr>
            <tr>
                <td>Nombre :</td>
                <td><?= $row5->nombres ?></td>
            </tr>
            <tr>
                <td>Apellido :</td>
                <td><?= $row5->apellidos ?></td>
            </tr>
            <tr>
                <td>Ocupacion :</td>
                <td><?= $row5->ocupacion ?></td>
            </tr>
            <tr>
                <td>Sueldo :</td>
                <td><?= $row5->sueldomes ?></td>
            </tr>
        <?php endforeach ?>
    </table>
    <table class="table table-bordered" width="100%">
        <tr>
            <th width="16.666666666667%">Anticipo</th>
            <th width="16.666666666667%">Bono</th>
            <th width="16.666666666667%">Descuento</th>
            <th width="16.666666666667%">Viatico</th>
        </tr>
        <?php foreach ($model as $row):?>
            <?php foreach ($model1 as $row1):?>
                <?php foreach ($model2 as $row2):?>
                    <?php foreach ($model3 as $row3):?>
                        <tr>
                            <td align="center"><?= $row->monto?></td>
                            <td align="center"><?= $row1->monto?></td>
                            <td align="center"><?= $row2->monto?></td>
                            <td align="center"><?= $row3->monto?></td>
                        </tr>
                    <?php endforeach ?>
                <?php endforeach ?>
            <?php endforeach ?>
        <?php endforeach ?>
    </table>
    <h2 align="center">___________________________________________________________</h2>
    <table class="table table-bordered" width="100%">
        <tr>
            <th width="25%">Liquido Pagable Total: <?=$acu?>bs</th>
        </tr>
    </table>
</div><!-- empleado-createboleta -->