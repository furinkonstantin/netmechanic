<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<? if (!empty($arResult["ITEMS"])):?>
    <? foreach ($arResult["ITEMS"] as $arItem):?>
        <div id="<?=$arItem["CODE"]?>">
            <?=$arItem["DETAIL_TEXT"]?>
        </div>
    <? endforeach;?>
<? endif;?>