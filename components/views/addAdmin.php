<?php
/**
 * Created by PhpStorm.
 * User: TIN
 * Date: 03.08.2018
 * Time: 16:58
 */

use yii\widgets\ActiveForm;
use yii\helpers\Html;

$form = ActiveForm::begin([
    'id' => 'add-admin-form',
    'fieldConfig' => [
        'template' => "<div class=\"group\"><div class='\"label\"'>{label}</div><div class=\"field\">{input}<div class=\"error\">{error}</div></div></div>",
    ],
]);
?>
    <div class="c-form">
        <div class="title client">Добавить админа</div>
        <div class="mess"></div>
        <?= $form->field($model, 'username')->textInput(['placeholder' => 'Логин',]) ?>
        <?= $form->field($model, 'password')->passwordInput(['placeholder' => 'Пароль',]) ?>
        <div class="group bts">
            <?= Html::submitButton('Добавить', ['class' => 'submit-btn', 'name' => 'add-admin-submit']) ?>
            <a href="#" class="cancel-btn">Отменить</a>
            <div class="clear"></div>
        </div>
    </div>


<?php ActiveForm::end(); ?>