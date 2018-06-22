<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use app\models\Posisi;
use PHPUnit\Framework\Constraint\Exception;

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

            'nbs',
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

            [
                'attribute' => 'jumlah_l1',
                'label' => 'Jumlah L1',
                'value' => function($model){
                    $item = ArrayHelper::toArray($model->batches);
                    ArrayHelper::multisort($item, ['date_terima'], [SORT_DESC]);
                    return print_r(reset($item)['jumlah_l1'], true);
            }],

            [
                'attribute' => 'jumlah_l2',
                'label' => 'Jumlah L2',
                'value' => function($model){
                    $item = ArrayHelper::toArray($model->batches);
                    ArrayHelper::multisort($item, ['date_terima'], [SORT_DESC]);
                    return print_r(reset($item)['jumlah_l2'], true);
            }],
            
            [
                'attribute' => 'last_position',
                'label' => 'Posisi Terakhir',
                'format' => 'raw',
                'value' => function($model){
                    $item = ArrayHelper::toArray($model->batches);
                    ArrayHelper::multisort($item, ['date_terima'], [SORT_DESC]);

                    $posisi =  ArrayHelper::map(Posisi::find()->all(),'id','posisi');
                    $id_posisi = print_r(reset($item)['id_posisi'], true);
                    
                    if(!$id_posisi){
                        // $posisi_name = 'Belum diterima';
                        $posisi_name = '<p style="color: #d9534f;">Belum diterima</p>';
                    }else{
                        $posisi_name = $posisi[$id_posisi].' ['.$id_posisi.']';
                    }

                    return print_r($posisi_name, true);
            }],

            // ['class' => 'yii\grid\ActionColumn'],

            [  
                'class' => 'yii\grid\ActionColumn',
                // 'contentOptions' => ['style' => 'width:260px;'],
                'header'=>'Actions',
                // 'template' => '{view} {delete}',
                'template' => '{view}',
                // 'buttons' => [
        
                //     'view' => function ($url, $model) {
                //         return Html::a('<span class="fa fa-search"></span>View', $url, [
                //                     'title' => Yii::t('app', 'View'),
                //                     'class'=>'btn btn-primary btn-xs',                                  
                //         ]);
                //     },
                // ],
        
                // 'urlCreator' => function ($action, $model, $key, $index) {
                //     if ($action === 'view') {
                //         $url ='/jobs/view?id='.$model->jobid;
                //         return $url;
                //     }
                // }
        
            ],



        ],
    ]); ?>
</div>
