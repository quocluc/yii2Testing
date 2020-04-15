<?php

use backend\widgets\SubmitButton;
use kartik\tabs\TabsX;
use yii\helpers\Url;

/**
 * @var $this yii\web\View
 */

$this->title = Yii::$app->name;
?>
<div class="site-index">
    <?php
    $items = [
        [
            'label' => '<i class="fas fa-home"></i> Home',
            'content' => '$content1',
            'active' => true
        ],
        [
            'label' => '<i class="fas fa-user"></i> Profile',
            'content' => '$content2',
            'linkOptions' => ['data-url' => Url::to(['/note/tabs-data'])]
        ],
        [
            'label' => '<i class="fas fa-list-alt"></i> Menu',
            'items' => [
                [
                    'label' => 'Option 1',
                    'encode' => false,
                    'content' => '$content3',
                ],
                [
                    'label' => 'Option 2',
                    'encode' => false,
                    'content' => '$content4',
                ],
            ],
        ],
        [
            'label' => '<i class="fas fa-king"></i> Disabled',
            'linkOptions' => ['class' => 'disabled']
        ],
    ];
    // Above
    echo TabsX::widget([
        'items' => $items,
        'position' => TabsX::POS_ABOVE,
        'encodeLabels' => false
    ]);
    // Below
    echo TabsX::widget([
        'items' => $items,
        'position' => TabsX::POS_BELOW,
        'encodeLabels' => false
    ]);
    // Left
    echo TabsX::widget([
        'items' => $items,
        'position' => TabsX::POS_LEFT,
        'encodeLabels' => false
    ]);
    // Right
    echo TabsX::widget([
        'items' => $items,
        'position' => TabsX::POS_RIGHT,
        'encodeLabels' => false
    ]);
    ?>
    <?= SubmitButton::widget() ?>
</div>
