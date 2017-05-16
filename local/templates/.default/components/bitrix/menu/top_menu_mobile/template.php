<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if (!empty($arResult)):?>
    <ul>
        <? foreach($arResult as $i=>$arItem):?>
            <?
                $addClass = "";
                if ($i == 0) {
                    $addClass = "current";
                }
            ?>
            <li class="<?=$addClass?> <?if($arItem["SELECTED"]):?>active<?endif;?>"><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
        <? endforeach;?>
    </ul>
<?endif?>