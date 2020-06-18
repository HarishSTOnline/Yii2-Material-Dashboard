<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Customer */

$this->title = Yii::t('app', 'Create Customer');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Customers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customer-create">

    <div class="customer-form">
        
        <?= $this->render('_form', [
            'model' => $model,
            'title' => $this->title,
            'type' => 'success'
        ]) ?>

    </div>

</div>
