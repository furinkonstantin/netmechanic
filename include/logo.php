<?php
    if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>
<a class="logo" href="<?if($APPLICATION->GetCurPage(false) == "/"):?>#<?else:?>/<?endif;?>">
    <img src="<?=OLD_TEMPLATE_PATH?>img/logo.svg" data-logo-default="/bitrix/templates/KEDAVRA/img/logo.svg" data-logo-alt="/bitrix/templates/KEDAVRA/img/logo.svg" class="logo__img" alt="NetMechanic ABS"/>
</a>