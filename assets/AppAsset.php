<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/login.css',
        'css/main.css',
        'css/simplebar.css',
    ];
    public $js = [
        'js/jquery.formstyler.min.js',
        'js/jquery.maskedinput.js',
        'js/jquery.validate.min.js',
        'js/jquery.mswitch.js',
        'js/script.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}
