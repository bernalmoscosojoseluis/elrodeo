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
       // 'css/print.css',
        'bower_components/bootstrap/dist/css/bootstrap.min.css',
        'bower_components/metisMenu/dist/metisMenu.min.css',
        'dist/css/timeline.css',
        'dist/css/sb-admin-2.css',
        'bower_components/font-awesome/css/font-awesome.min.css',
    ];
    public $js = [
        'bower_components/metisMenu/dist/metisMenu.min.js',
        'dist/js/sb-admin-2.js',
        'js/validacion.js',
       // 'js/print.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
