<?php

/* @var $this \yii\web\View */

/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<header>
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-expand-sm navbar-dark bg-dark',
        ],
    ]);
    $menuItems = [
        ['label' => 'Home', 'url' => ['/site/index']],
    ];

    echo Nav::widget([
        'items' => [
            [
                'label' => 'Home',
                'url' => ['site/index'],
                'linkOptions' => [],
            ],
            [
                'label' => 'Notes',
                'url' => ['note/index'],
                'linkOptions' => [],
            ],

            [
                'label' => 'Login',
                'url' => ['site/login'],
                'visible' => Yii::$app->user->isGuest
            ],

        ],
        'options' => ['class' => 'navbar-nav mr-auto'],
    ]);
    ?>
    <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    <?php

    echo Nav::widget([
        'items' => [
            [
                'label' => 'Logout',
                'url' => ['site/login'],
                'visible' => !Yii::$app->user->isGuest
            ],
        ],
        'options' => ['class' => 'navbar-nav'],
    ]);
    NavBar::end();
    ?>
</header>

    <div class="container">
        <nav aria-label="breadcrumb">
            <?= Breadcrumbs::widget([
                'tag' => 'ol',
                'itemTemplate' => '<li class="breadcrumb-item"><i>{link}</i></li>',
                'activeItemTemplate' => '<li class="breadcrumb-item active">{link}</li>',
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
        </nav>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
