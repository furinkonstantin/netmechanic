<?
    require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
    $APPLICATION->SetTitle("ИТ-аутсорсинг и облачные решения для бизнеса в Москве");
    $APPLICATION->SetPageProperty("description", "Команда профессионалов предлагает свои услуги - ИТ-аутсорсинг, облачные решения, служба поддержки, автоматизация деятельности, защита информации, кабельные сети");
?>
<?
    // $APPLICATION->IncludeComponent(
	// "dev:form.send", 
	// "callback", 
	// array(
		// "COMPONENT_TEMPLATE" => "callback",
		// "IS_ADD_IBLOCK" => "N",
		// "IBLOCK_TYPE" => "-",
		// "IBLOCK_ID" => "",
		// "NAME" => "",
		// "VAR_FOR_EMAIL" => "EMAIL",
		// "VAR_FOR_PHONE" => "PHONE",
		// "SUBMIT_VALUE" => "send",
		// "ACTIVE" => "N",
		// "REQUIRED_FIELDS" => array(
			// 0 => "",
			// 1 => "EMAIL",
			// 2 => "",
		// ),
		// "SHOW_FIELDS" => array(
            // 0 => "EMAIL"
		// ),
        // "SHOW_FIELDS_TEXT" => array(
            // 0 => "Электронная почта"
        // ),
		// "VALID_EMAIL" => "Y",
		// "VALID_PHONE" => "N",
		// "SEND_ON_EMAIL" => "Y",
		// "TEMPLATE_EMAIL" => "NEW_USER",
		// "TEMPLATE_ID" => "1",
		// "SUCCESS_TEXT" => "Спасибо! С Вами свяжутся в ближайшее время!",
		// "USE_CAPTCHA" => "N",
		// "FILES_WITHOUT_AJAX" => array(
		// ),
		// "AJAX_MODE" => "N",
		// "AJAX_OPTION_JUMP" => "N",
		// "AJAX_OPTION_STYLE" => "Y",
		// "AJAX_OPTION_HISTORY" => "N",
		// "AJAX_OPTION_ADDITIONAL" => "",
		// "CACHE_TYPE" => "A",
		// "CACHE_TIME" => "3600"
	// ),
	// false
// );
?>
<section style="background-image:url(/bitrix/templates/KEDAVRA/!custom_img/home/hero/fullscreen/block-free-service.jpg);" class="page-block block-free-service animation" data-animation="zoomIn">
    <div class="container">
        <div class="page-heading center animation fadeInUp animated" data-animation="fadeInUp">
            <h2>Месяц обслуживания бесплатно<span></span></h2>
        </div>
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
                <p class="text-center">Успейте получить месяц обслуживания бесплатно! Оставьте заявку на подключение прямо сейчас.</p>
            </div>
            <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">

                <div class="countdown countdown-container container"
                     data-start="1362139200"
                     data-end="1388461320"
                     data-now="1387461319"
                     data-border-color="#ff5000">
                     <!-- linear-gradient(#ff5000, #ff9933) -->

                    <div class="clock row">

                        <div class="clock-item clock-days countdown-time-value col-lg-4 col-md-4 col-sm-4">
                            <div class="wrap">
                                <div class="inner">
                                    <div id="canvas-days" class="clock-canvas"></div>

                                    <div class="text">
                                        <p class="val">0</p>
                                        <p class="type-days type-time">дней</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="clock-item clock-hours countdown-time-value col-lg-4 col-md-4 col-sm-4">
                            <div class="wrap">
                                <div class="inner">
                                    <div id="canvas-hours" class="clock-canvas"></div>

                                    <div class="text">
                                        <p class="val">11</p>
                                        <p class="type-hours type-time">часов</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="clock-item clock-minutes countdown-time-value col-lg-4 col-md-4 col-sm-4">
                            <div class="wrap">
                                <div class="inner">
                                    <div id="canvas-minutes" class="clock-canvas"></div>

                                    <div class="text">
                                        <p class="val">12</p>
                                        <p class="type-minutes type-time">минут</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="clock-item clock-seconds countdown-time-value col-lg-4 col-md-4 col-sm-4">
                            <div class="wrap">
                                <div class="inner">
                                    <div id="canvas-seconds" class="clock-canvas"></div>

                                    <div class="text">
                                        <p class="val">24</p>
                                        <p class="type-seconds type-time">секунд</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
            <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 text-center">
                <a class="btn btn-default btn-md" href="#">Оставить заявку</a>
            </div>
        </div>
    </div>
</section>

<section style="background-image:url(/bitrix/templates/KEDAVRA/!custom_img/home/hero/fullscreen/block-services.jpg);" class="page-block block-services animation" data-animation="zoomIn">
    <div class="container">
        <div class="page-heading center animation fadeInUp animated" data-animation="fadeInUp">
            <h2>Услуги<span></span></h2>
        </div>
        <div class="row">
            <div class="col-lg-5 col-lg-offset-1 col-sm-6">
                <a href="#" class="block-services-item services-item-1">
                    <span>ИТ-аутсорсинг</span>
                </a>
                <a href="#" class="block-services-item services-item-2">
                    <span>Обслуживание компьютеров и серверов</span>
                </a>
                <a href="#" class="block-services-item services-item-3">
                    <span>Автоматизация деятельности</span>
                </a>
                <a href="#" class="block-services-item services-item-4">
                    <span>Обслуживание оргтехники</span>
                </a>
                <a href="#" class="block-services-item services-item-5">
                    <span>СКС, ЛВС и IP-телефония</span>
                </a>
            </div>
            <div class="col-lg-5 col-sm-6 text-right">
                <a href="#" class="block-services-item services-item-6">
                    <span>Информационная безопасность</span>
                </a>
                <a href="#" class="block-services-item services-item-7">
                    <span>Восстановление данных</span>
                </a>
                <a href="#" class="block-services-item services-item-8">
                    <span>Облачные технологии</span>
                </a>
                <a href="#" class="block-services-item services-item-9">
                    <span>СКУД (система контроля и управления доступом)</span>
                </a>
                <a href="#" class="block-services-item services-item-10">
                    <span>Системы видеонаблюдения</span>
                </a>
            </div>
        </div>
    </div>
</section>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>