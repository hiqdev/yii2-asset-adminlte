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

class AdminLtePluginsAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@bower/adminlte/plugins';
    public $js = [
        'pace/pace.min.js',
        'slimScroll/jquery.slimscroll.min.js',
    ];
    public $publishOptions = [
        'only' => [
            'pace/*',
            'slimScroll/*',
        ],
    ];
}
