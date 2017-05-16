<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$componentPath = $_SERVER['DOCUMENT_ROOT'].$this->__path;
if(!CModule::IncludeModule("iblock"))
	return;

if ($arParams["USE_CAPTCHA"] == "Y") {
	include_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/classes/general/captcha.php");
	$arResult["CAPTCHA"] = new CCaptcha();
	$captchaPass = COption::GetOptionString("main", "captcha_password", "");
	if(strlen($captchaPass) <= 0){
			$captchaPass = randString(10);
			COption::SetOptionString("main", "captcha_password", $captchaPass);
	}
	$arResult["CAPTCHA"]->SetCodeCrypt($captchaPass);
}

$life_time = $arParams['CACHE_TIME'];
$obCache = new CPHPCache;
$cache_id = "required-show-props-fields-".$this->GetTemplateName();
$cacheData = $obCache->InitCache($life_time, $cache_id, "/");
if ($arParams['CACHE_TYPE'] == 'N') {
	$cacheData = false;
}
if($cacheData):
	$vars = $obCache->GetVars();
	$requiredFields = $vars['REQUIRED_FIELDS'];
	$arResult["PROPS_LIST_VALUES"] = $vars["PROPS_LIST_VALUES"];
	$arResult["PROPS_STRING_VALUES"] = $vars["PROPS_STRING_VALUES"];
else:
	$requiredFields = array();
	if (!empty($arParams['REQUIRED_FIELDS'])) {
		foreach($arParams['REQUIRED_FIELDS'] as $requiredField) {
			if (!empty($requiredField)) {
				$query = CIBlockProperty::GetByID($requiredField,$arParams['IBLOCK_ID']);
				$prop = $query->Fetch();
				$requiredFields[$requiredField] = $prop['NAME'];
			}
		}
	}
	
	$arResult["PROPS_LIST_VALUES"] = array();
	$arResult["PROPS_STRING_VALUES"] = array();
    if (!empty($arParams['SHOW_FIELDS'])) {
        foreach($arParams['SHOW_FIELDS'] as $showField) {
            $properties = CIBlockProperty::GetList(Array("sort"=>"asc", "name"=>"asc"), Array("ACTIVE"=>"Y", "IBLOCK_ID"=>$arParams["IBLOCK_ID"], "CODE"=>$showField));
            $ar_props = $properties->Fetch();
            if ($ar_props["PROPERTY_TYPE"] == "L") {
                $db_enum_list = CIBlockProperty::GetPropertyEnum($ar_props["CODE"], Array("sort"=>"asc"), Array("IBLOCK_ID"=>$arParams["IBLOCK_ID"]));
                while($ar_enum_list = $db_enum_list->GetNext())
                {
                    $arResult["PROPS_LIST_VALUES"][$showField][] = $ar_enum_list;
                }
            }
            if ($ar_props["PROPERTY_TYPE"] == "S") {

                $arResult["PROPS_STRING_VALUES"][$showField] = $ar_props;
            }
        }
    }
    if (empty($arParams["IS_ADD_IBLOCK"])) {
        $arParams["IS_ADD_IBLOCK"] = "N";
    }
endif;
if($obCache->StartDataCache()):
  $obCache->EndDataCache(
		array(
			"REQUIRED_FIELDS" => $requiredFields,
			"PROPS_LIST_VALUES" => $arResult["PROPS_LIST_VALUES"], 
			"PROPS_STRING_VALUES"=> $arResult["PROPS_STRING_VALUES"]
		));
endif;

if (empty($arResult["PROPS_STRING_VALUES"]) && !empty($arParams['SHOW_FIELDS'])) {
    foreach ($arParams['SHOW_FIELDS'] as $key => $field) {
        $arResult["PROPS_STRING_VALUES"][] = array(
            "CODE" => $field
        );
    }
}

$count = 0;
foreach ($requiredFields as $key => $value) {
    if (empty($value)) {
        $requiredFields[$key] = $arParams["SHOW_FIELDS_TEXT"][$count];
    }
    $count++;
}

$arResult["VALUES"] = array();

