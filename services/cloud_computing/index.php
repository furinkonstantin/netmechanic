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

				<!--Header-->
<?$APPLICATION->IncludeComponent("bitrix:main.include", "", Array("AREA_FILE_SHOW" => "file", "PATH" => "/include/v2/header_cloudcomputing_inc.php", "EDIT_TEMPLATE" => ""), false);?>


				<!--Page Content--><!-- InstanceBeginEditable name="content" -->
					<div class="page">

					<!--Fullscreen Hero-->
						<section style="background-image:url(<?=SITE_TEMPLATE_PATH?>/!custom_img/home/hero/mail-min.jpg);height:700px;" class="hero-static double-space-bottom animation" data-animation="zoomIn" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="200">
							<div class="overlay"></div>
							<div class="inner">
								<div class="content">
									<div class="container">
										<div class="row">
											<div class="col-lg-8">
												<h1 class="light-color left normalcase">Google Apps for Work</h1>
												<p><span class="light-color left normalcase" style="font-size: 200%;">Бизнес-приложения с полной интеграцией</span></p>
												<p class="light-color left normalcase visible-lg">Корпоративный облачный офисный пакет, который предлагает вам и вашей команде множество новых возможностей для <b>совместной работы</b> в Интернете <b>в любое время</b>, <b>в любом месте</b> и <b>на любом устройстве</b> при уровне <b>безопасности и надежности</b>, который раньше могли себе позволить лишь немногие.</p>
												<p><span class="light-color left normalcase" style="font-size: 200%;">С пакетом документов для вашей бухгалтерии</span></p>
												<p class="light-color left normalcase visible-lg">Оплата в рублях банковским переводом по счету, а не <b>личной картой</b>, а так же консультации, поддержка <b>миграции</b> и внедрения, тренинги и обучение, <b>интеграция с другими</b> онлайн-сервисами, управление безопасностью и мобильными устройствами, <b>резервное копирование</b> и мониторинг работы сервисов, и самое главное постоянная <b>поддержка экспертов</b> по Google Apps for Work.</p>
											</div>
											<div class="col-lg-4" style="text-align:center; border: 1px solid white;">
												<br>
												<p class="">Получите бесплатную консультацию</p>
												<p class="normalcase visible-lg">Оставьте контакт и мы раскажем вам о преимуществах Google Apps, ответим на вопросы и поможем составить конкретный план действий.</p>
												<form method="post" class="GA-CTAForm double-space-bottom" name="GA-CTAForm" id="GA-CTAForm">
													<div class="row">
														<div class="form-group col-lg-10 col-lg-offset-1 col-md-6 col-md-offset-1 col-sm-6 col-sm-offset-1 col-xs-12">
															<label class="sr-only" for="CTAEmail"></label>
															<input class="form-control input-lg" type="email" name="email" id="CTAEmail" placeholder="Укажите email" required>
														</div>
														<div class="form-group col-lg-12 col-md-4 col-sm-4 col-xs-12">
															<input class="btn btn-md btn-primary btn-center" type="submit" value="Отправить" onclick="postCTAFormToGoogle()">
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
												<p class="normalcase">или</p>
												<p class="normalcase"><a class="btn btn-md btn-outlined-invert btn-center scroll" data-offset-top="90" href="https://www.google.ru/a/signup/">Начаните использовать Google Apps сегодня</a><br> 30 дней бесплатно без кредитной карты и без установки программ</p>
												<p class="normalcase"><b>А если вы УЖЕ в Google Apps</b>, просто подключайтесь к нам - удобно иметь <b>экспертов</b> на расстоянии одного звонка, тем более когда это <b>бесплатно</b>.</p>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-12">
												<p class="">Звоните сегодня: <a href="tel:+7 (495) 374 55 04">+7 495 374 55 04</a></p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section><!--Fullscreen Hero Close-->
			
					<!--Why GA ITO Info Block-->
						<section class="page-block double-space-top double-space-bottom animation" data-animation="zoomIn">
							<div class="container">
								<div class="page-heading center">
									<h3>Как работает Google Apps for Work?<span></span></h3>
								</div>
								<div class="row">
									<div class="col-md-10 col-md-offset-1">
										<div class="row icon-block">
											<div class="col-sm-2 featured-icon center"><i class="fa fa-rocket"></i></div>
											<div class="col-sm-10">
												<h5>Доступ к данным, где бы вы ни находились</h5>
												<p>Работайте в любом месте на любом устройстве – компьютере, планшете или телефоне. Составьте коммерческое предложение в офисе, перечитайте его по дороге к клиенту и внесите финальные правки с телефона за несколько минут до начала встречи – все это в Документах. Используйте рабочее время по максимуму. <b>(Gmail, Диск, Документы)</b></p>
											</div>
										</div>
										<div class="row icon-block">
											<div class="col-sm-2 featured-icon center"><i class="fa fa-users"></i></div>
											<div class="col-sm-10">
												<h5>Эффективная работа в команде</h5>
												<p>В Календаре можно легко запланировать совещание, быстро выбрав время, удобное для всех. Вы получите напоминание о видеовстрече по электронной почте и сможете без труда присоединиться к ней, чтобы общаться в Hangouts. Сэкономьте время на планировании и используйте его, чтобы вместе с коллегами довести презентацию до совершенства. <b>(Gmail, Hangouts, Календарь, Презентации)</b></p>
											</div>
										</div>
										<div class="row icon-block">
											<div class="col-sm-2 featured-icon center"><i class="fa fa-shield"></i></div>
											<div class="col-sm-10">
												<h5>Безопасность устройств и данных</h5>
												<p>Предоставьте коллегам доступ к файлам в Таблицах и вместе редактируйте их в режиме реального времени. Последняя версия документов всегда доступна на Диске, так что вам не придется тратить время на пересылку файлов по электронной почте. <b>(Диск, Таблицы, Hangouts)</b></p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section><!--Why GA ITO Info Block Close-->

					<!--ITO Plans-->
						<section class="page-block double-space-top double-space-bottom animation" data-animation="zoomIn" id="price_ito">
							<div class="container">
								<div class="page-heading center">
									<h3>Сколько стоит Google Apps for Work?<span></span></h3>
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

					<!--Services-->
						<section class="page-block" id="services">
							<div class="container">
								<div class="page-heading center">
									<h3>Почему NetMechanic?<span></span></h3>
								</div>
								<!--Harmonic Widget-->
								<div class="harmonic">
									<div class="row">
										<div class="item">
											<a href="#" style="background-image: url(<?=SITE_TEMPLATE_PATH?>/!custom_img/about/harmonic/stars-min.jpg);" class="image"></a>
											<h4>Консультации</h4>
											<div class="info">
												<h4>Бесплатные консультации<span></span></h4>
												<p>Наши сертифицированные менеджеры по продажам бесплатно раскажут про все тонкости использования Google Apps for Work.</p>
											</div>
										</div>
										<div class="item">
											<a href="#" style="background-image: url(<?=SITE_TEMPLATE_PATH?>/!custom_img/about/harmonic/tools-min.jpg);" class="image"></a>
											<h4>Внедрение</h4>
											<div class="info">
												<h4>Помощь при внедрении<span></span></h4>
												<p>С получения статуса авторизированного реселлера (2012 год) мы провели десятки внедрений Google Apps в разных организациях - мы готовы справится с любыми трудностями на этом этапе.</p>
											</div>
										</div>
										<div class="item">
											<a href="#" style="background-image: url(<?=SITE_TEMPLATE_PATH?>/!custom_img/about/harmonic/coffe-min.jpg);" class="image"></a>
											<h4>Поддержка</h4>
											<div class="info">
												<h4>Уникальная поддержка<span></span></h4>
												<p>Вы можете использовать наших инженеров по всем сложным вопросам связанным с эксплуатацией Google Apps for Work, а кроме того мы можем предложить вам расширенную поддержку всех ваших пользователей по любому ИТ-вопросу (от $ 1 за пользователя в месяц, расчитывается индивидуально).</p>
											</div>
										</div>
										<div class="item">
											<a href="#" style="background-image: url(<?=SITE_TEMPLATE_PATH?>/!custom_img/about/harmonic/books-min.jpg);" class="image"></a>
											<h4>Оплата</h4>
											<div class="info">
												<h4>Оплата по счету<span></span></h4>
												<p>Мы предоставляем возможность оплачивать Google Apps <b>по счету в рублях</b> со всеми необходимыми бухгалтерским документами.</p>
											</div>
										</div>
									</div>
								</div> 
							</div>
						</section><!--Services Close-->

					<!--2 Cols Info Block-->
						<section class="page-block space-top animation" data-animation="zoomIn">
							<div class="container">
								<div class="row">
									<div class="col-md-4 col-md-push-8 double-space-bottom">
										<div class="image-3d"><img src="http://netmechanic.ru/services/img/googleappsforwork.jpg" alt="Google Apps for Work"/></div>
									</div>
									<div class="col-md-8 col-md-pull-4 space-bottom">
										<h3 class="featured-heading" style="font-size: 150%;">Какя выгода от Google Apps для бизнеса?</h3>
										<ul class="featured-list">
											<li>Проверенное сокращение расходов</li>
											<li>Эффективная совместная работа</li>
											<li>Мобильность сотрудников</li>
											<li>99,9% гарантия доступности</li>
											<li>Соблюдение стандартов информационной защиты</li>
											<li>Простота и гибкость управления</li>
											<li>Круглосуточная поддержка пользователей и администраторов</li>
										</ul>
									</div>
								</div>
								<span id="cabling"></span>
							</div>
						</section><!--2 Cols Info Block Close-->

					<!--Work-->
<?$APPLICATION->IncludeComponent("bitrix:main.include", "", Array("AREA_FILE_SHOW" => "file", "PATH" => "/include/v2/howtowork_inc.php", "EDIT_TEMPLATE" => ""), false);?>


						<span id="form"></span></br></br>
					<!--Contact Form-->
<?$APPLICATION->IncludeComponent("bitrix:main.include", "", Array("AREA_FILE_SHOW" => "file", "PATH" => "/include/v2/form_inc.php", "EDIT_TEMPLATE" => ""), false);?>

					<!-- Thank you -->
						<div class="modal fade" id="thankyou_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Закрыть</span></button>
										<h4 class="modal-title" id="myModalLabel">Спасибо! Ваш запрос отправлен.</h4>
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

					</div><!--Page Close-->

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