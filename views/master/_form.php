<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Master */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="master-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode_qr_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'prop')->textInput() ?>

    <?= $form->field($model, 'kab')->textInput() ?>

    <?= $form->field($model, 'kec')->textInput() ?>

    <?= $form->field($model, 'desa')->textInput() ?>

    <?= $form->field($model, 'nbs')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'namaprop')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'namakab')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'namakec')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'namadesa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'klas')->textInput() ?>

    <?= $form->field($model, 'nks_sutas')->textInput() ?>

    <?= $form->field($model, 'j_rutatani')->textInput() ?>

    <?= $form->field($model, 'strata')->textInput() ?>

    <?= $form->field($model, 'ket_strata')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'j_ruta')->textInput() ?>

    <?= $form->field($model, 'kd_mtd')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'metode')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
