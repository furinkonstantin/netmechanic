<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
	foreach($arResult['ITEMS'] as $i=>$arItem) {
		$dateEnd = $arItem["ACTIVE_TO"];
        $arItem["COUNTDOWN"] = DownCounter($dateEnd);
        $arItem["END_TIME"] = strtotime($dateEnd);
        $arResult['ITEMS'][$i] = $arItem;
	}