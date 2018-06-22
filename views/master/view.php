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

$array_posisi = array(1=>'Penerimaan TU', 2=>'Penerimaan IPDS', 3=>'Entri Dokumen', 4=>'Validasi Dokumen', 5=>'-');
$array_quote = array(1=>'Tahapan penerimaan dokumen SUTAS dari kabupaten oleh TU Provinsi', 2=>'Tahapan penerimaan dokumen SUTAS dari TU Provinsi ke IPDS Provinsi', 
3=>'Tahapan pengentrian dokumen SUTAS', 4=>'Tahapan validasi dokumen SUTAS', 5=>'-');

$timeline_template = '<div>
<div class="date pull-right">?date?</div>
    <h2 style="padding:10px 20px;">?posisi?</h2>
    <blockquote>?quote?</blockquote>
</div>';


// print_r(ArrayHelper::toArray($model_batch));
?>
<div class="master-view">

    <div id="myTimeline">
        <?php
            $arr_model_batch = ArrayHelper::toArray($model_batch);
            foreach ($arr_model_batch as $key => $value) {
                $temp = $timeline_template;
                $temp = str_replace("?date?", DateTime::createFromFormat('Y-m-d H:i:s', $value['date_terima'])->format('d M Y (H:i:s)'), $temp);
                $temp = str_replace("?posisi?", $array_posisi[$value['id_posisi']], $temp);
                $temp = str_replace("?quote?", $array_quote[$value['id_posisi']], $temp);
                echo $temp;
            }

        ?>

    </div>
</div>
