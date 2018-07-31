<?php

use app\assets\AppAsset;
use app\assets\IeAsset;
use yii\helpers\Html;

AppAsset::register($this);
IeAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>"" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><?= Html::encode($this->title) ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
     <?= Html::csrfMetaTags() ?>




	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
    <?php $this->head() ?>
</head>

<body>
                    <?php $this->beginBody() ?>

	<div class="page">

		<!-- Preloader -->
		<div class="preloader">
			<div class="centrize full-width">
				<div class="vertical-center">
					<div class="spinner"></div>
				</div>
			</div>
		</div>

		<!-- Container -->
		<div class="container">

            <!-- left bar -->
            <div class="left-bar">

                <!-- logo -->
                <div class="logo">
                    <span>Pushkin CRM <em>Beta</em></span>
                </div>

                <!-- main menu -->
                <div class="main-menu">
                    <ul>
                        <li class="item-1 active">
                            <a href="#"><span class="icon"></span>Финансы</a>
                            <ul>
                                <li>
                                    <a href="#">Платёжки</a>
                                </li>
                                <li class="active">
                                    <a href="#">Контрагенты</a>
                                </li>
                                <li>
                                    <a href="#">Отчетность</a>
                                </li>
                            </ul>
                        </li>
                        <li class="item-2">
                            <a href="#"><span class="icon"></span>Документы</a>
                        </li>
                        <li class="item-3">
                            <a href="#"><span class="icon"></span>Планировщик</a>
                        </li>
                    </ul>
                </div>

            </div>

            <!-- wrapper -->
            <div class="wrapper">

                <!-- header -->
                <div class="header">
                    <div class="fw">

                        <!-- search -->
                        <div class="h-search">
                            <input type="search" name="search" placeholder="Поиск" />
                            <input type="submit" class="search-btn" value="Поиск" />
                        </div>

                        <!-- profile -->
                        <div class="h-profile">
                            <div class="pro-head">
                                <div class="name">Hello, <span>Сергей</span></div>
                                <div class="img"><img src="images/profile.jpg" alt="" /></div>
                                <?php echo Html::beginForm(['/site/logout'], 'post')
                                    . Html::submitButton(
                                        'Logout (' . Yii::$app->user->identity->username . ')',
                                        ['class' => 'btn btn-link logout']
                                    )
                                    . Html::endForm() ?>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- content -->
                <div class="content">
                    <div class="fw">

                        <?= $content;?>
                    </div>
                </div>

            </div>

		</div>

	</div>

    <!-- Popups -->
	<div class="popups_group">
		<div class="overlay"></div>

		<!-- Client Popup -->
		<div class="nonebox" id="client-popup">
			<form id="add-client-form" method="post">
                <div class="c-form">
                    <div class="title client">Добавить клиента</div>
                    <div class="group">
                        <div class="label">Фирма *</div>
                        <div class="field">
                            <input type="text" name="name" placeholder="" required />
                        </div>
                    </div>
                    <div class="group">
                        <div class="label">Юр. лицо *</div>
                        <div class="field">
                            <input type="text" name="text" placeholder="" required />
                        </div>
                    </div>
                    <div class="group g-names">
                        <div class="label">Контактное лицо *</div>
                        <a href="#" class="add-btn">Добавить</a>
                        <div class="field">
                            <input type="text" name="text" placeholder="" required />
                        </div>
                        <div class="field">
                            <input type="text" name="text" placeholder="" required />
                        </div>
                    </div>
                    <div class="group g-contacts">
                        <div class="label">Общие контакты *</div>
                        <div class="field email">
                            <input type="email" name="email" placeholder="" required />
                        </div>
                        <div class="field tel">
                            <input type="tel" name="tel" placeholder="" required />
                        </div>
                    </div>
                    <div class="group bts">
                        <input type="submit" class="submit-btn" value="Отправить" />
                        <a href="#" class="cancel-btn">Отменить</a>
                        <div class="clear"></div>
                    </div>
                </div>
            </form>
			<span class="close"></span>
		</div>

        <!-- Confirm Popup -->
		<div class="nonebox" id="confirm-popup">
            <div class="confirm">
                <div class="c-title">Подтверждение платежа</div>
                <div class="c-subtitle">Действительно клиент оплатил ?</div>
                <div class="c-bts">
                    <a href="#" class="cancel-btn">Отменить</a>
                    <a href="#" class="submit-btn">Подтвердить</a>
                    <div class="clear"></div>
                </div>
            </div>
			<span class="close"></span>
		</div>

        <!-- Delete Popup -->
		<div class="nonebox" id="delete-popup">
            <div class="confirm delete">
                <div class="c-title">Точно хотите удалить?</div>
                <div class="c-subtitle">Да если что восстановить можно</div>
                <div class="c-bts">
                    <a href="#" class="cancel-btn">Отменить</a>
                    <a href="#" class="submit-btn">Удалить</a>
                    <div class="clear"></div>
                </div>
            </div>
			<span class="close"></span>
		</div>

        <!-- Confirm Recovery Popup -->
		<div class="nonebox" id="confirm-rec-popup">
            <div class="confirm">
                <div class="c-title">Подтверждение <br />восстановление платежа</div>
                <div class="c-bts">
                    <a href="#" class="cancel-btn">Отменить</a>
                    <a href="#" class="submit-btn">Подтвердить</a>
                    <div class="clear"></div>
                </div>
            </div>
			<span class="close"></span>
		</div>

    </div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>