<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<? if (!empty($arResult["ITEMS"])):?>
    <? foreach ($arResult["ITEMS"] as $i=>$arItem):?>
        <div class="col-md-6 animated-digits">
            <div class="group">
                <span class="digit" data-number="<?=$arItem["PROPERTIES"]["PRICE"]["VALUE"]?>">0</span><span> р / <small><?=$arItem["PROPERTIES"]["LABEL"]["VALUE"]?></small></span>
                <div><?=$arItem["PREVIEW_TEXT"]?></div>
            </div>
        </div>
    <? endforeach;?>
<? endif;?>