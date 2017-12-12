<?php

namespace alexeevdv\bootstrap;

use yii\web\AssetBundle;

/**
 * Class BootstrapToggleWidgetAsset
 * @package backend\assets
 */
class BootstrapToggleAsset extends AssetBundle
{
    public $sourcePath = '@bower/bootstrap-toggle';

    public $css = [
        'css/bootstrap2-toggle.css',
    ];

    public $js = [
        'js/bootstrap2-toggle.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
