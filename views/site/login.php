<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\widgets\ActiveForm;


?>


<?php $form = ActiveForm::begin([
    'id' => 'login-form',
    'fieldConfig' => [
        'template' => "<div class=\"group\"><div class=\"field\">{input}<div class=\"error\">{error}</div></div></div>",
    ],
]); ?>

<?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

<?= $form->field($model, 'password')->passwordInput() ?>

<?= $form->field($model, 'rememberMe')->checkbox([
    'template' => "<div class=\"col-lg-offset-1 col-lg-3\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
]) ?>


<?= Html::submitButton('Вход', ['class' => 'submit-btn', 'name' => 'login-button']) ?>


<?php ActiveForm::end(); ?>
