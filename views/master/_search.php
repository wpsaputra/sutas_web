<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MasterSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="master-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'kode_qr_code') ?>

    <?= $form->field($model, 'prop') ?>

    <?= $form->field($model, 'kab') ?>

    <?= $form->field($model, 'kec') ?>

    <?= $form->field($model, 'desa') ?>

    <?php // echo $form->field($model, 'nbs') ?>

    <?php // echo $form->field($model, 'namaprop') ?>

    <?php // echo $form->field($model, 'namakab') ?>

    <?php // echo $form->field($model, 'namakec') ?>

    <?php // echo $form->field($model, 'namadesa') ?>

    <?php // echo $form->field($model, 'klas') ?>

    <?php // echo $form->field($model, 'nks_sutas') ?>

    <?php // echo $form->field($model, 'j_rutatani') ?>

    <?php // echo $form->field($model, 'strata') ?>

    <?php // echo $form->field($model, 'ket_strata') ?>

    <?php // echo $form->field($model, 'j_ruta') ?>

    <?php // echo $form->field($model, 'kd_mtd') ?>

    <?php // echo $form->field($model, 'metode') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
