<?php

namespace walkboy\SuccessCounter\assets;

use yii\web\AssetBundle;

class SuccessCounterAsset extends AssetBundle
{
	public $sourcePath = '@frontend/widgets/SuccessCounter/assets';

	public $css = [
		//'css/google.maps.css'
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
