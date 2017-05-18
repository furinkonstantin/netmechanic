<?
    require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
    $APPLICATION->SetTitle("ИТ-аутсорсинг и облачные решения для бизнеса в Москве");
    $APPLICATION->SetPageProperty("description", "Команда профессионалов предлагает свои услуги - ИТ-аутсорсинг, облачные решения, служба поддержки, автоматизация деятельности, защита информации, кабельные сети");
?>
<section style="background-image:url(<?=OLD_TEMPLATE_PATH?>!custom_img/home/hero/fullscreen/black-and-white-city-man-people.jpg);" class="hero-static fullscreen animation" data-animation="fadeInUp" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="250">
    <div class="overlay dark"></div>
    <div class="inner">
        <div class="content">
            <div class="container">
                <h1 class="light-color left">ИТ-аутсорсинг</h1>
                <p><span class="light-color left normalcase" style="font-size: 200%;">Время и золотые руки оптом и в розницу</span></p>
                <p class="light-color left normalcase hidden-xs">Для успешного развития бизнеса необходимо функционирование сопутствующих ИТ-сервисов — поддержку таких систем осуществляют профессионалы. Опытные системные администраторы стоят дорого, попытки же сэкономить и пригласить «недорогих» сотрудников или обратиться к фрилансерам приводят к проблемам и сбоям сервисов.</p>
                <p class="light-color left normalcase hidden-xs">Инженеры компании NetMecahnic ABS возьмут на себя частично или в полном объеме непрофильные для вас информационно-технологические задачи бизнеса от создания ИТ-инфраструктуры и технической поддержки рабочих мест сотрудников до разработки программного обеспечения и организации информационной защиты корпоративных информационных систем.</p>
                <p class="light-color left normalcase hidden-xs">Сосредоточьтесь на своем бизнесе и не тратьте ресурсы на найм и содержание штата технических сотрудников, делегируйте ИТ задачи специализированной компании - мы оправдаем доверие.</p>
                <a class="btn btn-default btn-md" data-offset-top="90" href="services/it_outsourcing/">Подробнее</a>
            </div>
        </div>
    </div>
</section>
<section style="background-image:url(<?=OLD_TEMPLATE_PATH?>!custom_img/home/hero/fullscreen/block-free-service.jpg);" class="page-block block-free-service animation" data-animation="zoomIn">
    <div class="container">
        <?
            $APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/v3/countdown.php"), false);
        ?>
    </div>
</section>

<section style="background-image:url(<?=OLD_TEMPLATE_PATH?>!custom_img/home/hero/fullscreen/block-services.jpg);" class="page-block block-services animation" data-animation="zoomIn">
    <div class="container">
        <?
            $APPLICATION->IncludeComponent(
                "bitrix:news.list", 
                "services_widget", 
                array(
                    "IBLOCK_TYPE" => "content",
                    "IBLOCK_ID" => IBLOCK_ID_SERVICES,
                    "NEWS_COUNT" => "100000",
                    "SORT_BY1" => "SORT",
                    "SORT_ORDER1" => "ASC",
                    "SORT_BY2" => "ID",
                    "SORT_ORDER2" => "DESC",
                    "FILTER_NAME" => "",
                    "FIELD_CODE" => array(
                        0 => "ID",
                        1 => "NAME",
                        2 => "DETAIL_PICTURE",
                        3 => "",
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
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>