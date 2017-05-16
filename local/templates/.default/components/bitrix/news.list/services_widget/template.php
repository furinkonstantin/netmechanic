<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<? if (!empty($arResult["ITEMS"])):?>
    <div class="page-heading center animation fadeInUp animated" data-animation="fadeInUp">
        <h2><?=GetMessage("SERVICES_TITLE")?><span></span></h2>
    </div>
    <div class="row">
        <? foreach ($arResult["ITEMS"] as $i=>$arItem):?>
            <? if ($i == 0 || $i == $arResult["EQUAL_COLUMNS"]):?>
                <? 
                    if ($i == (count($arResult["ITEMS"])/2)) {
                        $class = "col-lg-5 col-sm-6 text-right";
                    } else {
                        $class = "col-lg-5 col-lg-offset-1 col-sm-6";
                    }
                ?>
                <div class="<?=$class?>">
            <? endif;?>
                <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="block-services-item services-item-<?=$arItem["PROPERTIES"]["BACKGROUND_NUMBER"]["VALUE"]?>">
                    <span><?=$arItem["NAME"]?></span>
                </a>
            <? if ($i == count($arResult["ITEMS"])-1 || $i == ($arResult["EQUAL_COLUMNS"]-1)):?>
                </div>
            <? endif;?>
        <? endforeach;?>
    </div>
<? endif;?>