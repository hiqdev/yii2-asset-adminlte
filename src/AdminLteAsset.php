<?php

namespace hiqdev\assets\adminlte;

class AdminLteAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@bower/adminlte';

    public $css = [
        'dist/css/AdminLTE.css',
        'dist/css/skins/_all-skins.css',
    ];

    public $js = [
        'plugins/slimScroll/jquery.slimscroll.min.js',
        'plugins/fastclick/fastclick.min.js',
        'dist/js/app.js',
    ];
}
