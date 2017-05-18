<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<? if (!empty($arResult["ITEMS"])):?>
    <div class="page-heading center animation fadeInUp animated" data-animation="fadeInUp">
        <h2>Стоимость ИТ-аутсорсинга<span></span></h2>
    </div>
    <div class="row">
        <div class="col-sm-12 text-center">
            <p class="block-prices-subtitle">Сравните наши цены</p>
        </div>
        <? foreach ($arResult["ITEMS"] as $i=>$arItem):?>
            <div class="col-lg-3 col-sm-6">
                <div class="pricing-plan type-3">
                    <div class="price-title">
                        <span><?=$arItem["NAME"]?></span>
                        <p class="h4"><?=$arItem["PROPERTIES"]["LABEL_1"]["~VALUE"]["TEXT"]?></p>
                        <p class="h4"><?=$arItem["PROPERTIES"]["LABEL_2"]["~VALUE"]["TEXT"]?></p>
                    </div>
                    <p class="h5"><?=$arItem["PROPERTIES"]["TYPE"]["VALUE"]?></p>
                    <div class="pricing-content">
                        <p><?=$arItem["PREVIEW_TEXT"]?></p>
                        <? if (!empty($arItem["PROPERTIES"]["LIST_TEXT"]["VALUE"])):?>
                            <ul class="list-unstyled">
                                <? foreach($arItem["PROPERTIES"]["LIST_TEXT"]["VALUE"] as $arValue):?>
                                    <li><?=html_entity_decode($arValue["TEXT"])?></li>
                                <? endforeach;?>
                            </ul>
                        <? endif;?>
                        <a id="feedback_rate" data-url="<?=URL_FOR_FEEDBACK?>" class="btn btn-md btn-primary btn-center scroll" data-toggle="modal" data-offset-top="90" href="#feedback">Связаться с нами</a>
                    </div>
                </div>
            </div>
        <? endforeach;?>
    </div>
<? endif;?>