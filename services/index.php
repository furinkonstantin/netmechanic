<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Все ИТ-услуги, от ИТ-аутсорсинга до облачных решений, в одном месте");
$APPLICATION->SetPageProperty("description", "NetMechanic ABS предлагает ИТ-консалтинг, облачные сервисы, аутсорсинг технической поддержки, информационная защита, проектирование, монтаж и эксплуатация СКС");
?>
<section style="background-image:url(<?=MAIN_TEMPLATE_PATH?>!custom_img/home/hero/fullscreen/black-and-white-city-man-people.jpg);" class="hero-static fullscreen animation" data-animation="fadeInUp" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="250">
    <div class="overlay dark"></div>
    <div class="inner">
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-11">
                        <h1 class="light-color left">ИТ-аутсорсинг</h1>
                        <p><span class="light-color left normalcase" style="font-size: 200%;">Надежность и безопасность информационных технологий Вашего бизнеса</span></p>
                        <p class="light-color left normalcase hidden-xs">Мы профессионалы, ИТ работает надежно только под присмотром таких как мы. Защита данных - это не только рутина и технические средства, но и искустное владение и практический опыт, и это тоже про нас.</p>
                        <p class="light-color left normalcase hidden-xs">Посмотрите каких результатов мы уже добиваемся, сколько мы просим за свою работу и от чего мы отталкиваемся в сопровождении информационных систем.</p>
                        <p class="light-color left normalcase hidden-xs">Ваш бизнес зависит от эффективности выполнения ежедневных операций. Мы знаем как сделать эффективным обслуживание компьютеров и серверов, у Вашего бизнеса появится сильная ИТ-поддержка и это будет дешевле и качественней, чем если вы это сделаете сами. Почему? У нас большой опыт, больше возможностей и мы умеем расставлять приритеты.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?
    $APPLICATION->IncludeComponent(
        "bitrix:news.list", 
        "services", 
        array(
            "IBLOCK_TYPE" => "content",
            "IBLOCK_ID" => IBLOCK_ID_SERVICES,
            "NEWS_COUNT" => "1000",
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
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>