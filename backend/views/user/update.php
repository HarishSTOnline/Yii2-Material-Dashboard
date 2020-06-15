<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

$this->title = $title;
?>
<div class="container-fluid">
    <div class="card ">
        <div class="card-header card-header-primary card-header-icon">
            <div class="card-icon">
                <i class="material-icons">account_box</i>
            </div>
            <h4 class="card-title">
                <?= $user->username ?>
                <div class="pull-right">
                    <?= Html::a(Html::tag('b', 'keyboard_arrow_left', ['class' => 'material-icons']), ['/user/profile'], [
                        'class' => 'btn btn-xs btn-success btn-round btn-fab',
                        'rel' => "tooltip",
                        'data' => [
                            'placement' => 'bottom',
                            'original-title' => 'Back'
                        ],
                    ]) ?>
                    <?= Html::a(Html::tag('b', 'create', ['class' => 'material-icons']), ['update', 'id' => $user->id], [
                        'class' => 'btn btn-xs btn-success btn-round btn-fab',
                        'rel' => "tooltip",
                        'data' => [
                            'placement' => 'bottom',
                            'original-title' => 'Edit User'
                        ],
                    ]) ?>
                    <!-- <?= Html::a(Html::tag('b', 'delete', ['class' => 'material-icons']), ['delete', 'id' => $user->id], [
                        'class' => 'btn btn-xs btn-danger btn-round btn-fab',
                        'rel' => "tooltip",
                        'data' => [
                            'confirm' => \Yii::t('app', 'Are you sure you want to delete this item?'),
                            'method' => 'post',
                            'placement' => 'bottom',
                            'original-title' => 'Delete User'
                        ],
                    ]) ?> -->
                </div>
            </h4>
        </div>
        <div class="card-body">
            <?= DetailView::widget([
                'model' => $user,
                'attributes' => [
                    'id',
                    'username',
                    // 'first_name',
                    // 'last_name',
                    // [
                    //     'label' => 'Group Name',
                    //     'value' => ($user->group_id) ? Html::a($user->group->name, ['/admin/groups/view', 'id' => $user->group_id]) : \Yii::t('app', 'No Group'),
                    //     'format' => 'raw',
                    // ],
                    'email:email',
                    [
                        'label' => 'Status',
                        'attribute' => 'status',
                        'value'     => function ($user) {
                            return \Yii::t('app', ucfirst(\yii\helpers\Html::encode($user->status)));
                        },
                    ],
                    'created_at',
                    'updated_at',
                ],
            ]) ?>
        </div>
    </div>
</div>