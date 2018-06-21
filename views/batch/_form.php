<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Batch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="batch-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode_prop')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode_kab')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode_kec')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode_desa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode_bs')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_barcode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_hp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_posisi')->textInput() ?>

    <?= $form->field($model, 'jumlah_l1')->textInput() ?>

    <?= $form->field($model, 'jumlah_l2')->textInput() ?>

    <?= $form->field($model, 'date_terima')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
