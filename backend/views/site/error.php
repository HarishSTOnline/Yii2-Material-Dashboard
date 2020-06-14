<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>

<div class="container-fluid">

    <div class="alert alert-danger">
        <?= nl2br(Html::encode($message)) ?>
    </div>

    <p>This is an Error Page. Please contact the Developer at <a href="mailto:<?= Yii::$app->params['developerEmail'] ?>"><?= Yii::$app->params['developerEmail'] ?></a> to know more.</p>

    <?php if (YII_DEBUG && YII_ENV_DEV): ?>
        <div class="mb-5">
            <code>
                <?= nl2br(Html::encode($exception, false)) ?>
            </code>
        </div>
    <?php endif; ?>

</div>
