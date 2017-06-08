<?php

namespace walkboy\SuccessCounter;

use yii\base\Widget;
use walkboy\SuccessCounter\assets\SuccessCounterAsset;

class SuccessCounter extends Widget
{
    public $counters = [];
    public $title = '';
    public $subtitle = '';

    public function init() {
		parent::init();
        $view = $this->getView();
		SuccessCounterAsset::register($view);
	}

    public function run()
    {
        if (count($this->counters) == 0) {
            return '';
        }

        return $this->render('success-counter', [
            'counters' => $this->counters,
            'title' => $this->title,
            'subtitle' => $this->subtitle,
        ]);
    }
}
