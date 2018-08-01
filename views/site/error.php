<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = $name;
?>



    <div class="title"><?= Html::encode($this->title) ?></div>
    <div class="subtitle"><?= nl2br(Html::encode($message)) ?><br/> <a href="<?= Url::to('index')?>">Вернуться на главную.</a></div>

