<?php

use yii\helpers\Url;

$currentUser = Yii::$app->user->identity;

?>

<div class="sidebar" data-color="purple" data-background-color="white" data-image="<?= Yii::getAlias('@web/img/sidebar-1.jpg'); ?>">
    
    <div class="logo">
        <a href="#" class="simple-text logo-normal">
            <?= Yii::$app->name ?>
        </a>
    </div>

    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item active  ">
                <a class="nav-link" href="<?= Url::to('/site/dashboard') ?>">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#yii2Example" aria-expanded="false">
                <!-- <i class="material-icons">account_box</i> -->
                <i><img style="width:25px" src="<?= Yii::getAlias('@web/img/faces/avatar.jpg'); ?>"></i>
                <p><?= $currentUser->name ?>
                    <b class="caret"></b>
                </p>
                </a>
                <div class="collapse" id="yii2Example">
                <ul class="nav">
                    <li class="nav-item">
                    <a class="nav-link" href="<?= Url::to(['/user/profile', 'id' => $currentUser->id]) ?>">
                        <span class="sidebar-mini"> UP </span>
                        <span class="sidebar-normal"> User Profile </span>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="<?= Url::to(['/user/update', 'id' => $currentUser->id]) ?>">
                        <span class="sidebar-mini"> PU </span>
                        <span class="sidebar-normal"> Profile Update </span>
                    </a>
                    </li>
                </ul>
                </div>
          </li>
            <!-- <li class="nav-item ">
                <a class="nav-link" href="./user.html">
                    <i class="material-icons">person</i>
                    <p>User Profile</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="./tables.html">
                    <i class="material-icons">content_paste</i>
                    <p>Table List</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="./typography.html">
                    <i class="material-icons">library_books</i>
                    <p>Typography</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="./icons.html">
                    <i class="material-icons">bubble_chart</i>
                    <p>Icons</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="./map.html">
                    <i class="material-icons">location_ons</i>
                    <p>Maps</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="./notifications.html">
                    <i class="material-icons">notifications</i>
                    <p>Notifications</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="./rtl.html">
                    <i class="material-icons">language</i>
                    <p>RTL Support</p>
                </a>
            </li> -->
        </ul>
    </div>

</div>