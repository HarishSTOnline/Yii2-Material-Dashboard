<?php

use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;
use backend\assets\CustomFormAsset;

/* @var $this yii\web\View */
/* @var $model common\models\Customer */
/* @var $form yii\widgets\ActiveForm */
CustomFormAsset::register($this);
?>

<?php $form = ActiveForm::begin([
    'fieldConfig' => [
        'template' => "{input} {error}",
    ],
    'options' => [
        'enctype' => 'multipart/form-data'
    ]
]); ?>
<div class="container-fluid">

    <div class="card">

        <!-- Card Header -->
        <div class="card-header card-header-<?= $type ?> card-header-icon">
            <div class="card-icon">
                <i class="material-icons">account_box</i>
            </div>
            <h4 class="card-title">
                <?= $title ?>
                <div class="pull-right">
                    <?= Html::a(Html::tag('b', 'keyboard_arrow_left', ['class' => 'material-icons']) , ['/customer/index'], [
                        'class' => 'btn btn-xs btn-' . $type . ' btn-round btn-fab',
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
                        <label for="<?= Html::getInputId($model, 'name') ?>" class="bmd-label-floating"><?= Html::activeLabel($model,'name') ?></label>
                        <?= $form->field($model, 'name')->textInput(['maxlength' => true, 'autocomplete' => 'off'])->label(false) ?>
                        <span class="bmd-help"><?= Html::activeHint($model,'name') ?></span>
                    </div>

                </div>

                <div class="col-md-6">

                    <div class="form-group bmd-form-group">
                        <label for="<?= Html::getInputId($model, 'contact') ?>" class="bmd-label-floating"><?= Html::activeLabel($model,'contact') ?></label>
                        <?= $form->field($model, 'contact')->textInput(['maxlength' => true, 'autocomplete' => 'off'])->label(false) ?>
                        <span class="bmd-help"><?= Html::activeHint($model,'contact') ?></span>
                    </div>

                </div>

                <div class="col-md-6">

                    <div class="form-group bmd-form-group">
                        <label for="<?= Html::getInputId($model, 'company') ?>" class="bmd-label-floating"><?= Html::activeLabel($model,'company') ?></label>
                        <?= $form->field($model, 'company')->textInput(['maxlength' => true, 'autocomplete' => 'off'])->label(false) ?>
                        <span class="bmd-help"><?= Html::activeHint($model,'company') ?></span>
                    </div>

                </div>


                <div class="col-md-6">
                    <div class="form-group bmd-form-group">
                        <label class="control checkbox">
                            <?= Html::activeCheckbox($model,  'status', ['label' => false]) ?>
                            <span class="control-indicator"></span> Active
                        </label>
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="form-group bmd-form-group">
                        <label class="file">
                            <?= Html::activeFileInput($model, 'imageFile', $options = ['id' => 'file_selected', 'aria-label' => 'File browser', 'label' => false]) ?>
                            <span class="file-custom" data-after="Choose file..."></span>
                        </label>
                    </div>
                </div>

            </div>
        </div>
        <!-- Card Body End -->

        <!-- Card Footer -->
        <div class="card-footer ml-auto mr-auto">
            <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-' . $type ]) ?>
        </div>
        <!-- Card Footer End -->

    </div>
</div>

<?php ActiveForm::end(); ?>
