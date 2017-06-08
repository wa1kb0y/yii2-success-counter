<?php

namespace walkboy\SuccessCounter\assets;

use yii\web\AssetBundle;

class SuccessCounterAsset extends AssetBundle
{
	public $sourcePath = '@walkboy/SuccessCounter/assets';

	public $css = [
	];

	public $js = [
    	'js/jquery.counterup.min.js',
    	'js/waypoints.min.js',
    	'js/counter.js',
	];

	public $depends = [
		'yii\web\YiiAsset',
		'yii\bootstrap\BootstrapAsset',
	];
}
