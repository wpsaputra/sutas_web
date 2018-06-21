<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BatchSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Batches';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="batch-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Batch', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'kode_prop',
            'kode_kab',
            'kode_kec',
            'kode_desa',
            //'kode_bs',
            'id_barcode',
            //'no_hp',
            //'id_posisi',
            //'jumlah_l1',
            //'jumlah_l2',
            //'date_terima',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
