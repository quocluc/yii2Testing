<?php

namespace backend\assets;

use yii\bootstrap4\BootstrapAsset;
use yii\web\AssetBundle;
use yii\web\YiiAsset;


/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'
    ];
    public $js = [
        'js/site.js',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js'
    ];
    public $depends = [
        YiiAsset::class,
        BootstrapAsset::class,
    ];
}
