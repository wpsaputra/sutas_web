<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Master */

$this->title = $model->kode_qr_code;
$this->params['breadcrumbs'][] = ['label' => 'Masters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="master-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->kode_qr_code], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->kode_qr_code], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'kode_qr_code',
            'prop',
            'kab',
            'kec',
            'desa',
            'nbs',
            'namaprop',
            'namakab',
            'namakec',
            'namadesa',
            'klas',
            'nks_sutas',
            'j_rutatani',
            'strata',
            'ket_strata',
            'j_ruta',
            'kd_mtd',
            'metode',
        ],
    ]) ?>

</div>
