<?php
/**
 * Yii2 asset for AdminLTE.
 *
 * @link      https://github.com/hiqdev/yii2-asset-adminlte
 * @package   yii2-asset-adminlte
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2017, HiQDev (http://hiqdev.com/)
 */

namespace hiqdev\assets\adminlte;

class AdminLteAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@bower/adminlte';

    public $css = [
        'dist/css/AdminLTE.min.css',
        'dist/css/skins/_all-skins.min.css',
    ];

    public $js = [
        'plugins/slimScroll/jquery.slimscroll.min.js',
        'plugins/fastclick/fastclick.min.js',
        'plugins/pace/pace.js',
        'dist/js/app.min.js',
    ];
}
