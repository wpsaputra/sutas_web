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
    <!-- <div id="myTimeline">
        <div data-vtdate="February 2018" class='timeline-content'>
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
    </div> -->

    <div id="myTimeline">
        <div>
            <div class="date pull-right">8 AUG 2016</div>
                <h2 style="padding:10px 20px;">Validasi Dokumen</h2>
                <blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta explicabo debitis omnis dolor iste fugit totam quasi inventore!</blockquote>
        </div>

        <div>
            <div class="date pull-right">7 AUG 2016</div>
                <h2 style="padding:10px 20px;">Entri Dokumen</h2>
                <blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta explicabo debitis omnis dolor iste fugit totam quasi inventore!</blockquote>
        </div>

        <div>
            <div class="date pull-right">6 AUG 2016</div>
                <h2 style="padding:10px 20px;">Penerimaan IPDS</h2>
                <blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta explicabo debitis omnis dolor iste fugit totam quasi inventore!</blockquote>
        </div>

        <div>
            <div class="date pull-right">5 AUG 2016</div>
                <h2 style="padding:10px 20px;">Penerimaan TU</h2>
                <blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta explicabo debitis omnis dolor iste fugit totam quasi inventore!</blockquote>
        </div>
        
    </div>

    <!-- <section class="timeline">
        <div class="container">
            <div class="timeline-item">
            <div class="timeline-img"></div>

            <div class="timeline-content js--fadeInLeft">
                <h2>Title</h2>
                <div class="date">1 MAY 2016</div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime ipsa ratione omnis alias cupiditate saepe atque totam aperiam sed nulla voluptatem recusandae dolor, nostrum excepturi amet in dolores. Alias, ullam.</p>
                <a class="bnt-more" href="javascript:void(0)">More</a>
            </div>
            </div> 

            <div class="timeline-item">

            <div class="timeline-img"></div>

            <div class="timeline-content timeline-card js--fadeInRight">
                <div class="timeline-img-header">
                <h2>Card Title</h2>
                </div>
                <div class="date">25 MAY 2016</div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime ipsa ratione omnis alias cupiditate saepe atque totam aperiam sed nulla voluptatem recusandae dolor, nostrum excepturi amet in dolores. Alias, ullam.</p>
                <a class="bnt-more" href="javascript:void(0)">More</a>
            </div>

            </div>   

            <div class="timeline-item">

            <div class="timeline-img"></div>

            <div class="timeline-content js--fadeInLeft">
                <div class="date">3 JUN 2016</div>
                <h2>Quote</h2>
                <blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta explicabo debitis omnis dolor iste fugit totam quasi inventore!</blockquote>
            </div>
            </div>   

            <div class="timeline-item">

            <div class="timeline-img"></div>

            <div class="timeline-content js--fadeInRight">
                <h2>Title</h2>
                <div class="date">22 JUN 2016</div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime ipsa ratione omnis alias cupiditate saepe atque totam aperiam sed nulla voluptatem recusandae dolor, nostrum excepturi amet in dolores. Alias, ullam.</p>
                <a class="bnt-more" href="javascript:void(0)">More</a>
            </div>
            </div>   

            <div class="timeline-item">

            <div class="timeline-img"></div>

            <div class="timeline-content timeline-card js--fadeInLeft">
                <div class="timeline-img-header">
                <h2>Card Title</h2>
                </div>
                <div class="date">10 JULY 2016</div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime ipsa ratione omnis alias cupiditate saepe atque totam aperiam sed nulla voluptatem recusandae dolor, nostrum excepturi amet in dolores. Alias, ullam.</p>
                <a class="bnt-more" href="javascript:void(0)">More</a>
            </div>
            </div>   

            <div class="timeline-item">

            <div class="timeline-img"></div>

            <div class="timeline-content timeline-card js--fadeInRight">
                <div class="timeline-img-header">
                <h2>Card Title</h2>
                </div>
                <div class="date">30 JULY 2016</div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime ipsa ratione omnis alias cupiditate saepe atque totam aperiam sed nulla voluptatem recusandae dolor, nostrum excepturi amet in dolores. Alias, ullam.</p>
                <a class="bnt-more" href="javascript:void(0)">More</a>
            </div>
            </div>  

            <div class="timeline-item">

            <div class="timeline-img"></div>

            <div class="timeline-content js--fadeInLeft">
                <div class="date">5 AUG 2016</div>
                <h2>Quote</h2>
                <blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta explicabo debitis omnis dolor iste fugit totam quasi inventore!</blockquote>
            </div>
            </div>   

            <div class="timeline-item">

            <div class="timeline-img"></div>

            <div class="timeline-content timeline-card js--fadeInRight">
                <div class="timeline-img-header">
                <h2>Card Title</h2>
                </div>
                <div class="date">19 AUG 2016</div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime ipsa ratione omnis alias cupiditate saepe atque totam aperiam sed nulla voluptatem recusandae dolor, nostrum excepturi amet in dolores. Alias, ullam.</p>
                <a class="bnt-more" href="javascript:void(0)">More</a>
            </div>
            </div>  

            <div class="timeline-item">

            <div class="timeline-img"></div>

            <div class="timeline-content js--fadeInLeft">
                <div class="date">1 SEP 2016</div>
                <h2>Title</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime ipsa ratione omnis alias cupiditate saepe atque totam aperiam sed nulla voluptatem recusandae dolor, nostrum excepturi amet in dolores. Alias, ullam.</p>
                <a class="bnt-more" href="javascript:void(0)">More</a>
            </div>
            </div>   

        </div>
    </section> -->

</div>
