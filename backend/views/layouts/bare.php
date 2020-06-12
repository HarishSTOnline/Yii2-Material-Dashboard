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
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />

    <?php $this->registerCsrfMetaTags() ?>

    <title><?= Html::encode($this->title) ?></title>

    <?php $this->head() ?>

</head>

<body>

<?php $this->beginBody() ?>

<div class="wrapper wrapper-full-page" style="background-image: url(<?= \Yii::getAlias('@web/img/cover.jpg'); ?>); background-size: cover; background-position: top center;">

    <div class="page-header header-filter">

        <?= $content ?>

        <?= $this->render('_footer') ?>

    </div>

</div>

<?php $this->endBody() ?>
    
</body>
</html>


<?php $this->endPage() ?>