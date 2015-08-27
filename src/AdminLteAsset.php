<?php

/*
 * Yii 2 asset for bower AdminLTE
 *
 * @link      https://github.com/hiqdev/yii2-asset-adminlte
 * @package   yii2-asset-adminlte
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015, HiQDev (https://hiqdev.com/)
 */

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
        'plugins/pace/pace.js',
        'dist/js/app.js',
    ];
}
