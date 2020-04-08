<?php


namespace backend\widgets;


use yii\bootstrap4\Html;
use yii\bootstrap4\Widget;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\grid\SerialColumn;
use yii\widgets\Pjax;

class CustomGridView extends Widget
{
    public $dataProvider;
    public $filterModel;

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        return
            '<div class="grid">
        <div class="grid-loading" id="grid-loading">
            <div class="spinner-border" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>' .
            Pjax::widget(
                [
                    "scrollTo" => 1
                ]
            ) .
            GridView::widget(
                [
                    'dataProvider' => $this->dataProvider,
                    'filterModel' => $this->filterModel,
                    'layout' => "{summary}\n<div class='pull-right'>{pager}</div>\n{items}\n{pager}",
                    'columns' => [
                        ['class' => SerialColumn::class],

                        'id',
                        'note:ntext',

                        ['class' => ActionColumn::class],
                    ],
                ]
            ) .
            Pjax::end() . '
    </div>';
    }
}