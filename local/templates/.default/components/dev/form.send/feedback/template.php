<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<? if (!empty($arResult['SUCCESS'])):?>
		<font color="green"><?=$arResult['SUCCESS'];?></font><br/>
<? else:?>
    <? if (!empty($arResult['ERRORS'])):?>
        <ul class="error">
            <? foreach ($arResult['ERRORS'] as $error):?>
                <li><?=$error?></li>
            <? endforeach;?>
        </ul>
    <? endif;?>
    <form method="post" class="contact-form" name="contact-form" data-url="<?=URL_FOR_FEEDBACK?>" id="contact-form" novalidate="novalidate">
        <?=bitrix_sessid_post()?>
        <div class="row">
            <? foreach($arResult["PROPS_STRING_VALUES"] as $stringProp):?>
                <div class="form-group col-md-12 col-sm-12">
                    <label class="sr-only" for="<?=$stringProp["CODE"]?>"></label>
                    <input value="<?=$arResult["VALUES"][$stringProp["CODE"]]?>" class="form-control input-lg <? if (!empty($arResult['ERRORS']) && array_key_exists($stringProp["CODE"], $arResult['ERRORS'])):?>error<? endif;?>" type="text" name="<?=$stringProp["CODE"]?>" id="<?=$stringProp["CODE"]?>" placeholder="<?=GetMessage("FEEDBACK_".$stringProp["CODE"])?>">
                </div>
            <? endforeach;?>
        </div>
        <input type="hidden" value="<?=$arParams["SUBMIT_VALUE"]?>" name="SUBMIT_VALUE">
        <input class="btn btn-lg btn-primary btn-center" type="submit" value="Отправить">
    </form>
<? endif;?>