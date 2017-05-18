<!doctype html>
<!--Conditionals for IE8-9 Support-->
<!--[if IE]><html lang="ru" class="ie"><![endif]-->
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=<?=LANG_CHARSET?>" />
        <title><?$APPLICATION->ShowTitle()?></title>
		<meta charset="<?=LANG_CHARSET?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <? 
            $APPLICATION->SetAdditionalCSS(OLD_TEMPLATE_PATH. "masterslider/style/masterslider.css");
            $APPLICATION->SetAdditionalCSS(OLD_TEMPLATE_PATH. "masterslider/skins/light-6/style.css");
            $APPLICATION->SetAdditionalCSS(OLD_TEMPLATE_PATH. "css/styles.css");
            $APPLICATION->SetAdditionalCSS(OLD_TEMPLATE_PATH. "!custom_css/styles.css");
            $APPLICATION->SetAdditionalCSS(OLD_TEMPLATE_PATH. "css/colors/color-2f8cea.css");
            $APPLICATION->SetAdditionalCSS(MAIN_TEMPLATE_PATH. "css/new.css");
            $APPLICATION->SetAdditionalCSS(MAIN_TEMPLATE_PATH. "css/fixes.css");
            $APPLICATION->AddHeadString('<link rel="publisher" href="https://plus.google.com/u/0/112262134672802413708">');
            $APPLICATION->AddHeadString('<link rel="shortcut icon" type="image/x-icon" href="'.OLD_TEMPLATE_PATH.'img/favicon.png" />');
            $APPLICATION->AddHeadString('<!--[if lt IE 9]><script src="'.OLD_TEMPLATE_PATH.'js/plugins/respond.js"></script><![endif]-->');
            $APPLICATION->AddHeadScript(MAIN_TEMPLATE_PATH. "js/libs/modernizr.custom.js");
        ?>
        <?$APPLICATION->ShowHead();?>
	</head>

	<!--Body-->
	<body class="parallax animated fadeIn">
        
		<div id="panel"><?$APPLICATION->ShowPanel();?></div>
		
		<!--Off-Canvas-->
		<div class="off-canvas-wrap" data-offcanvas>
			<div class="inner-wrap">

				<!--Off-Canvas Menu-->
				<aside class="left-off-canvas-menu">
					<div class="mobile-navi animation" data-animation="zoomIn">
						<?
                            $APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/v3/mobile/form_search.php"), false);
                        ?>
						<?
                            $APPLICATION->IncludeComponent('bitrix:menu', "top_menu_mobile", array(
                                    "ROOT_MENU_TYPE" => "top",
                                    "CHILD_MENU_TYPE" => "top_child", 
                                    "MENU_CACHE_TYPE" => "A",
                                    "MENU_CACHE_TIME" => "36000000",
                                    "MENU_CACHE_USE_GROUPS" => "Y",
                                    "MENU_CACHE_GET_VARS" => array(),
                                    "MAX_LEVEL" => "2",
                                    "USE_EXT" => "Y",
                                    "ALLOW_MULTI_SELECT" => "N"
                                )
                            );
                        ?>
					</div>
				</aside>
				<!--Off-Canvas Menu Close-->

				<?
                    $APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/v3/feedback_modal.php"), false);
                ?>

				<!--Layout-->
				<div class="site-layout">

					<!--Header-->
					<header class="header transparent">
						<div class="inner">
							<div class="container group animation" data-animation="zoomIn">
								
                                <?
                                    $APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/v3/logo.php"), false);
                                ?>
								
								<!--Navigation Toggle-->
								<div class="left-off-canvas-toggle" id="nav-toggle"><span></span></div>
								
								<?
                                    $APPLICATION->IncludeComponent('bitrix:menu', "top_menu", array(
                                            "ROOT_MENU_TYPE" => "top",
                                            "CHILD_MENU_TYPE" => "top_child", 
                                            "MENU_CACHE_TYPE" => "A",
                                            "MENU_CACHE_TIME" => "36000000",
                                            "MENU_CACHE_USE_GROUPS" => "Y",
                                            "MENU_CACHE_GET_VARS" => array(),
                                            "MAX_LEVEL" => "2",
                                            "USE_EXT" => "Y",
                                            "ALLOW_MULTI_SELECT" => "N"
                                        )
                                    );
                                ?>
								
                                <?
                                    $APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/v3/feedback_button.php"), false);
                                ?>
								
							</div>
						</div>
					</header>
					<!--Header Close-->

					<!--Page Content-->
					<div class="page">