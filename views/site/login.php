<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\widgets\ActiveForm;


?>

<div class="title">Hello!</div>
<div class="subtitle">Войдите под учетными данными <br />которые вам дали в Pushkin Studio</div>
<div class="login-form">
<?php $form = ActiveForm::begin([
    'id' => 'login-form',
    'fieldConfig' => [
        'template' => "<div class=\"group\"><div class=\"field\">{input}<div class=\"error\">{error}</div></div></div>",
    ],
]); ?>
<div class="login-title"><span>Pushkin CRM <em>beta</em></span></div>
<?= $form->field($model, 'username')->textInput(['placeholder' => 'Логин',]) ?>

<?= $form->field($model, 'password')->passwordInput(['placeholder' => 'Пароль',]) ?>

<?= $form->field($model, 'rememberMe')->checkbox([
    'template' => "<div class=\"col-lg-offset-1 col-lg-3\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
    'class' => 'styler',
    'label' => 'Запомнить меня.'
]) ?>


<?= Html::submitButton('Вход', ['class' => 'submit-btn', 'name' => 'login-button']) ?>


<?php ActiveForm::end(); ?>
