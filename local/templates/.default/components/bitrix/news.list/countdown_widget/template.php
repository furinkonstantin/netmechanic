<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?ob_start();?>
<? if (!empty($arResult["ITEMS"])):?>
    <div class="page-heading center animation fadeInUp animated" data-animation="fadeInUp">
        <h2><?=GetMessage("COUNTDOWN_TITLE")?><span></span></h2>
    </div>
    <div class="row">
        <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
            <p class="text-center"><?=GetMessage("COUNTDOWN_DESCRIPTION")?></p>
        </div>
        #DYNAMIC#
        <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 text-center">
            <a id="feedback_modal" data-url="<?=URL_FOR_FEEDBACK?>" data-toggle="modal" data-target="#feedback" class="btn btn-default btn-md" href="#"><?=GetMessage("COUNTDOWN_SEND_REQUEST")?></a>
        </div>
    </div>
<? endif;?>
<?$this->__component->arResult["CACHED_TPL"] = @ob_get_contents(); ob_get_clean();?>