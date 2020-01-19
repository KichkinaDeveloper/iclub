<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class SignAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        // 'css/sign_boot.css',
    ];
    public $js = [
        // 'js/popper.min.js',
        // 'js/bootstrap.min.js',
        // 'js/mdb.min.js',
        // 'js/main.js',
        // 'js/fontawesome.min.js',
        // 'js/jquery-3.4.1.min.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}