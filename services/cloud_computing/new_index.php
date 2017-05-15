<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Google Apps for Work - приложения для бизнеса");
$APPLICATION->SetPageProperty("description", "Корпоративный облачный офисный пакет Google Apps for Work для совместной работы в Интернете в любое время, в любом месте и на любом устройстве.");
?>

	<!--Off-Canvas-->
		<div class="off-canvas-wrap" data-offcanvas>
			<div class="inner-wrap">

			<!--Off-Canvas Menu-->
<?$APPLICATION->IncludeComponent("bitrix:main.include", "", Array("AREA_FILE_SHOW" => "file", "PATH" => "/include/v2/menu_mobile_inc.php", "EDIT_TEMPLATE" => ""), false);?>


			<!--Layout-->
				<div class="site-layout">

				<!--Fullscreen Hero-->
				<!--Adding class "fullscreen" makes hero height equals window height-->
					<section style="background-image:url();" class="hero-static fullscreen no-space-bottom" data-stellar-background-ratio="0.5">
						<div class="overlay white"></div>
						<div class="inner">
							<div class="content">
								<div class="container">
									<div class="row double-space-top double-space-bottom">
										<div class="col-sm-4  hidden-xs">
											<p style="color:#3a3a3a">Авторизированный партнер<br><img src="<?=SITE_TEMPLATE_PATH?>/!custom_img/services_icons/Google_Partner_rgb_final_Roboto-01.png" style="height: 100px;" alt="Google for Work Partner"/></p>
										</div>
										<div class="col-xs-12 visible-xs">
											<p style="font-size: 50%; color:#3a3a3a; text-align:center"><img src="<?=SITE_TEMPLATE_PATH?>/!custom_img/services_icons/Google_Partner_rgb_final_Roboto-01.png" style="height: 100px;" alt="Google for Work Partner"/></p>
										</div>
										<div class="col-sm-4 col-sm-offset-4 hidden-xs">
											<p style="color:#3a3a3a; text-align:right">Москва, улица Новая Басманная, д. 16, стр. 4<br><b>+7 495 374 55 04</b></p>
										</div>
										<div class="col-xs-12 visible-xs">
											<p style="color:#3a3a3a; text-align:center">Москва, улица Новая Басманная, д. 16, стр. 4<br><b>+7 495 374 55 04</b></p>
										</div>
									</div>
									<h1 class="normalcase hidden-xs" style="font-size: 250%; color:#3a3a3a; text-align:center">Google Apps. Внедрение и поддержка</h1>
									<h1 class="normalcase visible-xs" style="font-size: 200%; color:#3a3a3a; text-align:center">Google Apps. Внедрение и поддержка</h1>
									<h2 class="normalcase hidden-xs" style="font-size: 125%; color:#3a3a3a; text-align:center">365 дней в году, по всей России, документальная передача прав на использование</h2>
									<h2 class="normalcase visible-xs" style="font-size: 100%; color:#3a3a3a; text-align:center">365 дней в году, по всей России, документальная передача прав на использование</h2>
									<form method="post" class="GA-CTAForm double-space-top" name="GA-CTAForm" id="GA-CTAForm">
										<div class="row">
											<div class="form-group col-md-4 col-md-offset-4">
												<label class="sr-only" for="CTAEmail">Получите сегодня полноценную версию Google Apps for Work на 30 дней бесплатно</label>
												<input class="form-control input-lg" type="email" name="email" id="CTAEmail" placeholder="Укажите email" required>
											</div>
										</div>
										<div class="row">
											<div class="form-group">
												<input class="btn btn-md btn-primary btn-center" type="submit" value="Получить Google Apps for Work на 30 дней бесплатно" onclick="postCTAFormToGoogle()">
											</div>
										</div>
									</form>
									<div class="row double-space-top hidden-xs">
										<div class="col-lg-3">
											<p style="color:#3a3a3a; text-align:center">Самый быстрый способ старта в корпоративном ИТ-окружении</p>
										</div>
										<div class="col-lg-3">
											<p style="color:#3a3a3a; text-align:center">Полный комплект офисных приложений без установки ПО</p>
										</div>
										<div class="col-lg-3">
											<p style="color:#3a3a3a; text-align:center">Мобильность и совместная работа в реальном времени</p>
										</div>
										<div class="col-lg-3">
											<p style="color:#3a3a3a; text-align:center">99,9% времени гарантированная работа приложений</p>
										</div>
									</div>
									<!-- Thank you -->
									<div class="modal fade" id="thankyou_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Закрыть</span></button>
													<p style="font-size: 1.125em; line-height: 1.5;" class="modal-title" id="myModalLabel">Спасибо! Ваш запрос отправлен.</p>
												</div>
												<div class="modal-body">
													Сейчас мы начнем действовать! :)
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="down-arrow-b hidden-xs"><a href="#ga" class="scroll" data-offset-top="90"></a></div>
					</section><!--Fullscreen Hero Close-->

				<!--Header-->
