<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);
$assets = \Bitrix\Main\Page\Asset::getInstance();
$page = $APPLICATION->GetCurPage(false);
?>

<!DOCTYPE html>
<html lang="<?= LANGUAGE_ID ?>">

<head>
    <?php
        $assets->addString('<meta http-equiv="X-UA-Compatible" content="IE=edge">');
        $assets->addString('<meta name="viewport" content="width=device-width, initial-scale=1.0">');
        $assets->addCss(SITE_TEMPLATE_PATH . '/css/reset.css');
        $assets->addCss(SITE_TEMPLATE_PATH . '/css/style.css');
        $assets->addCss(SITE_TEMPLATE_PATH . '/css/owl.carousel.css');
        $assets->addJs(SITE_TEMPLATE_PATH . '/js/jquery.min.js');
        $assets->addJs(SITE_TEMPLATE_PATH . '/js/owl.carousel.min.js');
        $assets->addJs(SITE_TEMPLATE_PATH . '/js/scripts.js');
        $assets->addString('<link rel="icon" type="image/vnd.microsoft.icon" href="' . SITE_TEMPLATE_PATH .'/img/favicon.ico">');
        $assets->addString('<link rel="shortcut icon" href="' . SITE_TEMPLATE_PATH .'/img/favicon.ico">');
        $APPLICATION->ShowHead();
    ?>
    <title><? $APPLICATION->ShowTitle() ?></title>
</head>