if (!empty($_POST) && $_POST["SUBMIT_VALUE"] == $arParams["SUBMIT_VALUE"]) {
    $arResult["VALUES"] = $_POST;
	$newPostArray = $_POST;
	$postArray = array();
	foreach($newPostArray as $indexPostArray=>$newPostArrayItem) {
		//$postArray[$indexPostArray] = utf8win1251($newPostArrayItem);
		$postArray[$indexPostArray] = $newPostArrayItem;
	}
	if (isset($postArray['bxajaxid'])) {
		unset($postArray['bxajaxid']);
	}
	if (isset($postArray['AJAX_CALL'])) {
		unset($postArray['AJAX_CALL']);
	}
	$files = array();
	if (isset($_FILES) && !empty($_FILES)) {
		foreach($_FILES as $indexFile=>$arrayFiles) {
			if(!is_string($_FILES[$indexFile]['name'])) {
				$countValues = count($_FILES[$indexFile]['name']);
				$attributes = array();
				foreach($arrayFiles as $attr=>$values) {
					for($i=0;$i<$countValues;$i++) {
						$attributes[$i][$attr] = $values[$i];
					}
				}
				foreach($attributes as $attribute) {
					$files[$indexFile][] = $attribute;
				}			
			} else {
				$files[$indexFile][] = $arrayFiles;
			}
		}
	}

	if (!empty($requiredFields)) {
		$errors = array();
		foreach($requiredFields as $indexField=>$itemRequredField) {
			foreach($postArray as $indexPost=>$post) {
				if ($indexPost == $indexField) {
					if ($indexField == $arParams["VAR_FOR_EMAIL"] && $arParams['VALID_EMAIL'] == 'Y') {
						if (!check_email($post)) {
							$errors[$indexField] = 'Поле "'.$itemRequredField.'" заполнено некорректно';
						}
					} elseif($indexField == $arParams["VAR_FOR_PHONE"] && $arParams['VALID_PHONE'] == 'Y') {
						if (!preg_match('/^( +)?((\+?7|8) ?)?((\(\d{3}\))|(\d{3}))?( )?(\d{3}[\- ]?\d{2}[\- ]?\d{2})( +)?$/', $post)) {
							$errors[$indexField] = 'Поле "'.$itemRequredField.'" заполнено некорректно';
						}
					} else {
						if (empty($post)) {
							$errors[$indexField] = 'Поле "'.$itemRequredField.'" является обязательным для заполнения';
						}
					}
				}
			}
			
			foreach($files as $indexFile=>$itemsFiles) {
				if(is_array($itemsFiles)) {
					foreach($itemsFiles as $itemFile) {
						if ($indexFile == $indexField) {
							if (empty($itemFile['name'])) {
								$errors[$indexField] = 'Поле "'.$itemRequredField.'" является обязательным для заполнения';
							}
						}
					}
				} else {
					if ($indexFile == $indexField) {
						if (empty($itemsFiles['name'])) {
							$errors[$indexField] = 'Поле "'.$itemRequredField.'" является обязательным для заполнения';
						}
					}
				}
			}
		}
	}
	$combineArray = array_merge($files, $postArray);
	
	if ($arParams["USE_CAPTCHA"] == "Y") {
		if(!$APPLICATION->CaptchaCheckCode($_POST["captcha_word"], $_POST["captcha_code"])){
			$errors["captcha_code"] = "Код с картинки введен неверно!";
		}
	}


	if (!empty($errors)) {
		$arResult['ERRORS'] = $errors;
	} else {
		$el = new CIBlockElement;
		$nameForIblock = $arParams['NAME'];
		foreach($combineArray as $propField=>$propValue) {
			$nameForIblock = str_replace("#".$propField."#", $propValue, $nameForIblock);
		}
		
		if ($arParams["AJAX_MODE"] != "Y") {
			foreach($arParams["FILES_WITHOUT_AJAX"] as $filesWithOutAjaxItem) {
				$mimes = $_REQUEST[$filesWithOutAjaxItem."_MIME"];
				$newMimes = array();
				foreach($mimes as $mime) {
					$mime = str_replace("[","", $mime);
					$mime = str_replace("]","", $mime);
					$mime = str_replace("\"","", $mime);
					$newMimes[] = $mime;
				}
				$photos = $_REQUEST[$filesWithOutAjaxItem."_DATA"];
				foreach($photos as $i=>$photo) {
					if (!empty($photo) && $photo != "null") {
						$photo = str_replace("\\", "", $photo);
						$photo = preg_replace("!data:.+?/.+?;base64,!", "",$photo);
						$photo = str_replace("[","", $photo);
						$photo = str_replace("]","", $photo);
						$photo = str_replace("\"","", $photo);
						if (!is_dir($_SERVER["DOCUMENT_ROOT"]."/tmp/")) {
							mkdir($_SERVER["DOCUMENT_ROOT"]."/tmp/");
						}
						$newMime = $newMimes[$i];
						$namePhoto = $_SERVER["DOCUMENT_ROOT"]."/tmp/file_".time()."_".$i.".".$newMime;
						file_put_contents($namePhoto, base64_decode($photo));
						$arResult["DEL_".$filesWithOutAjaxItem][] = $namePhoto;
					}
				}
			}
		}
		
		foreach($arParams["FILES_WITHOUT_AJAX"] as $filesWithOutAjaxItem) {
			foreach($arResult["DEL_".$filesWithOutAjaxItem] as $arDelPhoto) {
				if (!empty($arDelPhoto)) {
					$combineArray[$filesWithOutAjaxItem][] = CFile::MakeFileArray($arDelPhoto);
				}
			}
		}
		if (empty($arParams["IS_ADD_IBLOCK"]) || $arParams["IS_ADD_IBLOCK"] == "Y") {
			$arFields = array(
				'IBLOCK_ID'=>$arParams['IBLOCK_ID'],
				'NAME'=>$nameForIblock,
				'IBLOCK_SECTION_ID'=>$_POST["SECTION_ID"],
				'ACTIVE'=>$arParams['ACTIVE'],
				'PROPERTY_VALUES'=>$combineArray,
			);
			if (empty($_POST["SECTION_ID"])) {
				unset($arFields["IBLOCK_SECTION_ID"]);
			}
			$elementId = $el->Add($arFields);
		}
		if ($elementId > 0 || $arParams["IS_ADD_IBLOCK"] == "N") {
			$postArray["ID"] = $elementId;
			if ($arParams['SEND_ON_EMAIL'] == 'Y') {
				unset($postArray["sessid"]);
				$filesMails = array();
				foreach($postArray as $code=>$value) {
					$properties = CIBlockProperty::GetList(Array("sort"=>"asc", "name"=>"asc"), Array("ACTIVE"=>"Y", "IBLOCK_ID"=>$arParams["IBLOCK_ID"], "CODE"=>$code));
					$ar_props = $properties->Fetch();
					if ($ar_props["PROPERTY_TYPE"] == "E") {
						$element = CIBlockElement::GetById($value)->GetNext();
						$value = $element["NAME"];
						$fieldsMails[$code] = $value;
					} else {
						$fieldsMails[$code] = $value;
					}
				}
				$db_props = CIBlockElement::GetProperty($arParams["IBLOCK_ID"], $elementId, array("sort" => "asc"), Array("PROPERTY_TYPE"=>"F"));
				while($ar_props = $db_props->GetNext()) {
					$filesMails[] = $ar_props["VALUE"];
				}
				if (empty($arParams["TEMPLATE_ID"])) {
					$arParams["TEMPLATE_ID"] = "";
				}
				CEvent::Send($arParams['TEMPLATE_EMAIL'], SITE_ID, $fieldsMails, "Y", $arParams["TEMPLATE_ID"], $filesMails);
			}
			$arResult['SUCCESS'] = $arParams['SUCCESS_TEXT'];
		} else {
			$arResult['ERRORS'][] = 'Не удалось добавить элемент в БД';
		}
		//Удаляем временные файлы
        if (!empty($arDelPhotos)) {
            foreach($arDelPhotos as $arDelPhoto) {
                unlink($arDelPhoto);
            }
        }
	}
}

$this->IncludeComponentTemplate();
?>