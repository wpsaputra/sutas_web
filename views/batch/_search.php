<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BatchSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="batch-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'kode_prop') ?>

    <?= $form->field($model, 'kode_kab') ?>

    <?= $form->field($model, 'kode_kec') ?>

    <?= $form->field($model, 'kode_desa') ?>

    <?php // echo $form->field($model, 'kode_bs') ?>

    <?php // echo $form->field($model, 'id_barcode') ?>

    <?php // echo $form->field($model, 'no_hp') ?>

    <?php // echo $form->field($model, 'id_posisi') ?>

    <?php // echo $form->field($model, 'jumlah_l1') ?>

    <?php // echo $form->field($model, 'jumlah_l2') ?>

    <?php // echo $form->field($model, 'date_terima') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