<?$APPLICATION->IncludeComponent("bitrix:main.include", "", Array("AREA_FILE_SHOW" => "file", "PATH" => "/include/v2/header_cloudcomputing_inc.php", "EDIT_TEMPLATE" => ""), false);?>

				
				<!--Page Content--><!-- InstanceBeginEditable name="content" -->
				<div class="page">

				<!--GA Info Block-->
					<section class="page-block space-top animation" data-animation="zoomIn" id="ga">
						<div class="container">
							<div class="row">
								<div class="col-lg-8 double-space-bottom">
									<h2 class="left normalcase">Google Apps for Work</h2>
									<p><span class="left normalcase" style="font-size: 200%;">Бизнес-приложения с полной интеграцией</span></p>
									<p class="left normalcase">Корпоративный облачный офисный пакет, который предлагает вам и вашей команде множество новых возможностей для <b>совместной работы</b> в Интернете <b>в любое время</b>, <b>в любом месте</b> и <b>на любом устройстве</b> при уровне <b>безопасности и надежности</b>, который раньше могли себе позволить лишь немногие.</p>
									<p><span class="left normalcase" style="font-size: 200%;">С пакетом документов для вашей бухгалтерии</span></p>
									<p class="left normalcase">Оплата в рублях банковским переводом по счету, а не <b>личной картой</b>, а так же консультации, поддержка <b>миграции</b> и внедрения, тренинги и обучение, <b>интеграция с другими</b> онлайн-сервисами, управление безопасностью и мобильными устройствами, <b>резервное копирование</b> и мониторинг работы сервисов, и самое главное постоянная <b>поддержка экспертов</b> по Google Apps for Work.</p>
								</div>
								<div class="col-lg-4" style="text-align:center; border: 1px solid #2f8cea;">
									<br>
									<p class="lead"><b>Получите сегодня расчет стоимости Google Apps for Work и затрат времени на миграцию для вашей компании</b></p>
									<p class="visible-lg">Оставьте контакт и мы вышлем информаци, а так же предложим встречу где раскажем вам о преимуществах Google Apps, ответим на вопросы и поможем составить конкретный план действий.</p>
									<form method="post" class="GA-CTAForm double-space-bottom" name="GA-CTAForm" id="GA-CTAForm">
										<div class="row">
											<div class="form-group col-lg-10 col-lg-offset-1 col-md-6 col-md-offset-1 col-sm-6 col-sm-offset-1 col-xs-12">
												<label class="sr-only" for="CTAEmail"></label>
												<input class="form-control input-lg" type="email" name="email" id="CTAEmail" placeholder="Укажите email" required>
											</div>
											<div class="form-group col-lg-12 col-md-4 col-sm-4 col-xs-12">
												<input class="btn btn-md btn-primary btn-center" type="submit" value="Получить расчет стоимости и сроков" onclick="postCTAFormToGoogle()">
											</div>
										</div>
									</form>
									<!-- Thank you -->
									<div class="modal fade" id="thankyou_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Закрыть</span></button>
													<p style="font-size: 1.125em; line-height: 1.5;" class="modal-title" id="myModalLabel">Спасибо! Ваш запрос отправлен.</p>
												</div>
												<div class="modal-body">
													Только что мы записали ваше обращение, в течении пары минут мы получим электронные письмо о новом сообщении и начнем действовать! :)
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4 col-sm-4">
									<div><img src="<?=SITE_TEMPLATE_PATH?>/!custom_img/services_icons/logo_gmail_192.png" style="height: 50px;" alt="Google GMail"/></div>
									<h4>Gmail</h4>
									<p>Адреса в вашем домене (@vasha_kompaniya.ru), 30 ГБ для хранения писем, совместимость с Microsoft Outlook и другими почтовыми клиентами, отсутствие рекламы.</p>
								</div>
								<div class="col-md-4 col-sm-4">
									<div><img src="<?=SITE_TEMPLATE_PATH?>/!custom_img/services_icons/logo_hangouts_192.png" style="height: 50px;" alt="Google Hangouts"/></div>
									<h4>Hangouts</h4>
									<p>Живое общение с коллегами и клиентами, видеоконференции в HD-формате до 25 участников, доступ с любого устройства, доступ к экрану, функция для трансляций "Hangouts в прямом эфире".</p>
								</div>
								<div class="col-md-4 col-sm-4">
									<div><img src="<?=SITE_TEMPLATE_PATH?>/!custom_img/services_icons/logo_calendar_192.png" style="height: 50px;" alt="Google Calendar"/></div>
									<h4>Календарь</h4>
									<p>Онлайн-календари для совместной работы совместимые с Gmail, Диском, Контактами, Сайтами и Hangouts, публикация календарей на сайте, информация о доступности общих ресурсов.</p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4 col-sm-4">
									<div><img src="<?=SITE_TEMPLATE_PATH?>/!custom_img/services_icons/logo_drive_192.png" style="height: 50px;" alt="Google Drive"/></div>
									<h4>Диск</h4>
									<p>Неограниченное пространство для хранения, автоматическая синхронизация с компьютером, просмотр файлов без специального ПО, управление общим доступом, корпоративная безопасность.</p>
								</div>
								<div class="col-md-4 col-sm-4">
									<div><img src="<?=SITE_TEMPLATE_PATH?>/!custom_img/services_icons/logo_docs_192.png" style="height: 50px;" alt="Google Docs"/></div>
									<h4>Документы</h4>
									<p>Комментарии, чат и правки в режиме реального времени, поддержка всех популярных форматов без установки дополнительного ПО, история правок за все время, офлайн-доступ.</p>
								</div>
								<div class="col-md-4 col-sm-4">
									<div><img src="<?=SITE_TEMPLATE_PATH?>/!custom_img/services_icons/logo_sheets_192.png" style="height: 50px;" alt="Google Sheets"/></div>
									<h4>Таблицы</h4>
									<p>Быстрый многофункциональный редактор таблиц, профессиональный анализ данных, поддержка всех популярных форматов, в том числе Microsoft Excel, доступ с любого устройства.</p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4 col-sm-4">
									<div><img src="<?=SITE_TEMPLATE_PATH?>/!custom_img/services_icons/logo_forms_192.png" style="height: 50px;" alt="Google Forms"/></div>
									<h4>Формы</h4>
									<p>Удобные анкеты и веб-формы для коллег и клиентов без дополнительного ПО, проверка ответов, рассылка по почте или размещение на сайте, анализ ответов и автоматические отчеты...</p>
								</div>
								<div class="col-md-4 col-sm-4">
									<div><img src="<?=SITE_TEMPLATE_PATH?>/!custom_img/services_icons/logo_slides_192.png" style="height: 50px;" alt="Google Slides"/></div>
									<h4>Презентации</h4>
									<p>Совместная работа над эффектными презентациями прямо в браузере, комментарии, чат и правки в режиме реального времени, история правок.</p>
								</div>
								<div class="col-md-4 col-sm-4">
									<div><img src="<?=SITE_TEMPLATE_PATH?>/!custom_img/services_icons/logo_google_plus_192.png" style="height: 50px;" alt="Google Google+"/></div>
									<h4>Google+</h4>
									<p>Социальная сеть для вашей компании.</p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4 col-sm-4">
									<div><img src="<?=SITE_TEMPLATE_PATH?>/!custom_img/services_icons/logo_sites_192.png" style="height: 50px;" alt="Google Sites"/></div>
									<h4>Сайты</h4>
									<p>Профессиональный сайт за пару минут.</p>
								</div>
								<div class="col-md-4 col-sm-4">
									<div><img src="<?=SITE_TEMPLATE_PATH?>/!custom_img/services_icons/logo_vault_192.png" style="height: 50px;" alt="Google Vault"/></div>
									<h4>Сейф</h4>
									<p>Архивирование и предоставление переписки.</p>
								</div>
								<div class="col-md-4 col-sm-4">
									<div><img src="<?=SITE_TEMPLATE_PATH?>/!custom_img/services_icons/logo_admin_192.png" style="height: 50px;" alt="Google Admin"/></div>
									<h4>Консоль администратора</h4>
									<p>Управление сервисами и настройками Google Apps.</p>
								</div>
							</div>
						</div>
					</section><!--GA Info Block Close-->
					
				<!--5M Info Block-->
					<section style="background-image:url(<?=SITE_TEMPLATE_PATH?>/!custom_img/home/hero/fullscreen/sky-2400x1600-min.jpg);" class="fw-img-banner light-text double-space-top animation" data-animation="zoomIn" data-stellar-vertical-offset="-800" data-stellar-background-ratio="0.5" id="5M">
						<div class="overlay"></div>
						<div class="container">
							<div class="page-heading center">
								<h2>5 миллионов организаций в мире выбрали Google Apps<span></span></h2>
								<p class="lead"></p>
							</div>
						</div>
					</section><!--5M Info Block-->
					
				<!--GA Plans-->
					<section class="page-block double-space-top double-space-bottom animation" data-animation="zoomIn" id="price_ga">
						<div class="container">
							<div class="page-heading center">
								<h2>Стоимость Google Apps for Work<span></span></h2>
								<div>Безналичный расчет по курсу ЦБ РФ</div>
							</div>
							<div class="row">
								<div class="col-md-5 col-md-offset-1">
									<div class="pricing-plan type-2">
										<div class="price-title">
											<span>Google Apps</span>
											<p class="h4"><span>$ 5</span><br>за пользователя в месяц</p>
											<p class="h4">или $ 50 за пользователя в год</p>
										</div>
										<p class="h5">Возможности<br>Google Apps for Work:</p>
										<div class="pricing-content">
											<p></p>
											<ul class="list-unstyled">
												<li>Корпоративный адрес электронной почты (name@companyname.ru).</li>
												<li>Голосовой чат и видеочат.</li>
												<li>Интегрированные онлайн-календари.</li>
												<li>30 ГБ на Диске для хранения файлов.</li>
												<li>Работа с документами, электронными таблицами, презентациями и формами в Интернете.</li>
												<li>Удобный редактор для создания сайтов.</li>
												<li>Инструменты для обеспечения безопасности.</li>
												<li>Круглосуточная поддержка по телефону и электронной почте.</li>
											</ul>
											<a class="btn btn-md btn-primary btn-center scroll" data-offset-top="90" href="#contact_form">Связаться с нами</a>
										</div>
									</div>
								</div>
								<div class="col-md-5">
									<div class="pricing-plan type-2">
										<div class="price-title">
											<span>Google Apps Unlimited</span>
											<p class="h4"><span>$ 10</span><br>за пользователя в месяц</p>
											<p class="h4">или $ 120 за пользователя в год</p>
										</div>
										<p class="h5">Все функции<br>Google Apps for Work, а также:</p>
										<div class="pricing-content">
											<p></p>
											<ul class="list-unstyled">
												<li>Неограниченное пространство для хранения данных (или 1 ТБ на одного пользователя, если их меньше пяти).</li>
												<li>Расширенные функции администрирования Диска.</li>
												<li>Аудит и отчеты о работе с контентом на Диске.</li>
												<li>Сейф для предоставления электронных документов: хранение электронной почты, чатов, документов и файлов.</li>
												<li>Простой поиск и экспорт данных в разные форматы.</li>
												<li>Архивирование всех писем, отправленных из домена.</li>
												<li>Настройка правил хранения данных.</li>
											</ul>
											<a class="btn btn-md btn-primary btn-center scroll" data-offset-top="90" href="#contact_form">Связаться с нами</a>
										</div>
									</div>
								</div>
							</div>							
						</div>
					</section><!--Pricing Plans Close-->

				<!--Why GA ITO Info Block-->
					<section class="page-block double-space-top double-space-bottom animation" data-animation="zoomIn" id="why_ga">
						<div class="container">
							<div class="page-heading center">
								<h2>Преимущества Google Apps for Work<span></span></h2>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="row icon-block">
										<div class="col-sm-2 featured-icon center"><i class="fa fa-rocket"></i></div>
										<div class="col-sm-10">
											<h3>Доступ к данным, где бы вы ни находились</h3>
											<p>Работайте в любом месте на любом устройстве – компьютере, планшете или телефоне. Составьте коммерческое предложение в офисе, перечитайте его по дороге к клиенту и внесите финальные правки с телефона за несколько минут до начала встречи – все это в Документах. Используйте рабочее время по максимуму. <b>(Gmail, Диск, Документы)</b></p>
										</div>
									</div>
									<div class="row icon-block">
										<div class="col-sm-2 featured-icon center"><i class="fa fa-users"></i></div>
										<div class="col-sm-10">
											<h3>Эффективная работа в команде</h3>
											<p>В Календаре можно легко запланировать совещание, быстро выбрав время, удобное для всех. Вы получите напоминание о видеовстрече по электронной почте и сможете без труда присоединиться к ней, чтобы общаться в Hangouts. Сэкономьте время на планировании и используйте его, чтобы вместе с коллегами довести презентацию до совершенства. <b>(Gmail, Hangouts, Календарь, Презентации)</b></p>
										</div>
									</div>
									<div class="row icon-block">
										<div class="col-sm-2 featured-icon center"><i class="fa fa-shield"></i></div>
										<div class="col-sm-10">
											<h3>Безопасность устройств и данных</h3>
											<p>Предоставьте коллегам доступ к файлам в Таблицах и вместе редактируйте их в режиме реального времени. Последняя версия документов всегда доступна на Диске, так что вам не придется тратить время на пересылку файлов по электронной почте. <b>(Диск, Таблицы, Hangouts)</b></p>
										</div>
									</div>
									<div class="row icon-block">
										<div class="col-sm-2 featured-icon center"><i class="fa fa-thumbs-o-up"></i></div>
										<div class="col-sm-10">
											<h3>Эксперты на расстоянии одного звонка</h3>
											<p>Мы получили статус авторизированного реселлера в 2012 году, провели десятки внедрений Google Apps в разных организациях. В штате сертифицированные Google менеджеры, тренеры и инженеры. Обеспечиваем уникальный уровень поддержки пользователей Google Apps.<b></b></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section><!--Why GA ITO Info Block Close-->

				<!--Footer-->
<?$APPLICATION->IncludeComponent("bitrix:main.include", "", Array("AREA_FILE_SHOW" => "file", "PATH" => "/include/v2/footer_inc.php", "EDIT_TEMPLATE" => ""), false);?>

				</div><!--Layout Close-->
			<!-- close the off-canvas menu -->
				<a class="exit-off-canvas"></a>

			</div>
		</div><!--Off-Canvas Close-->

	<!--Sticky Buttons-->
<?$APPLICATION->IncludeComponent("bitrix:main.include", "", Array("AREA_FILE_SHOW" => "file", "PATH" => "/include/v2/sticky_buttons_inc.php", "EDIT_TEMPLATE" => ""), false);?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>