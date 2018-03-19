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
        'css/main.css',
        'css/ie8.css',
    ];
    public $js = [
        'js/jquery.min.js',
        'js/jquery.dropotron.min.js',
        'js/jquery.scrolly.min.js',
        'js/jquery.onvisible.min.js',
        'js/skel.min.js',
        'js/util.js',
        'js/ie/respond.min.js',
        'js/main.js'
    ];
    public $jsOptions = [
        'position'=>\yii\web\View::POS_END
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

    public function registerAssetFiles($view)
    {
        parent::registerAssetFiles($view);

        $manager = $view->getAssetManager();
        $view->registerJsFile($manager->getAssetUrl($this, 'js/ie/html5shiv.js'), ['condition' => 'lte IE9', 'position'=>\yii\web\View::POS_HEAD]);
        $view->registerJsFile($manager->getAssetUrl($this, 'js/ie/respond.js'), ['condition' => 'lte IE9', 'position'=>\yii\web\View::POS_HEAD]);
    }

}
