<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\PasswordResetRequestForm */

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use yii\helpers\Url;

$this->title = 'Request password reset';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container site-request-password-reset">

    <div class="row">

        <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto d-flex align-items-center justify-content-center" style="height: 100vh;">

            <?php $form = ActiveForm::begin([
                    'id' => 'request-password-reset-form'
                ]);
            ?>

                <!-- Card -->
                <div class="card card-login card-hidden" style="width: 23rem;">

                    <!-- Card Header -->
                    <div class="card-header card-header-rose text-center">
                        <h3 class="card-title text-center text-bold">
                            <strong>Reset Password</strong>
                        </h3>
                    </div>
                    <!-- Card Header End -->

                    <!-- Card Body -->
                    <div class="card-body">

                        <p class="card-description text-center">
                            Please fill out your email. A link to reset password will be sent there.
                        </p>


                        <div class="form-group has-default">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                    <i class="material-icons">email</i>
                                    </span>
                                </div>

                                <?= $form->field($model, 'email', [
                                        'template' => '{input}',
                                        'options' => [
                                        'class' => 'form-group has-feedback',
                                        'tag' => false,
                                        ]
                                    ])->textInput([
                                        'placeholder' => 'Email',
                                        'autofocus' => true,
                                    ])->label(false)
                                ?>
                            
                            </div>
                        </div>

                    </div>
                    <!-- Card Body End -->


                    <!-- Card Footer -->
                    <div class="card-footer justify-content-center">
                        <strong>
                            <?= Html::a( Yii::t('app', 'Back to Login'), Url::to(['site/login'])) ?>
                        </strong>
                    </div>
                    <!-- Card Footer End -->

                    <!-- Card Footer -->
                    <div class="card-footer justify-content-center">
                        <?= Html::submitButton('Send', ['class' => 'btn btn-primary btn-round', 'name' => 'reset-button']) ?>
                    </div>
                    <!-- Card Footer -->

                </div>
                <!-- Card End -->

                <!-- Form Error Prints in an Alert -->
                <?= $form->errorSummary($model) ?>

            <?php ActiveForm::end(); ?>

        </div>

    </div>

</div>
