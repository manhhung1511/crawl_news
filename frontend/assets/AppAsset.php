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
        'boxicons-2.0.7/css/boxicons.min.css',
        'css/style.css',
        'css/site.css',
    ];
    public $js = [
        'js/app.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
        'yii\bootstrap5\BootstrapAsset',
        'yii\bootstrap4\BootstrapPluginAsset',
        'yii\bootstrap5\BootstrapPluginAsset'
    ];
}
