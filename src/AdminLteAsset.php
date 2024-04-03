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
    public $sourcePath = '@bower/adminlte/dist';
    public $js = ['js/app.min.js'];
    public $depends = [
        AdminLteWithSeparateFontAsset::class,
        AdminLtePluginsAsset::class,
    ];
}
