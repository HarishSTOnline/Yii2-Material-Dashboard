<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;

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

<div class="wrapper">
    
    <?= $this->render('_sidebar') ?>

    <div class="main-panel">

        <?= $this->render('_navbar') ?>

        <?= $this->render('_notifications') ?>

        <?= $this->render('_breadcrumbs') ?>

        <div class="content">
            <?= $content ?>
        </div>

        <?= $this->render('_mainfooter') ?>

    </div>

</div>

<?= $this->render('_plugin') ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