<body>
<? $APPLICATION->ShowPanel(); ?>
<!-- wrap -->
<div class="wrap">
    <!-- header -->
    <header class="header">
        <div class="inner-wrap">
            <div class="logo-block"><a href="<?= SITE_DIR ?>" class="logo">Мебельный магазин</a>
            </div>

            <div class="main-phone-block">
            <? if (is_working_hour()) : ?>
                <a href="tel:84952128506" class="phone">8 (495) 212-85-06</a>
            <? else: ?>
                <a href="mailto:store@store.ru" class="phone">store@store.ru</a>
            <? endif; ?>
                <div class="shedule">время работы с 9-00 до 18-00</div>
            </div>

            <div class="actions-block">
                <form action="/" class="main-frm-search">
                    <input type="text" placeholder="Поиск">
                    <button type="submit"></button>
                </form>
                <?$APPLICATION->IncludeComponent(
                    "bitrix:system.auth.form",
                    "header",
                    Array(
                        "FORGOT_PASSWORD_URL" => "/login/?forgot_password=yes",
                        "PROFILE_URL" => "/login/user.php",
                        "REGISTER_URL" => "/login/?register=yes",
                        "SHOW_ERRORS" => "Y"
                    )
                );?>
            </div>
        </div>
    </header>
    <!-- /header -->
    <!-- nav -->
    <nav class="nav">
        <div class="inner-wrap">
            <?$APPLICATION->IncludeComponent(
                "bitrix:menu",
                "top",
                Array(
                    "ALLOW_MULTI_SELECT" => "N",
                    "CHILD_MENU_TYPE" => "left",
                    "DELAY" => "N",
                    "MAX_LEVEL" => "3",
                    "MENU_CACHE_GET_VARS" => array(""),
                    "MENU_CACHE_TIME" => "36000000",
                    "MENU_CACHE_TYPE" => "A",
                    "MENU_CACHE_USE_GROUPS" => "Y",
                    "ROOT_MENU_TYPE" => "top",
                    "USE_EXT" => "N"
                )
            );?>
        </div>
    </nav>
    <!-- /nav -->
    <? if($page != '/'):?>

        <!-- breadcrumbs -->
        <div class="breadcrumbs-box">
            <div class="inner-wrap">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:breadcrumb",
                    "",
                    Array(
                        "PATH" => "",
                        "SITE_ID" => "s1",
                        "START_FROM" => "0"
                    )
                );?>
            </div>
        </div>
        <!-- /breadcrumbs -->
    <? endif; ?>
    <!-- page -->
    <div class="page">
        <!-- content box -->
        <div class="content-box">
            <!-- content -->
            <div class="content">
                <div class="cnt">
                    <? if($page != '/'):?>
                        <header>
                            <h1><? $APPLICATION->ShowTitle(false) ?></h1>
                        </header>
                    <? else: ?>
                        <p>
                            «Мебельная компания» осуществляет производство мебели на высококлассном оборудовании с применением минимальной доли ручного труда, что позволяет обеспечить высокое качество нашей продукции. Налажен производственный процесс как массового и индивидуального характера, что с одной стороны позволяет обеспечить постоянную номенклатуру изделий и индивидуальный подход – с другой.
                        </p>
						<!-- index column -->
		                <div class="cnt-section index-column">
		                    <div class="col-wrap">

		                        <!-- main actions box -->
		                        <div class="column main-actions-box">
		                        	<div class="title-block">
		                                <h2>Новинки</h2>
		                                 <hr>
		                            </div>
		                              <div class="items-wrap">
		                                <div class="item-wrap">
		                                    <div class="item">
		                                        <div class="title-block att">
		                                            Угловой диван!
		                                        </div>
		                                        <br>
		                                        <div class="inner-block">
		                                            <a href="" class="photo-block">
		                                                <img src="<?= SITE_TEMPLATE_PATH ?>/img/new01.jpg" alt="">
		                                            </a>
		                                            <div class="text"><a href="">Угловой диван "Титаник",  с большим выбором расцветок и фактур.</a>
		                                            <a href="" class="btn-arr"></a>
		                                            </div>
		                                        </div>
		                                    </div>
		                                </div>
		                                <div class="item-wrap">
		                                    <div class="item">
		                                        <div class="title-block att">
		                                            Угловой диван!
		                                        </div>
		                                        <br>
		                                        <div class="inner-block">
		                                            <a href="" class="photo-block">
		                                                <img src="<?= SITE_TEMPLATE_PATH ?>/img/new02.jpg" alt="">
		                                            </a>
		                                            <div class="text"><a href="">Угловой диван "Титаник",  с большим выбором расцветок и фактур.</a>
		                                            <a href="" class="btn-arr"></a>
		                                            </div>
		                                        </div>
		                                    </div>
		                                </div>
		                                <div class="item-wrap">
		                                    <div class="item">
		                                        <div class="title-block att">
		                                            Угловой диван!
		                                        </div>
		                                        <br>
		                                        <div class="inner-block">
		                                            <a href="" class="photo-block">
		                                                <img src="<?= SITE_TEMPLATE_PATH ?>/img/new03.jpg" alt="">
		                                            </a>
		                                            <div class="text"><a href="">Угловой диван "Титаник",  с большим выбором расцветок и фактур.</a>
		                                            <a href="" class="btn-arr"></a>
		                                            </div>
		                                        </div>
		                                    </div>
		                                </div>
		                            </div>
		                            <a href="" class="btn-next">Все новинки</a>
		                        </div>
		                        <!-- /main actions box -->
		                        <!-- main news box -->
		                        <div class="column main-news-box">
		                            <div class="title-block">
		                                <h2>Новости</h2>
		                            </div>
		                            <hr>
		                            <div class="items-wrap">
		                                <div class="item-wrap">
		                                    <div class="item">
		                                        <div class="title"><a href="">29 августа 2012</a>
		                                        </div>
		                                        <div class="text"><a href="">Поступление лучших офисных кресел из Германии </a>
		                                        </div>
		                                    </div>
		                                </div>
		                                <div class="item-wrap">
		                                    <div class="item">
		                                        <div class="title"><a href="">29 августа 2012</a>
		                                        </div>
		                                        <div class="text"><a href="">Мастер-класс дизайнеров  из Италии для производителей мебели </a>
		                                        </div>
		                                    </div>
		                                </div>
		                                <div class="item-wrap">
		                                    <div class="item">
		                                        <div class="title"><a href="">29 августа 2012</a>
		                                        </div>
		                                        <div class="text"><a href="">Поступление лучших офисных кресел из Германии </a>
		                                        </div>
		                                    </div>
		                                </div>
		                                <div class="item-wrap">
		                                    <div class="item">
		                                        <div class="title"><a href="">29 августа 2012</a>
		                                        </div>
		                                        <div class="text"><a href="">Наша дилерская сеть расширилась теперь ассортимент наших товаров доступен в Казани </a>
		                                        </div>
		                                    </div>
		                                </div>
		                            </div>
		                            <a href="" class="btn-next">Все новости</a>
		                        </div>
		                        <!-- /main news box -->

		                    </div>
		                </div>
		                <!-- /index column -->

	                    <!-- afisha box -->
		                <div class="cnt-section afisha-box">
		                    <div class="section-title-block">
		                        <h2 class="second-ttile">Ближайшие мероприятия</h2>
		                        <a href="" class="btn-next">все мероприятия</a>
		                    </div>
		                    <hr>
		                    <div class="items-wrap">
		                        <div class="item-wrap">
		                            <div class="item">
		                                <div class="title"><a href="">29 августа 2012, Москва</a>
		                                </div>
		                                <div class="text"><a href="">Семинар производителей мебели России и СНГ, Обсуждение тенденций.</a>
		                                </div>
		                            </div>
		                        </div>
		                        <div class="item-wrap">
		                            <div class="item">
		                                <div class="title"><a href="">29 августа 2012, Москва</a>
		                                </div>
		                                <div class="text"><a href="">Открытие шоу-рума на Невском проспекте. Последние модели в большом ассортименте.</a>
		                                </div>
		                            </div>
		                        </div>
		                        <div class="item-wrap">
		                            <div class="item">
		                                <div class="title"><a href="">29 августа 2012, Москва</a>
		                                </div>
		                                <div class="text"><a href="">Открытие нового магазина в нашей  дилерской сети.</a>
		                                </div>
		                            </div>
		                        </div>
		                    </div>
		                </div>
		                <!-- /afisha box -->
                    <? endif; ?>