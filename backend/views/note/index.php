<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\Notes */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Notes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="notes-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Notes', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <div class="grid">
        <div class="grid-loading" id="grid-loading">
            <div class="spinner-border" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <?php Pjax::begin([
            'scrollTo' => 1,
        ]); ?>
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,

            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                'id',
                'note:ntext',

                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]) ?>

        <?php Pjax::end(); ?>
    </div>
</div>
