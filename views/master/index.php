<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MasterSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Masters';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="master-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Master', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode_qr_code',
            'prop',
            'kab',
            'kec',
            'desa',

            //'nbs',
            //'namaprop',
            //'namakab',
            //'namakec',
            //'namadesa',
            //'klas',
            //'nks_sutas',
            //'j_rutatani',
            //'strata',
            //'ket_strata',
            //'j_ruta',
            //'kd_mtd',
            //'metode',
            // 'batches.id_posisi',
            
            // [
            //     'attribute' => 'desa',
            //     'label' => 'Desa',
            //     'value' => 'batches.id_posisi'
            // ],

            // [
            //     'label' => 'Components',
            //     'value' => function ($model) {
            //         $components = ArrayHelper::map($model->components, 'id', 'name');
            //         $components = array_map(function ($id, $name) {
            //             return Html::a($name, ['/component/view', 'id' => $id]);
            //         }, array_keys($components), $components);
            //         return implode(', ', $components);
            //     },
            //     'format' => 'raw'
            // ],

            ['attribute' => 'Posisi Terakhir',
            'value' => function($model){
                $item = ArrayHelper::toArray($model->batches);
                // $item = ArrayHelper::multisort($item, ['date_terima'], ['SORT_DESC']);
                // $item = ArrayHelper::multisort($item, ['date_terima'], [SORT_DESC]);;
                ArrayHelper::multisort($item, ['date_terima'], [SORT_DESC]);
                // return $item[0][id_posisi];
                // return json_encode($item);
                // return implode("|", $item);
                
                // return print_r($item[0]['id_posisi'], true);;
                // return print_r($item, true);;
                
                return print_r(reset($item)['id_posisi'], true);;


                // $items = [];
                // foreach($model->batches as $batch){
                //     $items[] = $batch->id_posisi;
                // }
                // return implode(', ', $items);
            }],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
