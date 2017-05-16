<?
    if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
        require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
    }
?>
<div class="modal fade" id="feedback" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <div class="page-heading center">
                <h3>Обратная связь<span></span></h3>
            </div>
            <div class="modal-body text-center">
                <p>Ваши сообщения попадают в автоматизированную систему обработки сообщений. Мы на связи в круглосуточном режиме. Если Вы наш действующий клиент, то укажите свой корпоротивный email, так Вы будете идентифицированы автоматически, а значит быстрее будет выполнен запрос. Если Вы ещё не наш клиент, мы готовы прити на помощь!</p>
                <div id="feedback_block">
                    <?
                        $APPLICATION->IncludeComponent(
                        "dev:form.send", 
                        "feedback", 
                        array(
                            "COMPONENT_TEMPLATE" => "feedback",
                            "IS_ADD_IBLOCK" => "N",
                            "IBLOCK_TYPE" => "-",
                            "IBLOCK_ID" => "",
                            "NAME" => "",
                            "VAR_FOR_EMAIL" => "EMAIL",
                            "VAR_FOR_PHONE" => "PHONE",
                            "SUBMIT_VALUE" => "feedback",
                            "ACTIVE" => "N",
                            "REQUIRED_FIELDS" => array(
                                0 => "NAME",
                                1 => "EMAIL",
                                2 => "MESSAGE"
                            ),
                            "SHOW_FIELDS" => array(
                                0 => "NAME",
                                1 => "EMAIL",
                                2 => "MESSAGE"
                            ),
                            "SHOW_FIELDS_TEXT" => array(
                                0 => "Имя",
                                1 => "Электронная почта",
                                2 => "Сообщение"
                            ),
                            "VALID_EMAIL" => "Y",
                            "VALID_PHONE" => "N",
                            "SEND_ON_EMAIL" => "Y",
                            "TEMPLATE_EMAIL" => "NEW_USER",
                            "TEMPLATE_ID" => "1",
                            "SUCCESS_TEXT" => "Спасибо! С Вами свяжутся в ближайшее время!",
                            "USE_CAPTCHA" => "N",
                            "FILES_WITHOUT_AJAX" => array(
                            ),
                            "AJAX_MODE" => "N",
                            "AJAX_OPTION_JUMP" => "N",
                            "AJAX_OPTION_STYLE" => "Y",
                            "AJAX_OPTION_HISTORY" => "N",
                            "AJAX_OPTION_ADDITIONAL" => "",
                            "CACHE_TYPE" => "A",
                            "CACHE_TIME" => "3600"
                        ),
                        false
                    );
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>