<?php

declare(strict_types=1);

namespace hiqdev\assets\adminlte;

use yii\web\AssetBundle;

class AdminLteWithSeparateFontAsset extends AssetBundle
{
    public $sourcePath = __DIR__ . '/css';
    public $css = [
//        ['https://fonts.googleapis.com', 'rel' => 'preconnect'],
//        ['https://fonts.gstatic.com', 'rel' => 'preconnect', 'crossorigin' => true],
//        [
//            'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic&display=swap',
//            'rel' => 'stylesheet',
//        ],
        YII_DEBUG ? 'AdminLTE.css' : 'AdminLTE.min.css',
        YII_DEBUG ? 'skins/_all-skins.css' : 'skins/_all-skins.min.css',
    ];

    public function init()
    {
        parent::init();
    }
}
