<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<? if (!empty($arResult['SUCCESS'])):?>
		<font color="green"><?=$arResult['SUCCESS'];?></font><br/>
<? else:?>
	<? if (!empty($arResult['ERRORS'])):?>
		<? foreach($arResult['ERRORS'] as $error):?>
			<font color="red"><?=$error;?></font><br/>
		<? endforeach;?>
	<? endif;?>
	<script>
		$(".phone_input").mask("+7(999)999-99-99");
	</script>
	<form action="" method="POST">
		<?=bitrix_sessid_post()?>
        <? foreach($arResult["PROPS_STRING_VALUES"] as $stringProp):?>
			<? 
				$class = "";
				if ($stringProp["CODE"] == "PHONE") {
					$class = "phone_input";
				}
			?>
			<input type="text" class="<?=$class?>" name="<?=$stringProp["CODE"]?>" value="<?=$arResult["VALUES"][$stringProp["CODE"]]?>" placeholder="<?=GetMessage("CALLBACK_".$stringProp["CODE"])?>*" />
		<? endforeach;?>
        <input type="hidden" value="<?=$arParams["SUBMIT_VALUE"]?>" name="SUBMIT_VALUE">
		<input type="submit" value="Получить консультацию" class="green_button" />
	</form>
<? endif;?>