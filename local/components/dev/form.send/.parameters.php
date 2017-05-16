<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
if(!CModule::IncludeModule("iblock"))
	return;

$arTypesEx = CIBlockParameters::GetIBlockTypes(Array("-"=>" "));

$arIBlocks=Array();
$db_iblock = CIBlock::GetList(Array("SORT"=>"ASC"), Array("SITE_ID"=>$_REQUEST["site"], "TYPE" => ($arCurrentValues["IBLOCK_TYPE"]!="-"?$arCurrentValues["IBLOCK_TYPE"]:"")));
while($arRes = $db_iblock->Fetch())
	$arIBlocks[$arRes["ID"]] = $arRes["NAME"];

$arProperty_LNS = array();
$rsProp = CIBlockProperty::GetList(Array("sort"=>"asc", "name"=>"asc"), Array("ACTIVE"=>"Y", "IBLOCK_ID"=>(isset($arCurrentValues["IBLOCK_ID"])?$arCurrentValues["IBLOCK_ID"]:$arCurrentValues["ID"])));
while ($arr=$rsProp->Fetch())
{
	$arProperty[$arr["CODE"]] = "[".$arr["CODE"]."] ".$arr["NAME"];
	if (in_array($arr["PROPERTY_TYPE"], array("L", "N", "S", "F")))
	{
		$arProperty_LNS[$arr["CODE"]] = "[".$arr["CODE"]."] ".$arr["NAME"];
	}
}

$rsET = CEventType::GetList(array("LID"=>LANGUAGE_ID));
$eventMessages = array();
$eventMessages[""] = "Без шаблона";
while ($arET = $rsET->Fetch())
{
  $eventMessages[$arET["EVENT_NAME"]] = "[" . $arET["ID"]. "] " . $arET["NAME"];
}

$arFilter = array("TYPE_ID"=>!empty($arCurrentValues["TEMPLATE_EMAIL"]) ?$arCurrentValues["TEMPLATE_EMAIL"]:"");
$rsMess = CEventMessage::GetList($by="site_id", $order="desc", $arFilter);
$mailTemplates[""] = "Нет почтового шаблона";
while($arMess = $rsMess->Fetch()) {
	$mailTemplates[$arMess["ID"]][] = "[".$arMess["ID"]."] ".$arMess["ID"];
}

$arComponentParameters = array(
"GROUPS" => array(),
"PARAMETERS" => array(
	"IS_ADD_IBLOCK" => Array(
		 "PARENT" => "BASE",
		 "NAME" => "Добавлять ли запись в информационный блок",
		 "TYPE" => "CHECKBOX",
		 "DEFAULT" => "Y",
	),
	"IBLOCK_TYPE" => Array(
		"PARENT" => "BASE",
		"NAME" => "Тип информационного блока",
		"TYPE" => "LIST",
		"VALUES" => $arTypesEx,
		"DEFAULT" => "news",
		"REFRESH" => "Y",
	),
	"IBLOCK_ID" => Array(
		 "PARENT" => "BASE",
		 "NAME" => "Идентификатор информационного блока",
		 "TYPE" => "LIST",
		 "VALUES" => $arIBlocks,
		 "DEFAULT" => "={$_REQUEST["ID"]}",
		 "REFRESH" => "Y",
	),
	"NAME" => Array(
		 "PARENT" => "BASE",
		 "NAME" => "Название элемента",
		 "TYPE" => "STRING",
	),
	"VAR_FOR_EMAIL" => Array(
		 "PARENT" => "BASE",
		 "NAME" => "Переменная, в качестве емейла",
		 "TYPE" => "STRING",
		 "DEFAULT" => "EMAIL",
	),
	"VAR_FOR_PHONE" => Array(
		 "PARENT" => "BASE",
		 "NAME" => "Переменная, в качестве телефона",
		 "TYPE" => "STRING",
		 "DEFAULT" => "PHONE",
	),
	"SUBMIT_VALUE" => Array(
		 "PARENT" => "BASE",
		 "NAME" => "Идентификация формы",
		 "TYPE" => "STRING",
		 "DEFAULT" => "send",
	),
	"ACTIVE" => Array(
		 "PARENT" => "BASE",
		 "NAME" => "Активный элемент",
		 "TYPE" => "CHECKBOX",
	),
	"REQUIRED_FIELDS" => array(
		"NAME" => "Обязательные поля для заполнения",
		"TYPE" => "LIST",
		"MULTIPLE" => "Y",
		"PARENT" => "BASE",
		"VALUES" => $arProperty_LNS,
		"DEFAULT"=>"",
        "ADDITIONAL_VALUES" => "Y",
	),
	"SHOW_FIELDS" => array(
		"NAME" => "Отображаемые поля для заполнения",
		"TYPE" => "LIST",
		"MULTIPLE" => "Y",
		"PARENT" => "BASE",
		"VALUES" => $arProperty_LNS,
		"DEFAULT"=>"",
        "ADDITIONAL_VALUES" => "Y",
	),
    "SHOW_FIELDS_TEXT" => array(
		"NAME" => "Текст для соответствующих отображаемых полей",
		"TYPE" => "STRING",
		"PARENT" => "BASE",
        "MULTIPLE" => "Y",
		"DEFAULT"=>"Y",
	),
	"VALID_EMAIL" => array(
		"NAME" => "Проверять ли валидность электронной почты",
		"TYPE" => "CHECKBOX",
		"PARENT" => "BASE",
		"DEFAULT"=>"Y",
	),
	"VALID_PHONE" => array(
		"NAME" => "Проверять ли валидность телефона",
		"TYPE" => "CHECKBOX",
		"PARENT" => "BASE",
		"DEFAULT"=>"Y",
	),
	"SEND_ON_EMAIL" => array(
		"NAME" => "Отправлять на электронную почту",
		"TYPE" => "CHECKBOX",
		"PARENT" => "BASE",
		"DEFAULT"=>"N",
	),
	"TEMPLATE_EMAIL"=>array(
		"NAME" => "Шаблон для отправки на почту",
		"TYPE" => "LIST",
		"PARENT" => "BASE",
		"VALUES"=>$eventMessages,
		"DEFAULT"=>"",
		"REFRESH" => "Y",
	),
	"TEMPLATE_ID"=>array(
		"NAME" => "Идентификатор почтового шаблона",
		"TYPE" => "LIST",
		"PARENT" => "BASE",
		"VALUES"=>$mailTemplates,
		"DEFAULT"=>"",
	),
	"SUCCESS_TEXT" => array(
		"NAME" => "Текст в случае успешной отправки формы",
		"TYPE" => "STRING",
		"MULTIPLE" => "N",
		"PARENT" => "BASE",
		"DEFAULT"=>"Спасибо! С Вами свяжутся в ближайшее время!",
	),
	"USE_CAPTCHA" => array(
		"NAME" => "Использовать каптчу",
		"TYPE" => "CHECKBOX",
		"MULTIPLE" => "N",
		"PARENT" => "BASE",
		"DEFAULT"=>"N",
	),
	"FILES_WITHOUT_AJAX" => array(
		"NAME" => "Файлы без аякса",
		"TYPE" => "STRING",
		"MULTIPLE" => "Y",
		"PARENT" => "BASE"
	),
	"CACHE_TIME" => array(
		"PARENT" => "BASE",
		"NAME" => "Кэш",
		"TYPE" => "STRING",
		"MULTIPLE" => "N",
		"DEFAULT" => 3600,
	),
	"AJAX_MODE"=>array(),
),
);
?>
