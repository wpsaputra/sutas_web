<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Master */

$this->title = $model->kode_qr_code;
$this->params['breadcrumbs'][] = ['label' => 'Masters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

$this->registerJsFile(
    '@web/js/vertical-timeline.min.js',
    ['depends' => [\yii\web\JqueryAsset::className()]]
);

$js = "$('#myTimeline').verticalTimeline({
    startLeft: false,
    alternate: true,
    animate: 'fade',
    arrows: false
});";

$this->registerJS($js);


// print_r(ArrayHelper::toArray($model_batch));
?>
<div class="master-view">
    <div id="myTimeline">
        <div data-vtdate="February 2018">
            <i class="fa fa-music"></i>
            Validasi Dokumen
        </div>
        <div data-vtdate="March 2018">
            Entri Dokumen
        </div>
        <div data-vtdate="April 2018">
            Penerimaan IPDS
        </div>
        <div data-vtdate="Januari 2018">
            Penerimaan TU
        </div>
    </div>

    <!-- <div id="myTimeline">
        <div>
            <div data-vticon="true" data-vtdate="February 2016">
                <img src="favicon.ico">
                bnkjnjknjknknjnjknjknjk
            </div>
        </div>
        <div>
            My Content 2
        </div>
        <div>
            My Content 3
        </div>
    </div> -->

</div>
