<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if (!empty($arResult)):?>
    <div class="navigation">
        <nav class="menu">
            <ul>
                <? foreach($arResult as $i=>$arItem):?>
                    <li class="<?if($arItem["SELECTED"]):?>active<?endif;?>"><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
                <? endforeach;?>
            </ul>
        </nav>
    </div>
<?endif?>