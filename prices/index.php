<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Цены");
?>
<section style="background-image: url(<?=MAIN_TEMPLATE_PATH?>!custom_img/home/hero/fullscreen/promotion.jpg);" class="block block-promotion light-text animation zoomIn animated" data-animation="zoomIn" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="page-heading center">
            <h2>Акция на абонентское обслуживание</h2>
            <p class="block-promotion-subtitle">Уникальная цена для новых клиентов<span></span></p>
        </div>
        <div class="row digits counters-v1">
            <div class="col-sm-12 text-center">
                <p class="block-promotion-subtitle">Свяжитесь с нами до <b>15.05.17</b> и получите на первые 3 месяца уникальную стоимость нормо-часа инженера и/или обслуживания компьютеров и серверов.</p>
            </div>
            <div class="col-md-6 animated-digits">
                <div class="group">
                    <span class="digit" data-number="1280">0</span><span> р / <small>час</small></span>
                    <div>Ниже почасового тарифа на 22%</div>
                </div>
            </div>
            <div class="col-md-6 animated-digits">
                <div class="group">
                    <span class="digit" data-number="640">0</span><span> р / <small>компьютер</small></span>
                    <div>Ниже стандартного тарифа на 22%</div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <a class="btn btn-md btn-outlined-invert btn-center scroll" data-offset-top="90" href="#contact_form">Связаться с нами</a>
            </div>
        </div>
    </div>
</section>

<section style="background-image:url(<?=MAIN_TEMPLATE_PATH?>!custom_img/home/hero/fullscreen/block-free-service.jpg);" class="page-block block-free-service animation" data-animation="zoomIn">
    <div class="container">
        <?
            $APPLICATION->IncludeComponent(
                "bitrix:news.list", 
                "countdown_widget", 
                array(
                    "IBLOCK_TYPE" => "content",
                    "IBLOCK_ID" => IBLOCK_ID_COUNTDOWN,
                    "NEWS_COUNT" => "1",
                    "SORT_BY1" => "SORT",
                    "SORT_ORDER1" => "ASC",
                    "SORT_BY2" => "ID",
                    "SORT_ORDER2" => "DESC",
                    "FILTER_NAME" => "",
                    "FIELD_CODE" => array(
                        0 => "ID",
                        1 => "NAME",
                        2 => "DETAIL_PICTURE",
                        3 => "ACTIVE_TO",
                    ),
                    "PROPERTY_CODE" => array(
                        0 => "LINK",
                        1 => "IMAGE",
                        2 => "",
                    ),
                    "CHECK_DATES" => "Y",
                    "DETAIL_URL" => "",
                    "AJAX_MODE" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "Y",
                    "AJAX_OPTION_HISTORY" => "N",
                    "CACHE_TYPE" => "A",
                    "CACHE_TIME" => "36000000",
                    "CACHE_FILTER" => "Y",
                    "CACHE_GROUPS" => "Y",
                    "PREVIEW_TRUNCATE_LEN" => "",
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "SET_TITLE" => "N",
                    "SET_BROWSER_TITLE" => "N",
                    "SET_META_KEYWORDS" => "N",
                    "SET_META_DESCRIPTION" => "N",
                    "SET_STATUS_404" => "N",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                    "ADD_SECTIONS_CHAIN" => "N",
                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                    "PARENT_SECTION" => "",
                    "PARENT_SECTION_CODE" => "",
                    "INCLUDE_SUBSECTIONS" => "Y",
                    "PAGER_TEMPLATE" => ".default",
                    "DISPLAY_TOP_PAGER" => "N",
                    "DISPLAY_BOTTOM_PAGER" => "N",
                    "PAGER_TITLE" => "Новости",
                    "PAGER_SHOW_ALWAYS" => "N",
                    "PAGER_DESC_NUMBERING" => "N",
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                    "PAGER_SHOW_ALL" => "Y",
                    "DISPLAY_DATE" => "Y",
                    "DISPLAY_NAME" => "Y",
                    "DISPLAY_PICTURE" => "Y",
                    "DISPLAY_PREVIEW_TEXT" => "Y",
                    "AJAX_OPTION_ADDITIONAL" => "",
                    "SET_LAST_MODIFIED" => "N",
                    "PAGER_BASE_LINK_ENABLE" => "N",
                    "SHOW_404" => "N",
                    "MESSAGE_404" => ""
                ),
                false
            );
        ?>
    </div>
</section>

