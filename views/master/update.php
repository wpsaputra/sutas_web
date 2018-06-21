<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Master */

$this->title = 'Update Master: ' . $model->kode_qr_code;
$this->params['breadcrumbs'][] = ['label' => 'Masters', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_qr_code, 'url' => ['view', 'id' => $model->kode_qr_code]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="master-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
