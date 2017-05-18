<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<? if (!empty($arResult["ITEMS"])):?>
    <div class="page-heading center animation fadeInUp animated" data-animation="fadeInUp">
        <h2><?=GetMessage("COUNTDOWN_TITLE")?><span></span></h2>
    </div>
    <div class="row">
        <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
            <p class="text-center"><?=GetMessage("COUNTDOWN_DESCRIPTION")?></p>
        </div>
        <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
            <div class="countdown countdown-container container"
                 data-start="<?=time()?>"
                 data-end="<?=$arResult["ITEMS"][0]["END_TIME"]?>"
                 data-now="<?=time()?>"
                 data-border-color="#ff5000">
                 <!-- linear-gradient(#ff5000, #ff9933) -->

                <div class="clock row">
                
                    <div class="clock-item clock-days countdown-time-value col-lg-4 col-md-4 col-sm-4">
                        <div class="wrap">
                            <div class="inner">
                                <div id="canvas-days" class="clock-canvas"></div>

                                <div class="text">
                                    <p class="val"><?=$arResult["ITEMS"][0]["COUNTDOWN"]["days"]?></p>
                                    <p class="type-days type-time"><?=declension_word($arResult["ITEMS"][0]["COUNTDOWN"]["days"], array(GetMessage("COUNTDOWN_DAYS_LEFT_1"), GetMessage("COUNTDOWN_DAYS_LEFT_2"), GetMessage("COUNTDOWN_DAYS_LEFT_3")))?></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="clock-item clock-hours countdown-time-value col-lg-4 col-md-4 col-sm-4">
                        <div class="wrap">
                            <div class="inner">
                                <div id="canvas-hours" class="clock-canvas"></div>

                                <div class="text">
                                    <p class="val"><?=$arResult["ITEMS"][0]["COUNTDOWN"]["hours"]?></p>
                                    <p class="type-hours type-time"><?=declension_word($arResult["ITEMS"][0]["COUNTDOWN"]["hours"], array(GetMessage("COUNTDOWN_HOURS_LEFT_1"), GetMessage("COUNTDOWN_HOURS_LEFT_2"), GetMessage("COUNTDOWN_HOURS_LEFT_3")))?></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="clock-item clock-minutes countdown-time-value col-lg-4 col-md-4 col-sm-4">
                        <div class="wrap">
                            <div class="inner">
                                <div id="canvas-minutes" class="clock-canvas"></div>

                                <div class="text">
                                    <p class="val"><?=$arResult["ITEMS"][0]["COUNTDOWN"]["minutes"]?></p>
                                    <p class="type-minutes type-time"><?=declension_word($arResult["ITEMS"][0]["COUNTDOWN"]["minutes"], array(GetMessage("COUNTDOWN_MINUTES_LEFT_1"), GetMessage("COUNTDOWN_MINUTES_LEFT_2"), GetMessage("COUNTDOWN_MINUTES_LEFT_3")))?></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="clock-item clock-seconds countdown-time-value col-lg-4 col-md-4 col-sm-4">
                        <div class="wrap">
                            <div class="inner">
                                <div id="canvas-seconds" class="clock-canvas"></div>

                                <div class="text">
                                    <p class="val"><?=$arResult["ITEMS"][0]["COUNTDOWN"]["seconds"]?></p>
                                    <p class="type-seconds type-time"><?=declension_word($arResult["ITEMS"][0]["COUNTDOWN"]["seconds"], array(GetMessage("COUNTDOWN_SECONDS_LEFT_1"), GetMessage("COUNTDOWN_SECONDS_LEFT_2"), GetMessage("COUNTDOWN_SECONDS_LEFT_3")))?></p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
        <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 text-center">
            <a id="feedback_modal" data-url="<?=URL_FOR_FEEDBACK?>" data-toggle="modal" data-target="#feedback" class="btn btn-default btn-md" href="#"><?=GetMessage("COUNTDOWN_SEND_REQUEST")?></a>
        </div>
    </div>
<? endif;?>