<section class="page-block block-prices animation zoomIn animated" data-animation="zoomIn" >
    <div class="container">
        <div class="page-heading center animation fadeInUp animated" data-animation="fadeInUp">
            <h2>Стоимость ИТ-аутсорсинга<span></span></h2>
        </div>
        <div class="row">
            <div class="col-sm-12 text-center">
                <p class="block-prices-subtitle">Сравните наши цены</p>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="pricing-plan type-3">
                    <div class="price-title">
                        <span>Почасовой тариф</span>
                        <p class="h4">менее <span>28 р</span> / мин,</p>
                        <p class="h4">или 1&nbsp;640 р / час</p>
                    </div>
                    <p class="h5">Безлимитный</p>
                    <div class="pricing-content">
                        <p>Без абонентской платы, оплата только за то что получаете, поминутная тарификация</p>
                        <ul class="list-unstyled">
                            <li>График: в рабочее время по рабочим дням</li>
                            <li>Реакция на заявку менее <b>2х часов</b></li>
                            <li>Каждый выезд инженера <b>оплачивается</b></li>
                            <li>Мониторинг ключевых ИТ-сервисов <b>бесплатно</b></li>
                            <li>Экспресс-аудит <b>бесплатно</b></li>
                        </ul>
                        <a class="btn btn-md btn-primary btn-center scroll" data-offset-top="90" href="#contact_form">Связаться с нами</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="pricing-plan type-2">
                    <div class="price-title">
                        <span>Стандартный тариф</span>
                        <p class="h4">от <span>820 р</span> / компьютер,</p>
                        <p class="h4">от 2&nbsp;048 р / сервер</p>
                    </div>
                    <p class="h5">Прогнозируемый</p>
                    <div class="pricing-content">
                        <p>Оплата за каждую единицу оборудования или за элемент инфраструктуры</p>
                        <ul class="list-unstyled">
                            <li>График: расширенное рабочее время (+2 часа) по рабочим дням</li>
                            <li>Реакция на заявку не более <b>1 часа</b></li>
                            <li>Фиксированное количество <b>бесплатных</b> выездов инженера</li>
                            <li>Мониторинг всей инфраструктуры <b>бесплатно</b></li>
                            <li>Аудит ИТ <b>бесплатно</b></li>
                            <li>Прикрепленные инженеры <b>бесплатно</b></li>
                        </ul>
                        <a class="btn btn-md btn-primary btn-center scroll" data-offset-top="90" href="#contact_form">Связаться с нами</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="pricing-plan type-3">
                    <div class="price-title">
                        <span>Корпоративный тариф</span>
                        <p class="h4"><span>Персональное</span></p>
                        <p class="h4">предложение</p>
                    </div>
                    <p class="h5">Индивидуальный</p>
                    <div class="pricing-content">
                        <p>Рассматриваются любые варианты<br> обслуживания информационных систем</p>
                        <ul class="list-unstyled">
                            <li>График: круглосуточно и без выходных</li>
                            <li>Реакция на заявку не более <b>30 минут</b></li>
                            <li>Выезд инженера <b>бесплатно и без ограничений</b></li>
                            <li>Мониторинг и антивирусная защита <b>бесплатно</b></li>
                            <li>Аудит ИТ <b>бесплатно</b></li>
                            <li>Прикрепленные инженеры и "ИТ-директор" <b>бесплатно</b></li>
                            <li>Подменное оборудование и <b>штрафы</b> за простой</li>
                        </ul>
                        <a class="btn btn-md btn-primary btn-center scroll" data-offset-top="90" href="#contact_form">Связаться с нами</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="pricing-plan type-3">
                    <div class="price-title">
                        <span>Корпоративный тариф</span>
                        <p class="h4"><span>Удаленный</span></p>
                        <p class="h4">предложение</p>
                    </div>
                    <p class="h5">Индивидуальный</p>
                    <div class="pricing-content">
                        <p>Рассматриваются любые варианты<br> обслуживания информационных систем</p>
                        <ul class="list-unstyled">
                            <li>График: круглосуточно и без выходных</li>
                            <li>Реакция на заявку не более <b>30 минут</b></li>
                            <li>Выезд инженера <b>бесплатно и без ограничений</b></li>
                            <li>Мониторинг и антивирусная защита <b>бесплатно</b></li>
                            <li>Аудит ИТ <b>бесплатно</b></li>
                            <li>Прикрепленные инженеры и "ИТ-директор" <b>бесплатно</b></li>
                            <li>Подменное оборудование и <b>штрафы</b> за простой</li>
                            <li>Подменное оборудование и <b>штрафы</b> за простой</li>
                        </ul>
                        <a class="btn btn-md btn-primary btn-center scroll" data-offset-top="90" href="#contact_form">Связаться с нами</a>
                    </div>
                </div>
            </div>
        </div>							
    </div>
</section>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>