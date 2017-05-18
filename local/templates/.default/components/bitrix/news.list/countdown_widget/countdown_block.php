<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
    <div class="countdown countdown-container container"
         data-start="<?=time()?>"
         data-end="<?=$ITEM["END_TIME"]?>"
         data-now="<?=time()?>"
         data-border-color="#ff5000">
         <!-- linear-gradient(#ff5000, #ff9933) -->

        <div class="clock row">
        
            <div class="clock-item clock-days countdown-time-value col-lg-4 col-md-4 col-sm-4">
                <div class="wrap">
                    <div class="inner">
                        <div id="canvas-days" class="clock-canvas"></div>

                        <div class="text">
                            <p class="val"><?=$ITEM["COUNTDOWN"]["days"]?></p>
                            <p class="type-days type-time"><?=declension_word($ITEM["COUNTDOWN"]["days"], array(GetMessage("COUNTDOWN_DAYS_LEFT_1"), GetMessage("COUNTDOWN_DAYS_LEFT_2"), GetMessage("COUNTDOWN_DAYS_LEFT_3")))?></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clock-item clock-hours countdown-time-value col-lg-4 col-md-4 col-sm-4">
                <div class="wrap">
                    <div class="inner">
                        <div id="canvas-hours" class="clock-canvas"></div>

                        <div class="text">
                            <p class="val"><?=$ITEM["COUNTDOWN"]["hours"]?></p>
                            <p class="type-hours type-time"><?=declension_word($ITEM["COUNTDOWN"]["hours"], array(GetMessage("COUNTDOWN_HOURS_LEFT_1"), GetMessage("COUNTDOWN_HOURS_LEFT_2"), GetMessage("COUNTDOWN_HOURS_LEFT_3")))?></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clock-item clock-minutes countdown-time-value col-lg-4 col-md-4 col-sm-4">
                <div class="wrap">
                    <div class="inner">
                        <div id="canvas-minutes" class="clock-canvas"></div>

                        <div class="text">
                            <p class="val"><?=$ITEM["COUNTDOWN"]["minutes"]?></p>
                            <p class="type-minutes type-time"><?=declension_word($ITEM["COUNTDOWN"]["minutes"], array(GetMessage("COUNTDOWN_MINUTES_LEFT_1"), GetMessage("COUNTDOWN_MINUTES_LEFT_2"), GetMessage("COUNTDOWN_MINUTES_LEFT_3")))?></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clock-item clock-seconds countdown-time-value col-lg-4 col-md-4 col-sm-4">
                <div class="wrap">
                    <div class="inner">
                        <div id="canvas-seconds" class="clock-canvas"></div>

                        <div class="text">
                            <p class="val"><?=$ITEM["COUNTDOWN"]["seconds"]?></p>
                            <p class="type-seconds type-time"><?=declension_word($ITEM["COUNTDOWN"]["seconds"], array(GetMessage("COUNTDOWN_SECONDS_LEFT_1"), GetMessage("COUNTDOWN_SECONDS_LEFT_2"), GetMessage("COUNTDOWN_SECONDS_LEFT_3")))?></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>