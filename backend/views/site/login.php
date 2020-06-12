<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- <div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to login:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <?= $form->field($model, 'rememberMe')->checkbox() ?>

                <div class="form-group">
                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div> -->

<div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
        <?php $form = ActiveForm::begin( [
	        'id'     => 'login-form',
	        'method' => 'post',
        ] ); ?>
          <div class="card card-login card-hidden">
            <div class="card-header card-header-rose text-center">
              <h4 class="card-title text-center">Login</h4>
                <div class="social-line">
                    <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                      <i class="fa fa-facebook-square"></i>
                    </a>
                    <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                      <i class="fa fa-twitter"></i>
                    </a>
                    <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                      <i class="fa fa-google-plus"></i>
                    </a>
                </div>
            </div>
              <div class="card-body">
                  <p class="card-description text-center">Or Sign in with  <strong>hello@coderseden.com</strong>  and the password <strong>admin123</strong> </p>
                <div class="form-group has-default">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">mail</i>
                    </span>
                  </div>
	                <?= $form->field( $model, 'username', [
		                'template' => '{input}',
		                'options'  => [
			                'class' => 'form-group has-feedback',
			                'tag'   => false,
		                ]
	                ] )->textInput( [ 'placeholder' => 'Email' ] )->label( false ); ?>
                </div>
              </div>
              <div class="form-group has-default">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">lock_outline</i>
                    </span>
                  </div>
	                <?= $form->field( $model, 'password', [
		                'template' => '{input}',
		                'options'  => [
			                'class' => 'form-group has-feedback',
			                'tag'   => false,
		                ]
	                ] )->passwordInput( [ 'placeholder' => 'Password' ] )->label( false ); ?>
                </div>
              </div>
                <div class="form-check">
                      <label class="form-check-label">
                <?= $form->field( $model, 'rememberMe', [
	                'template' => "<div class=\"col-lg-offset-1 col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
                ] )->checkbox()->label(); ?>
                      </label>
                </div>
                <div class="form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons"></i>
                    </span>
                  </div>
	                <?= $form->errorSummary( $model ) ?>
                </div>
              </div>
            </div>
              <div class="card-footer justify-content-center">
                <a href="<?= \yii\helpers\Url::to(['/site/forgot']);?>"><?= \Yii::t('app', 'I forgot my password');?></a>
            </div>
            <div class="card-footer justify-content-center">
              <button type="submit" class="btn btn-primary btn-round">Lets Go</button>
            </div>
          </div>
	      <?php ActiveForm::end(); ?>
      </div>
    </div>
</div>
