<?php

/* @var $this yii\web\View */

use yii\helpers\Url;

$this->title = $title;

?>

<div class="container-fluid ml-auto mr-auto d-flex align-items-center justify-content-center">
    <div class="col-md-6">
        <div class="card card-profile">
            <div class="card-avatar">
                <a href="javascript:;">
                    <img class="img" src="<?= Yii::getAlias('@web/img/faces/avatar.jpg'); ?>" />
                </a>
            </div>
            <div class="card-body">
                <h6 class="card-category text-gray">Administrator</h6>
                <h4 class="card-title"><?= $user['username'] ?></h4>
                <p class="card-description">
                    Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                </p>
                <p><strong><i class="fa fa-envelope-o"></i> <?= $user['email'] ?></strong></p>
                <a href="<?= Url::to(['/user/update', 'id' => $user['id']]) ?>" class="btn btn-primary btn-round">
                    <i class="material-icons">create</i>
                    Edit
                </a>
            </div>
        </div>
    </div>
</div>