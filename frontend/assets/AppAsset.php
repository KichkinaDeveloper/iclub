<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/index_1.css',
        'css/teachers.css',
        'css/event_e.css'
    ];
    public $js = [
        'js/jquery/jquery_index.js'
    ];
    public $depends = [
        // 'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
