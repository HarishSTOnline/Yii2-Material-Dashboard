<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use yii\helpers\Url;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="container site-login">
  <div class="row">

    <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto d-flex align-items-center justify-content-center" style="height: 100vh;">

      <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'method' => 'post',
      ]); ?>

      <!-- Card -->
      <div class="card card-login card-hidden" style="width: 22rem;">

        <!-- Card Header -->
        <div class="card-header card-header-rose text-center">
          <h3 class="card-title text-center text-bold">
            <strong><?= Html::encode($this->title) ?></strong>
          </h3>
        </div>
        <!-- Card Header End -->

        <!-- Card Body -->
        <div class="card-body">
          
          <p class="card-description text-center">
            Sign in to the Admin Panel of <strong class="text-primary"><?= Yii::$app->name ?></strong>
          </p>

          <div class="form-group has-default">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="material-icons">account_box</i>
                </span>
              </div>

              <?= $form->field($model, 'username', [
                    'template' => '{input}',
                    'options' => [
                      'class' => 'form-group has-feedback',
                      'tag' => false,
                    ]
                  ])->textInput([
                    'placeholder' => 'Username',
                    'autofocus' => true,
                  ])->label(false)
              ?>
              
            </div>
          </div>

          <div class="form-group has-default">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="material-icons">lock</i>
                </span>
              </div>

              <?= $form->field($model, 'password', [
                    'template' => '{input}',
                    'options'  => [
                      'class' => 'form-group has-feedback',
                      'tag'   => false,
                    ],
                  ])->passwordInput([
                    'placeholder' => 'Password'
                  ])->label(false);
              ?>

            </div>
          </div>

          <div class="form-check">
            <label class="form-check-label">
              
              <?= $form->field($model, 'rememberMe', [
                    'template' => '<div class=\"col-lg-offset-1 col-lg-3\">{input}</div>',
                  ])->checkbox()->label();
              ?>

            </label>
          </div>

        </div>
        <!-- Card Body End -->
        
        <!-- Card Footer -->
        <div class="card-footer justify-content-center">
          <strong>
            <?= Html::a( Yii::t('app', 'I forgot my password'), Url::to(['site/forgot'])) ?>
          </strong>
        </div>
        <!-- Card Footer End -->

        <!-- Card Footer -->
        <div class="card-footer justify-content-center">
          <?= Html::submitButton('Sign In', ['class' => 'btn btn-primary btn-round', 'name' => 'login-button']) ?>
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