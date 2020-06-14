<?php

use yii\helpers\Html;

?>
<footer class="footer">
    <div class="container-fluid">
        <nav class="float-left">
            <ul>
                <li>
                    <a href="#">
                        Harish ST
                    </a>
                </li>
                <li>
                    <a href="#">
                        About Us
                    </a>
                </li>
            </ul>
        </nav>
        <div class="copyright float-right">
            &copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?> made with <i class="material-icons">favorite</i> by
            <a href="#" target="_blank">Harish ST</a>.
        </div>
    </div>
</footer>