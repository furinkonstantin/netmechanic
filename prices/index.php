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
            <?
            $APPLICATION->IncludeComponent(
                    "bitrix:news.list", 
                    "prices_widget", 
                    array(
                        "IBLOCK_TYPE" => "content",
                        "IBLOCK_ID" => IBLOCK_ID_PRICES,
                        "NEWS_COUNT" => "100",
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
        <div class="row">
            <div class="col-md-12">
                <a id="feedback_modal" data-toggle="modal" data-target="#feedback" data-url="<?=URL_FOR_FEEDBACK?>" class="btn btn-md btn-outlined-invert btn-center scroll" data-offset-top="90" href="#contact_form">Связаться с нами</a>
            </div>
        </div>
    </div>
</section>

<section style="background-image:url(<?=MAIN_TEMPLATE_PATH?>!custom_img/home/hero/fullscreen/block-free-service.jpg);" class="page-block block-free-service animation" data-animation="zoomIn">
    <div class="container">
        <?
            $APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/v3/countdown.php"), false);
        ?>
    </div>
</section>

<section class="page-block block-prices animation zoomIn animated" data-animation="zoomIn" >
    <div class="container">
        <?
            $APPLICATION->IncludeComponent(
                "bitrix:news.list", 
                "rates_widget", 
                array(
                    "IBLOCK_TYPE" => "content",
                    "IBLOCK_ID" => IBLOCK_ID_RATES,
                    "NEWS_COUNT" => "4",
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
                        2 => "LIST_TEXT",
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
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>