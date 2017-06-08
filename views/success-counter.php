<?php

/**
 * @var \yii\web\View $this
 * @var array $counters
 */
use yii\helpers\Html;

?>
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<div class="row section">
		    <h2 class="text-center" id="pricing"><?= $title ?></h2>
		    <p class="text-center m-b-lg"><?= $subtitle ?></p>
		    <?php foreach ($counters as $counter) : ?>
		        <div class="col-md-4 col-sm-4 text-center">
		            <p class="counter lead text-xxl"><?= Html::encode($counter['count']) ?></p>
		            <p class="text-center"><?= $counter['title'] ?></p>
		        </div>
		    <?php endforeach; ?>
		</div>
	</div>
</div>