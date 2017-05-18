<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
global $TEMPLATE_FOLDER, $ITEM;
$TEMPLATE_FOLDER = $templateFolder;
$ITEM = $arResult["ITEM"];
echo preg_replace_callback(
			"/#DYNAMIC#/is".BX_UTF_PCRE_MODIFIER,
			create_function('$matches', 'ob_start();
            global $TEMPLATE_FOLDER, $ITEM;
			$GLOBALS["APPLICATION"]->IncludeFile($TEMPLATE_FOLDER."/countdown_block.php", array("ITEM"=>$ITEM));
			$retrunStr = @ob_get_contents();
			ob_get_clean();
			return $retrunStr;'),
			$arResult["CACHED_TPL"]);
?>