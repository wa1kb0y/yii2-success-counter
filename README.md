Add

`"walkboy/yii2-success-counter": "dev-master"` 

to require section of composer.json


```
<?= \frontend\widgets\SuccessCounter\SuccessCounter::widget([
    'title' => 'Some counters',
    'subtitle' => 'for '.date('Y').' year',
    'counters' => [
        ['count' => 111, 'title' => 'Orders last day'],
        ['count' => 222, 'title' => 'Cities'],
        ['count' => 333, 'title' => 'Happy customers'],
    ],
]) ?>
```