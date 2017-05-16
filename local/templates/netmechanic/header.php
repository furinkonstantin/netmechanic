<!doctype html>
<!--Conditionals for IE8-9 Support-->
<!--[if IE]><html lang="ru" class="ie"><![endif]-->
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=<?=LANG_CHARSET?>" />
        <title><?$APPLICATION->ShowTitle()?></title>
        <meta name="robots" content="index, follow" />
        <meta name="description" content="Команда профессионалов предлагает свои услуги - ИТ-аутсорсинг, облачные решения, служба поддержки, автоматизация деятельности, защита информации, кабельные сети" />
        <link href="<?=MAIN_TEMPLATE_PATH?>css/main.css" type="text/css"  data-template-style="true"  rel="stylesheet" />
		<meta charset="<?=LANG_CHARSET?>">
		<link rel="publisher" href="https://plus.google.com/u/0/112262134672802413708">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<link rel="shortcut icon" href="/bitrix/templates/KEDAVRA/img/favicon.png" type="image/x-icon">
		<link rel="icon" href="/bitrix/templates/KEDAVRA/img/favicon.png" type="image/x-icon">
		<link href="/bitrix/templates/KEDAVRA/masterslider/style/masterslider.css" rel="stylesheet" media="screen"/>
		<link href="/bitrix/templates/KEDAVRA/masterslider/skins/light-6/style.css" rel="stylesheet" media="screen"/>
		<link href="/bitrix/templates/KEDAVRA/css/styles.css" rel="stylesheet" media="screen"/>
		<link href="/bitrix/templates/KEDAVRA/!custom_css/styles.css" rel="stylesheet" media="screen"/>
		<link class="color-scheme" href="/bitrix/templates/KEDAVRA/css/colors/color-2f8cea.css" rel="stylesheet" media="screen">
        <!--[if lt IE 9]>
            <script src="/bitrix/templates/KEDAVRA/js/plugins/respond.js"></script>
        <![endif]-->
		<script defer type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA5DLwPPVAz88_k0yO2nmFe7T9k1urQs84"></script>
		<script defer src="/bitrix/templates/KEDAVRA/js/libs/modernizr.custom.js"></script>
		<link href="/bitrix/templates/KEDAVRA/css/new.css" type="text/css" rel="stylesheet" />
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
						<form method="get" class="mobile-search">
							<label class="sr-only" for="m-search"></label>
							<input class="form-control input-lg" name="m-search" id="m-search" type="text" placeholder="Поиск">
							<button type="submit"><i class="flaticon-search100"></i></button>
						</form>
						<ul>
							<li class="current"><a href="/">Услуги и решения</a><span></span>
								<ul class="submenu">
									<li><a href="/services/it_outsourcing/">ИТ-аутсорсинг</a></li>
                                    <li><a href="#automatization">Автоматизация</a></li>
									<li><a href="#security">Защита информации</a></li>
									<li><a href="#cabling">Кабельные сети</a></li>
								</ul>
							</li>
							<li><a href="#callbackhunter">Позвать на помощь</a></li>
							<li><a href="#contacts">Контакты</a></li>
						</ul>
					</div>
				</aside>
				<!--Off-Canvas Menu Close-->

				<!--Modal-->
				<div class="modal fade" id="feedback" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<div class="page-heading center">
								<h3>Обратная связь<span></span></h3>
							</div>
							<div class="modal-body text-center">
								<p>Ваши сообщения попадают в автоматизированную систему обработки сообщений. Мы на связи в круглосуточном режиме. Если Вы наш действующий клиент, то укажите свой корпоротивный email, так Вы будете идентифицированы автоматически, а значит быстрее будет выполнен запрос. Если Вы ещё не наш клиент, мы готовы прити на помощь!</p>

								<form method="post" class="contact-form" name="contact-form" id="contact-form" novalidate="novalidate">
									<div class="row">
										<div class="form-group col-md-12 col-sm-12">
											<label class="sr-only" for="FormName"></label>
											<input class="form-control input-lg" type="text" name="name" id="FormName" placeholder="Укажите имя" required="" aria-required="true">
										</div>
										<div class="form-group col-md-12 col-sm-12">
											<label class="sr-only" for="FormEmail"></label>
											<input class="form-control input-lg" type="email" name="email" id="FormEmail" placeholder="Укажите e-mail" required="" aria-required="true">
										</div>
										<div class="form-group col-md-12 col-sm-12">
											<label class="sr-only" for="FormMessage"></label>
											<input class="form-control input-lg" type="text" name="message" id="FormMessage" placeholder="Ваше сообщение" required="" aria-required="true">
										</div>
									</div>
									<input class="btn btn-lg btn-primary btn-center" type="submit" value="Отправить" onclick="postFormToGoogle()">
								</form>
							</div>
						</div>
					</div>
				</div>
				<!--Modal Close-->

				<!--Layout-->
				<div class="site-layout">

					<!--Header-->
					<header class="header transparent">
						<div class="inner">
							<div class="container group animation" data-animation="zoomIn">
								
								<!--Logo-->
								<a class="logo" href="/">
									<img src="/bitrix/templates/KEDAVRA/img/logo.svg" data-logo-default="/bitrix/templates/KEDAVRA/img/logo.svg" data-logo-alt="/bitrix/templates/KEDAVRA/img/logo.svg" class="logo__img" alt="NetMechanic ABS"/>
								</a>
								
								<!--Navigation Toggle-->
								<div class="left-off-canvas-toggle" id="nav-toggle"><span></span></div>
								
								<!--Site Navigation-->
								<div class="navigation">
									<nav class="menu">
										<ul>
											<li><a href="#">Услуги</a></li>
											<li><a href="#">Цены</a></li>
											<li><a href="#">Контакты</a></li>
										</ul>
									</nav>
								</div>
								<!--Site Navigation Close-->
								
								<!--Tools-->  
								<div class="tools group">
									<a class="btn btn-transparent btn-md btn-primary pull-right" style="margin-top:25px !important;" href="#" data-toggle="modal" data-target="#feedback">Обратная связь</a>
								</div>
								<!--Tools Close-->
								
							</div>
						</div>
					</header>
					<!--Header Close-->

					<!--Page Content-->
					<div class="page">

						<!--IT Outsourcing Service Fullscreen Hero-->
						<section style="background-image:url(/bitrix/templates/KEDAVRA/!custom_img/home/hero/fullscreen/black-and-white-city-man-people.jpg);" class="hero-static fullscreen animation" data-animation="fadeInUp" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="250">
							<div class="overlay dark"></div>
							<div class="inner">
								<div class="content">
									<div class="container">
										<h1 class="light-color left">ИТ-аутсорсинг</h1>
										<p><span class="light-color left normalcase" style="font-size: 200%;">Время и золотые руки оптом и в розницу</span></p>
										<p class="light-color left normalcase hidden-xs">Для успешного развития бизнеса необходимо функционирование сопутствующих ИТ-сервисов — поддержку таких систем осуществляют профессионалы. Опытные системные администраторы стоят дорого, попытки же сэкономить и пригласить «недорогих» сотрудников или обратиться к фрилансерам приводят к проблемам и сбоям сервисов.</p>
										<p class="light-color left normalcase hidden-xs">Инженеры компании NetMecahnic ABS возьмут на себя частично или в полном объеме непрофильные для вас информационно-технологические задачи бизнеса от создания ИТ-инфраструктуры и технической поддержки рабочих мест сотрудников до разработки программного обеспечения и организации информационной защиты корпоративных информационных систем.</p>
										<p class="light-color left normalcase hidden-xs">Сосредоточьтесь на своем бизнесе и не тратьте ресурсы на найм и содержание штата технических сотрудников, делегируйте ИТ задачи специализированной компании - мы оправдаем доверие.</p>
										<a class="btn btn-default btn-md" data-offset-top="90" href="services/it_outsourcing/">Подробнее</a>
									</div>
								</div>
							</div>
						</section>
