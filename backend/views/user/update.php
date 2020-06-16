<?php

use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;

?>

<?php $form = ActiveForm::begin([
            'fieldConfig' => [
                'template' => "{input} {error}",
            ]
        ]); ?>

<div class="container-fluid">

    <div class="card">

        <!-- Card Header -->
        <div class="card-header card-header-info card-header-icon">
            <div class="card-icon">
                <i class="material-icons">account_box</i>
            </div>
            <h4 class="card-title">
                <?= $user->isNewRecord ? Yii::t('app', 'Create User') : Yii::t('app', 'Update User') ?>
                <div class="pull-right">
                    <?= Html::a(Html::tag('b', 'keyboard_arrow_left', ['class' => 'material-icons']) , ['/user/profile', 'id' => $user->id], [
                        'class' => 'btn btn-xs btn-success btn-round btn-fab',
                        'rel'=>"tooltip",
                        'data' => [
                            'placement' => 'bottom',
                            'original-title' => 'Back'
                        ],
                    ]) ?>
                </div>
            </h4>
        </div>
        <!-- Card Header End -->

        <!-- Card Body -->
        <div class="card-body">

            <div class="row">

                <div class="col-md-6">

                    <div class="form-group bmd-form-group">
                        <label for="<?= Html::getInputId($user, 'name') ?>" class="bmd-label-floating"><?= Html::activeLabel($user,'name') ?></label>
                        <?= $form->field($user, 'name')->textInput()->label(false) ?>
                        <span class="bmd-help"><?= Html::activeHint($user,'name') ?></span>
                    </div>

                </div>
                
                <div class="col-md-6">

                    <div class="form-group bmd-form-group">
                        <label for="<?= Html::getInputId($user, 'email') ?>" class="bmd-label-floating">
                            <?= Html::activeLabel($user,'email') ?>
                        </label>
                        <?= $form->field($user, 'email')->textInput()->label(false) ?>
                        <span class="bmd-help"><?= Html::activeHint($user,'email') ?></span>
                    </div>

                </div>

                <div class="col-md-6">

                    <div class="form-group bmd-form-group">
                        <label for="<?= Html::getInputId($user, 'password') ?>" class="bmd-label-floating">
                            <?= Html::activeLabel($user,'password') ?>
                        </label>
                        <?= $form->field($user, 'password')->textInput()->label(false) ?>
                        <span class="bmd-help"><?= Html::activeHint($user,'password') ?></span>
                    </div>

                </div>


            </div>

        </div>
        <!-- Card Body End -->

        <!-- Card Footer -->
        <div class="card-footer ml-auto mr-auto">
            <?= Html::submitButton($user->isNewRecord ? \Yii::t('app', 'Create') : \Yii::t('app', 'Update'), ['class' => $user->isNewRecord ? 'btn btn-success' : 'btn btn-info']) ?>
        </div>
        <!-- Card Footer End -->

    </div>

</div>
<?php ActiveForm::end() ?>