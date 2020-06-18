<?php

namespace backend\assets;

use yii\web\AssetBundle;

class CustomFormAsset extends AssetBundle {

    public $basePath = '@webroot';
    public $baseUrl = '@web';
    
    public $css = [
        'css/custom-form.css', // Custom Form Element Stylings
    ];

    public $js = [];

    public $depends = [];
}