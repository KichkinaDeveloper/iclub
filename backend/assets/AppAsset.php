<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/asset/css/style.css',
        'css/asset/css/bootstrap.css',
        'css/asset/font-awesome/css/font-awesome.css',
        'css/asset/css/zabuto_calendar.css',
        'css/asset/js/gritter/css/jquery.gritter.css',
        'css/asset/lineicons/style.css',
        'css/asset/css/style-responsive.css',
    ];
    public $js = [
        'css/asset/js/chart-master/Chart.js',
        'css/asset/js/chart-master/Chart.js',
        'css/asset/js/jquery.js',
        'css/asset/js/jquery-1.8.3.min.js',
        'css/asset/js/bootstrap.min.js',
        'css/asset/js/jquery.dcjqaccordion.2.7.js',
        'css/asset/js/jquery.scrollTo.min.js',
        'css/asset/js/jquery.nicescroll.js',
        'css/asset/js/jquery.sparkline.js',
        'css/asset/js/common-scripts.js',
        'css/asset/js/gritter/js/jquery.gritter.js',
        'css/asset/js/gritter-conf.js',
        'css/asset/js/sparkline-chart.js',
        'css/asset/js/zabuto_calendar.js',
    ];

}
