<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("ИТ-аутсорсинг для бизнеса в Москве");
$APPLICATION->SetPageProperty("description", "ИТ-аутсорсинг, абонентское обслуживание компьютеров и серверов, сопровождением информационных систем");
?>

	<!--Off-Canvas-->
		<div class="off-canvas-wrap" data-offcanvas>
			<div class="inner-wrap">

			<!--Off-Canvas Menu-->
<?$APPLICATION->IncludeComponent("bitrix:main.include", "", Array("AREA_FILE_SHOW" => "file", "PATH" => "/include/v2/menu_mobile_inc.php", "EDIT_TEMPLATE" => ""), false);?>


			<!--Layout-->
				<div class="site-layout">

				<!--Header-->
<?$APPLICATION->IncludeComponent("bitrix:main.include", "", Array("AREA_FILE_SHOW" => "file", "PATH" => "/include/v2/header_ito_inc.php", "EDIT_TEMPLATE" => ""), false);?>


				<!--Page Content--><!-- InstanceBeginEditable name="content" -->
					<div class="page">

					<!--Fullscreen Hero-->
						<section style="background-image:url(<?=SITE_TEMPLATE_PATH?>/!custom_img/home/hero/fullscreen/black-and-white-city-man-people.jpg);" class="hero-static double-space-bottom animation" data-animation="zoomIn" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="200">
							<div class="overlay dark"></div>
							<div class="inner">
								<div class="content">
									<div class="container">
										<h1 class="light-color left">ИТ-аутсорсинг</h1>
										<p><span class="light-color left normalcase" style="font-size: 200%;">Надежность и безопасность информационных технологий Вашего бизнеса</span></p>
										<p></p>
										<p class="light-color left normalcase hidden-xs">Мы профессионалы, ИТ работает надежно только под присмотром таких как мы. Защита данных - это не только рутина и технические средства, но и искустное владение и практический опыт, и это тоже про нас.</p>
										<p class="light-color left normalcase hidden-xs">Посмотрите каких результатов мы уже добиваемся, сколько мы просим за свою работу и от чего мы отталкиваемся в сопровождении информационных систем.</p>
										<p class="light-color left normalcase hidden-xs">Ваш бизнес зависит от эффективности выполнения ежедневных операций. Мы знаем как сделать эффективным обслуживание компьютеров и серверов, у Вашего бизнеса появится сильная ИТ-поддержка и это будет дешевле и качественней, чем если вы это сделаете сами. Почему? У нас большой опыт, больше возможностей и мы умеем расставлять приритеты.</p>
									</div>
								</div>
							</div>
						</section><!--Fullscreen Hero Close-->
						
					<!--Advantages ITO Info Block-->
						<section class="page-block double-space-top double-space-bottom animation" data-animation="zoomIn">
							<div class="container">
								<div class="page-heading center">
									<h3>Наши преимущества<span></span></h3>
								</div>
								<div class="row">
									<div class="col-lg-5 col-lg-offset-1 col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2">
										<div class="row icon-block">
											<div class="col-lg-2 col-md-2 col-sm-2 featured-icon center"><i class="fa fa-spinner"></i></div>
											<div class="col-md-9 col-md-offset-1 col-sm-8 col-sm-offset-2">
												<h5>Четко отстроенный процесс обслуживания</h5>
												<p>Используем систему автоматизации обработки вопросов сотрудников клиентов. У нас разделена обработка простых и сложных задач. Мы понимаем что такое вовремя и в срок. Вы удивитесь, тому что ИТ поддержка может работать как часы.</p>
											</div>
										</div>
										<div class="row icon-block">
											<div class="col-lg-2 col-md-2 col-sm-2 featured-icon center"><i class="fa fa-puzzle-piece"></i></div>
											<div class="col-md-9 col-md-offset-1 col-sm-8 col-sm-offset-2">
												<h5>Гибкость и Прозрачность</h5>
												<p>Предложим вам тот пакет услуг и в том формате, что подойдет лучше всего для вас. Мы встроимся в ваши бизнес процессы лучше чем штатный сотрудник или подразделение. Работаем по SLA (документ четко фиксирующий "кому, что, качество и сроки")</p>
											</div>
										</div>
										<div class="row icon-block">
											<div class="col-lg-2 col-md-2 col-sm-2 featured-icon center"><i class="fa fa-heart-o"></i></div>
											<div class="col-md-9 col-md-offset-1 col-sm-8 col-sm-offset-2">
												<h5>Мы работаем уже почти 10 лет</h5>
												<p>Можем связать вас с нашими заказчиками с кем мы встретились 5-6 лет назад и узнать что они думают о нас. У нас огромный опыт по реализации сервис-деск служб, по управлению ИТ-инфораструктурой и по поддержке рабоих мест.</p>
											</div>
										</div>
									</div>
									<div class="col-lg-5 col-md-4 col-sm-4">
										<div class="row icon-block">
											<div class="col-lg-2 col-md-2 col-sm-2 featured-icon center"><i class="fa fa-thumbs-o-up"></i></div>
											<div class="col-md-9 col-md-offset-1 col-sm-8 col-sm-offset-2">
												<h5>Адаптация ИТ к изменяющимся бизнес-потребностям</h5>
												<p>Знаем как быстро разворачивать необходимые бизнесу сервисы и как отказываться от ненужного.</p>
											</div>
										</div>
										<div class="row icon-block">
											<div class="col-lg-2 col-md-2 col-sm-2 featured-icon center"><i class="fa fa-rub"></i></div>
											<div class="col-md-9 col-md-offset-1 col-sm-8 col-sm-offset-2">
												<h5>Сокращение затра на ИТ</h5>
												<p>Понимаем, что сокращение затрат это один из ключевых путей к выживанию.</p>
											</div>
										</div>
										<div class="row icon-block">
											<div class="col-lg-2 col-md-2 col-sm-2 featured-icon center"><i class="fa fa-shield"></i></div>
											<div class="col-md-9 col-md-offset-1 col-sm-8 col-sm-offset-2">
												<h5>Увеличение защищенности ИТ</h5>
												<p>Знаем на сколько важно для бизнеса быть защищенным и как защищаться в современных условиях. Готовы к проверкам наших инженеров вашей службой безопасности. По статистике собственные сотрудники нарушают регламенты по информационной защите чаще чем сотрудники внешних ИТ-компаний.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section><!--Advantages ITO Info Block Close-->

					<!--ITO Clients-->
						<section style="background-image:url(<?=SITE_TEMPLATE_PATH?>/!custom_img/home/hero/fullscreen/clients.jpg);" class="fw-img-banner light-text double-space-top double-space-bottom animation" data-animation="zoomIn" data-stellar-vertical-offset="-800" data-stellar-background-ratio="0.5" id="clients_ito">
							<div class="overlay"></div>
							<div class="container">
								<div class="page-heading center">
									<h2>Клиенты</h2>
									<h3>Компании которые нам доверяют<span></span></h3>
								</div>
								<div class="row">
									<div class="logo-carousel animation" data-animation="fadeInUp" data-auto-play="true" data-timeout="9000">
										<div><a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/!custom_img/clients/april-development.png" alt="Инвестиционная компания Апрель-Девелопмент" class="animation" data-animation="zoomIn" class="tooltipped" data-toggle="tooltip" data-placement="left" title="Инвестиционная компания Апрель-Девелопмент"/></a></div>
										<div><a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/!custom_img/clients/imagine_estate.png" alt="Девелоперская компания «IMAGINE ESTATE»" class="animation" data-animation="zoomIn" class="tooltipped" data-toggle="tooltip" data-placement="left" title="Девелоперская компания «IMAGINE ESTATE»"/></a></div>
										<div><a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/!custom_img/clients/dresser_rand.png" alt="«DRESSER-RAND» Московское представительство" class="animation" data-animation="zoomIn" class="tooltipped" data-toggle="tooltip" data-placement="left" title="«DRESSER-RAND» Московское представительство"/></a></div>
										<div><a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/!custom_img/clients/stroiteh.png" alt="Строительная компания «Стройтек»" class="animation" data-animation="zoomIn" class="tooltipped" data-toggle="tooltip" data-placement="left" title="Строительная компания «Стройтек»"/></a></div>
										<div><a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/!custom_img/clients/artbase.png" alt="Креативное агентство «ArtBase»" class="animation" data-animation="zoomIn" class="tooltipped" data-toggle="tooltip" data-placement="left" title="Креативное агентство «ArtBase»"/></a></div>
										<div><a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/!custom_img/clients/vk.png" alt="Московский офис «ВКонтакте»" class="animation" data-animation="zoomIn" class="tooltipped" data-toggle="tooltip" data-placement="left" title="Московский офис «ВКонтакте»"/></a></div>
										<div><a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/!custom_img/clients/transneft.png" alt="Страховая компания «ТрансНефть»" class="animation" data-animation="zoomIn" class="tooltipped" data-toggle="tooltip" data-placement="left" title="Страховая компания «ТрансНефть»"/></a></div>
										<div><a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/!custom_img/clients/cgsenudprf.png" alt="ФГБУ «Центр ГОССАНЭПИДНАДЗОРА» Управления Делами Президента РФ" class="animation" data-animation="zoomIn" class="tooltipped" data-toggle="tooltip" data-placement="left" title="ФГБУ «Центр ГОССАНЭПИДНАДЗОРА» Управления Делами Президента РФ"/></a></div>
										<div><a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/!custom_img/clients/openspace.png" alt="Интернет-издание «OpenSpace.ru»" class="animation" data-animation="zoomIn" class="tooltipped" data-toggle="tooltip" data-placement="left" title="Интернет-издание «OpenSpace.ru»"/></a></div>
										<div><a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/!custom_img/clients/revevol.png" alt="ИТ-компания «Revevol Group» (Франция)" class="animation" data-animation="zoomIn" class="tooltipped" data-toggle="tooltip" data-placement="left" title="ИТ-компания «Revevol Group» (Франция)"/></a></div>
									</div>
								</div>
							</div>
						</section><!--ITO Clients Close-->
						
					<!--Digits ITO-->
						<section class="page-block double-space-top double-space-bottom">
							<div class="container">
								<div class="page-heading center animation" data-animation="fadeInUp">
									<h2>Статистика</h2>
									<h3>ключевые показатели работы<span></span></h3>
								</div>
								<div class="row">
									<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
										<p>Сравните нашу фактическую скорость решения заявок пользователей на примере статистики за 2015 год с результатами работы вашей службы технической поддержки:</p>
									</div>
									<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
										<div class="row">
											<div class="col-lg-4 col-md-4 col-sm-4">
												<div class="percent-chart" data-percent="79" data-bar-color="#f05422">
													<span class="percent">0</span>
													<span class="legend">Менее 1 часа</span>
													<canvas height="140" width="140">
												</div>
											</div>
											<div class="col-lg-4 col-md-4 col-sm-4">
												<div class="percent-chart" data-percent="91" data-bar-color="#f05422">
													<span class="percent">0</span>
													<span class="legend">Менее 8 часов</span>
													<canvas height="140" width="140">
												</div>
											</div>
											<div class="col-lg-4 col-md-4 col-sm-4">
												<div class="percent-chart" data-percent="96" data-bar-color="#f05422">
													<span class="percent">0</span>
													<span class="legend">Менее 40 часов</span>
													<canvas height="140" width="140">
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--<div class="row counters-v3">
									<div class="col-md-6 animated-digits">
										<div class="group">
											<span class="icon flaticon-thumb54"></span>
											<span class="digit" data-number="17412">0</span>
											<span> Заявок</span>
											<div>Наша служба поддержки выполняет почти 50 заявок в день, наши администраторы выполняют около 450 операций в неделю.</div>
										</div>
									</div>
									<div class="col-md-6 animated-digits">
										<div class="group">
											<span class="icon flaticon-two385"></span>
											<span class="digit" data-number="580">0</span>
											<span> Человек</span>
											<div>Получили ответы на вопросы или решение проблем.</div>
										</div>
									</div>
								</div>-->
							</div>
						</section><!--Digits Section Close-->

					<!--ITO Clients-->
						<section style="background-image:url(<?=SITE_TEMPLATE_PATH?>/!custom_img/home/hero/fullscreen/commets.jpg);" class="fw-img-banner light-text double-space-top double-space-bottom animation" data-animation="zoomIn" data-stellar-vertical-offset="-800" data-stellar-background-ratio="0.5" id="reviews_ito">
							<div class="overlay"></div>
							<div class="container">
								<div class="row space-top">
									<h3 class="heading center">Отзывы<span></span></h3>
									<div class="col-lg-8 col-lg-offset-1 col-md-8 col-md-offset-1 col-sm-8 col-sm-offset-1">
										<blockquote>
											<p>Спасибо команде NetMechanic за реализацию переезда нашего офиса в нереально короткие сроки, приятно работать с людьми которым не надо объяснять что делать.</p>
											<footer>Иванов Г.А. директор компании <cite title="Source Title">"Орлов, Иванов и Фрэнберг"</cite></footer>
										</blockquote>
									</div>
									<div class="col-lg-8 col-lg-offset-3 col-md-8 col-md-offset-3 col-sm-8 col-sm-offset-3">
										<blockquote class="blockquote-reverse">
											<p>Мы получили полноценный сервис технической поддержки для всех наших офисов в течении одного дня, это было решение устраивающее нас на 100%.</p>
											<footer>Андрианов Геннадий генеральный директор <cite title="Source Title">ООО "Холмы"</cite></footer>
										</blockquote>
									</div>
								</div>
							</div>
						</section><!--ITO Clients Close-->

					<!--ITO Plans-->
						<section class="page-block double-space-top double-space-bottom animation" data-animation="zoomIn" id="price_ito">
							<div class="container">
								<div class="page-heading center">
									<h2>Стоимость ИТ-аутсорсинга</h2>
									<h3>Сравните наши цены<span></span></h3>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="pricing-plan type-3">
											<div class="price-title">
												<span>Почасовой тариф</span>
												<p class="h4">менее <span>28 р</span> / мин,</p>
												<p class="h4">или 1&nbsp;640 р / час</p>
											</div>
											<p class="h5">Безлимитный</p>
											<div class="pricing-content">
												<p>Без абонентской платы, оплата только за то что получаете, поминутная тарификация</p>
												<ul class="list-unstyled">
													<li>График: в рабочее время по рабочим дням</li>
													<li>Реакция на заявку менее <b>2х часов</b></li>
													<li>Каждый выезд инженера <b>оплачивается</b></li>
													<li>Мониторинг ключевых ИТ-сервисов <b>бесплатно</b></li>
													<li>Экспресс-аудит <b>бесплатно</b></li>
												</ul>
												<a class="btn btn-md btn-primary btn-center scroll" data-offset-top="90" href="#contact_form">Связаться с нами</a>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="pricing-plan type-2">
											<div class="price-title">
												<span>Стандартный тариф</span>
												<p class="h4">от <span>820 р</span> / компьютер,</p>
												<p class="h4">от 2&nbsp;048 р / сервер</p>
											</div>
											<p class="h5">Прогнозируемый</p>
											<div class="pricing-content">
												<p>Оплата за каждую единицу оборудования или за элемент инфраструктуры</p>
												<ul class="list-unstyled">
													<li>График: расширенное рабочее время (+2 часа) по рабочим дням</li>
													<li>Реакция на заявку не более <b>1 часа</b></li>
													<li>Фиксированное количество <b>бесплатных</b> выездов инженера</li>
													<li>Мониторинг всей инфраструктуры <b>бесплатно</b></li>
													<li>Аудит ИТ <b>бесплатно</b></li>
													<li>Прикрепленные инженеры <b>бесплатно</b></li>
												</ul>
												<a class="btn btn-md btn-primary btn-center scroll" data-offset-top="90" href="#contact_form">Связаться с нами</a>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="pricing-plan type-3">
											<div class="price-title">
												<span>Корпоративный тариф</span>
												<p class="h4"><span>Персональное</span></p>
												<p class="h4">предложение</p>
											</div>
											<p class="h5">Индивидуальный</p>
											<div class="pricing-content">
												<p>Рассматриваются любые варианты<br> обслуживания информационных систем</p>
												<ul class="list-unstyled">
													<li>График: круглосуточно и без выходных</li>
													<li>Реакция на заявку не более <b>30 минут</b></li>
													<li>Выезд инженера <b>бесплатно и без ограничений</b></li>
													<li>Мониторинг и антивирусная защита <b>бесплатно</b></li>
													<li>Аудит ИТ <b>бесплатно</b></li>
													<li>Прикрепленные инженеры и "ИТ-директор" <b>бесплатно</b></li>
													<li>Подменное оборудование и <b>штрафы</b> за простой</li>
													
												</ul>
												<a class="btn btn-md btn-primary btn-center scroll" data-offset-top="90" href="#contact_form">Связаться с нами</a>
											</div>
										</div>
									</div>
								</div>							
							</div>
						</section><!--Pricing Plans Close-->

					<!--ITO Campaign #1-->
						<section style="background-image:url(<?=SITE_TEMPLATE_PATH?>/!custom_img/home/hero/fullscreen/service.jpg);" class="fw-img-banner light-text double-space-top animation" data-animation="zoomIn" data-stellar-vertical-offset="-1500" data-stellar-background-ratio="0.5" id="campaign_ito">
							<div class="overlay"></div>
							<div class="container">
								<div class="page-heading center">
									<h3>Акция на абонентское обслуживание<span></span></h3>
									<p class="lead">Уникальная цена для новых клиентов</p>
									<p class="lead">Свяжитесь с нами до <b>13.06.16</b> и получите на первые 3 месяца уникальную стоимость нормо-часа инженера и/или обслуживания компьютеров и серверов.</p>
								</div>
								<div class="row digits counters-v1">
									<div class="col-md-6 animated-digits">
										<div class="group">
											<i class="fa fa-clock-o"></i>
											<span class="digit" data-number="1280">0</span><span> р / час</span>
											<div>Ниже почасового тарифа на 22%</div>
										</div>
									</div>
									<div class="col-md-6 animated-digits">
										<div class="group">
											<i class="fa fa-laptop"></i>
											<span class="digit" data-number="640">0</span><span> р / компьютер</span>
											<div>Ниже стандартного тарифа на 22%</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<a class="btn btn-md btn-outlined-invert btn-center scroll" data-offset-top="90" href="#contact_form">Связаться с нами</a>
									</div>
								</div>
							</div>
						</section><!--ITO Campaign #1 Close-->

					<!--ITO Calculator Fullwidth Image Banner-->
						<!--<section class="page-block gray-bg double-space-top double-space-bottom animation" data-animation="zoomIn">
							<div class="container">
								<div class="page-heading center">
									<h2>Калькулятор<span></span></h2>
									<h3><span></span></h3>
								</div>
								<div class="row">
									<div class="col-md-12 col-sm-12">
										<form method="post" class="light form-inline" name="calculator_ito" id="calculator_ito">
											<div class="row">
												<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 space-top space-bottom">
													<div class="form-group">
														<label for="">1. Укажите количество компьютеров или рабочих мест</label>
														<input type="text" class="form-control" name="num_computers" id="num_computers" placeholder="0" required>
													</div>
													<div class="form-group">
														<label for="">2. Укажите количество серверов или серверного оборудования</label>
														<input type="text" class="form-control" name="num_servers" id="num_servers" placeholder="0" required>
													</div>
													<div class="form-group">
														<label for="">3. Укажите количество офисов вашей организации</label>
														<input type="text" class="form-control" name="num_offices" id="num_offices" placeholder="0" required>
													</div>
													<div class="form-group">
														<label for="">4. Оцените количество <b>бесплатных</b> выездов</label>
														<input type="text" class="form-control" name="num_free_visits" id="num_free_visits" placeholder="0" readonly>
													</div>
													<div class="form-group">
														<label for="">5. Укажите количество дополнительных <b>платных</b> выездов</label>
														<input type="text" class="form-control" name="num_paid_visits" id="num_paid_visits" placeholder="0">
													</div>
													<div class="form-group">
														<p><b>6. Выберите тариф:</b></p>
														<div class="radio">
															<label class="tooltipped" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Без абонентской платы, оплата только за то что получаете">
																<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
																Почасовой
															</label>
														</div>
														<div class="radio">
															<label class="tooltipped" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Оплата за каждую единицу обслуживаемого оборудования">
																<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
																Стандартный
															</label>
														</div>
														<div class="radio disabled">
															<label class="tooltipped" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Для компаний передающих всю ИТ к нам на обслуживание, недоступно в калькуляторе">
																<input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled>
																Корпоративный
															</label>
														</div>
													</div>
													<div class="form-group">
														<p><b>7. Подтвердите дополнительные условия:</b></p>
														<div class="checkbox">
															<label class="tooltipped" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Предоплата позволяет нам гарантировать высокий уровень сервиса при низкой стоимости">
																<input type="checkbox" value="prepay">
																Предоплата
															</label>
														</div>
														<div class="checkbox">
															<label>
																<input type="checkbox" value="prepay">
																Стоимость по акции
															</label>
														</div>
													</div>
													<div class="box">
														<p>Оценочная стоимость обслуживания:</p>
														<span class="price">0 р / мес</span>
													</div>
												</div>
											</div>
											<button type="submit" class="btn btn-md btn-primary btn-center">Получить коммерческое предложение</button>
										</form>
									</div>
								</div>
							</div>
						</section>
						<script>
							function setPrice () {
								var num_computers = $('#calculator_ito').find('[name="num_computers"]').val();
								var num_servers = $('#calculator_ito').find('[name="num_servers"]').val();
								var num_offices = $('#calculator_ito').find('[name="num_offices"]').val();
								var num_free_visits = $('#calculator_ito').find('[name="num_free_visits"]').val();
								var num_paid_visits = $('#calculator_ito').find('[name="num_paid_visits"]').val();
								
								

								var result = parseFloat(years * names + names * transfer, 10).toString().split('.');
								if (result[1] === void 0) {
									result[1] = '';
								}
								while (result[1].length < 2) {
									result[1] += '0';
								}
								result = result[0] + '.' + result[1].substr(0,2);
								$('#total').val(result);
							}
							$('form>select').change(setPrice);
							setPrice();	
						</script>--><!--ITO Calculator Fullwidth Image Banner Close-->

					<!--Work-->
<?$APPLICATION->IncludeComponent("bitrix:main.include", "", Array("AREA_FILE_SHOW" => "file", "PATH" => "/include/v2/howtowork_inc.php", "EDIT_TEMPLATE" => ""), false);?>

					<!--Contact Form-->
<?$APPLICATION->IncludeComponent("bitrix:main.include", "", Array("AREA_FILE_SHOW" => "file", "PATH" => "/include/v2/form_inc.php", "EDIT_TEMPLATE" => ""), false);?>

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