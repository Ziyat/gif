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
        'layout/styles/layout.css',
    ];
    public $js = [
        'layout/scripts/jquery.min.js',
        'layout/scripts/jquery.backtotop.js',
        'layout/scripts/jquery.mobilemenu.js',
        'layout/scripts/jquery.flexslider-min.js',
    ];
//    public $jsOptions = [
//        'position'=>\yii\web\View::POS_END
//    ];
    public $depends = [
        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];

//    public function registerAssetFiles($view)
//    {
//        parent::registerAssetFiles($view);
//
//        $manager = $view->getAssetManager();
//        $view->registerJsFile($manager->getAssetUrl($this, 'js/ie/html5shiv.js'), ['condition' => 'lte IE9', 'position'=>\yii\web\View::POS_HEAD]);
//        $view->registerJsFile($manager->getAssetUrl($this, 'js/ie/respond.js'), ['condition' => 'lte IE9', 'position'=>\yii\web\View::POS_HEAD]);
//    }

}
