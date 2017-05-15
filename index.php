<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("ИТ-аутсорсинг и облачные решения для бизнеса в Москве");
$APPLICATION->SetPageProperty("description", "Команда профессионалов предлагает свои услуги - ИТ-аутсорсинг, облачные решения, служба поддержки, автоматизация деятельности, защита информации, кабельные сети");
?>

	<!--Off-Canvas-->
		<div class="off-canvas-wrap" data-offcanvas>
			<div class="inner-wrap">

			<!--Off-Canvas Menu-->
<?$APPLICATION->IncludeComponent("bitrix:main.include", "", Array("AREA_FILE_SHOW" => "file", "PATH" => "/include/v2/menu_mobile_inc.php", "EDIT_TEMPLATE" => ""), false);?>


			<!--Layout-->
				<div class="site-layout">

				<!--Header-->
<?$APPLICATION->IncludeComponent("bitrix:main.include", "", Array("AREA_FILE_SHOW" => "file", "PATH" => "/include/v2/header_inc.php", "EDIT_TEMPLATE" => ""), false);?>


				<!--Page Content--><!-- InstanceBeginEditable name="content" -->
					<div class="page">

					<!--IT Outsourcing Service Fullscreen Hero-->
						<section style="background-image:url(<?=SITE_TEMPLATE_PATH?>/!custom_img/home/hero/fullscreen/black-and-white-city-man-people.jpg);" class="hero-static fullscreen animation" data-animation="fadeInUp" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="250">
							<div class="overlay dark"></div>
							<div class="inner">
								<div class="content">
									<div class="container">
										<h1 class="light-color left">ИТ-аутсорсинг</h1>
										<p><span class="light-color left normalcase" style="font-size: 200%;">Время и золотые руки оптом и в розницу</span></p>
										<p class="light-color left normalcase hidden-xs">Для успешного развития бизнеса необходимо функционирование сопутствующих ИТ-сервисов — поддержку таких систем осуществляют профессионалы. Опытные системные администраторы стоят дорого, попытки же сэкономить и пригласить «недорогих» сотрудников или обратиться к фрилансерам приводят к проблемам и сбоям сервисов.</p>
										<p class="light-color left normalcase hidden-xs">Инженеры компании NetMecahnic ABS возьмут на себя частично или в полном объеме непрофильные для вас информационно-технологические задачи бизнеса от создания ИТ-инфраструктуры и технической поддержки рабочих мест сотрудников до разработки программного обеспечения и организации информационной защиты корпоративных информационных систем.</p>
										<p class="light-color left normalcase hidden-xs">Сосредоточьтесь на своем бизнесе и не тратьте ресурсы на найм и содержание штата технических сотрудников, делегируйте ИТ задачи специализированной компании - мы оправдаем доверие.</p>
										<a class="btn btn-default btn-md" data-offset-top="90" href="services/it_outsourcing/">Подробнее</a>
									</div>
								</div>
							</div>
						</section><!--IT Outsourcing Service Fullscreen Hero Close-->
			
					<!--Acquaintance 2 Cols Info Block-->
						<section class="page-block space-top animation" data-animation="zoomIn">
							<div class="container">
								<div class="row">
									<div class="col-md-6 col-md-push-6 double-space-bottom">
										<img style="margin-bottom: 12px;" class="center-block" src="<?=SITE_TEMPLATE_PATH?>/!custom_img/home/cube.jpg" alt="NetMechanic"/>
									</div>
									<div class="col-md-6 col-md-pull-6 space-bottom">
										<p><span style="font-size: 200%;">Давайте познакомимся!</span></p>
										<p>Мы предприниматели, как и Вы, поэтому знаем, что время и ресурсы драгоценны, и что Вы должны быть сосредоточены на том, что на самом деле важно. Мы концентрируем внимание на информационных технологиях и с помощью наших услуг предлагаем обращать внимание на то, что выгодно и интересно для Вас. Используйте наш опыт и нашу увлеченность для достижения Вашего успеха.</p>
										<p>Любая успешная и эффективная организация непременно использует современные информационные технологии. Наши ИТ-услуги призваны помочь развивать, эффективно управлять и надежно защищать компанию, которая стремится быть первой на своем рынке.</p>
										<p><b>Расскажите нам о себе</b> и мы постараемся предложить вам те услуги, от которых вам не имеет смысла отказываться.</p>
										<a class="btn btn-default btn-md scroll" data-offset-top="90" href="#contact_form">Рассказать о себе</a>
									</div>
								</div>
							</div>
						</section><!--Acquaintance 2 Cols Info Block Close-->
                        <!--Cabling Service Fullwidth Image Banner-->
                        <section style="background-image:url(<?=SITE_TEMPLATE_PATH?>/!custom_img/home/hero/fullscreen/sks-2400x1600-min.jpg);" class="fw-img-banner light-text space-top animation" data-animation="zoomIn" data-stellar-vertical-offset="-800" data-stellar-background-ratio="0.5" id="cabling">
                            <div class="overlay"></div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4">
                                        <h2 class="featured-heading" style="font-size: 275%;">Кабельные<br />сети</h2>
                                        <ul class="featured-list">
                                            <li style="color: #fff;">Проектирование, монтаж и эксплуатация СКС</li>
                                            <li style="color: #fff;">Высокоскоростные и защищенные СКС</li>
                                            <li style="color: #fff;">СКС в исторических зданиях</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-8 col-sm-8 double-space-top">
                                        <p><span style="font-size: 200%;">Сети бывают красивыми, быстрыми и удобными, но это всегда довольно дорого</span></p>
                                        <p>Для успешного ведения бизнеса в современном мире не обойтись без качественного доступа в сеть.</p>
                                        <p>Компания NetMechanic предоставляет услуги по проектированию, монтажу и эксплуатации локальных кабельных сетей (создание сети внутри офиса или объединение нескольких географически распределенных филиалов).</p>
                                        <p>Сотрудники компании обладают большим опытом по проектированию, техническому надзору в ходе разработки, монтажу кабельных систем, систем видеонаблюдения и контроля доступа.</p>
                                    </div>
                                </div>
                            </div>
                        </section><!--Cabling Service Fullwidth Image Banner Close-->
			<?php if (false) : ?>
					<!--Cloud Computing Service Fullwidth Image Banner-->
						<section style="background-image:url(<?=SITE_TEMPLATE_PATH?>/!custom_img/home/hero/fullscreen/sky-2400x1600-min.jpg);" class="fw-img-banner light-text space-top animation" data-animation="zoomIn" data-stellar-vertical-offset="-800" data-stellar-background-ratio="0.5" id="cloudcomputing">
							<div class="overlay"></div>
							<div class="container">
								<div class="row">
									<div class="col-md-4 col-sm-4">
										<h2 class="featured-heading" style="font-size: 300%;">Облачные<br />решения</h2>
										<ul class="featured-list">
											<li style="color: #fff;">Виртуализация рабочих мест и инфраструктуры</li>
											<li style="color: #fff;">Внедрение и обслуживание облачных решений</li>
											<li style="color: #fff;">Предоставление сторонних SaaS решений</li>
										</ul>
									</div>
									<div class="col-md-8 col-sm-8 double-space-top">
										<p><span style="font-size: 200%;">Технологии будущего сегодня на вашем столе</span></p>
										<p>Современные технологии предоставляют широкие возможности по переносу инфраструктуры в «облако» для обеспечения повсеместного и удобного доступа к данным и средствам взаимодействия.</p>
										<p>Специалисты NetMechanic помогают бизнесу раскрывать потенциал облачных технологий, внедряя современные гибридные решения, переносящие пиковые нагрузки в облака, разрабатывая специфические системы, виртуализируя рабочие места и в целом ИТ-инфраструктуру и эксплуатируя корпоративные облачные системы.</p>
										<p>Компания NetMechanic является партнером Microsoft по разработке и внедрению решений на базе Microsoft Azure.</p>
										<p>Мощные возможности, гибкость и масштабируемость позволяет реализовывать удивительные решения на базе “облаков”.</p>
										<div>
											<h4>Google Apps for Work</h4>
											<p>Пакет облачных сервисов и приложений для совместной работы, включающий корпоративную почту, хранение файлов онлайн, общие календари, видеоконференции и многое другое.</p>
											<a class="btn btn-transparent btn-md btn-primary pull-left" style="margin-top:25px!important;" href="https://www.google.ru/a/signup/"  target="_blank">Пробовать бесплатно</a>
										</div>
									</div>
								</div>
							</div>
						</section><!--Cloud Computing Service Fullwidth Image Banner Close-->
			<?php endif; ?>
					<!--Automatization Service 2 Cols Info Block-->
						<section class="page-block space-top animation" data-animation="zoomIn" id="automatization">
							<div class="container">
								<div class="row">
									<div class="col-md-6 col-md-push-6 double-space-bottom"><div class="image-3d"><img src="<?=SITE_TEMPLATE_PATH?>/!custom_img/service_slider/computer-767776_min.jpg" alt="Автоматизация деятельности"/></div></div>
									<div class="col-md-6 col-md-pull-6 space-bottom">
										<h2 class="featured-heading" style="font-size: 300%;">Автоматизация деятельности</h2>
										<ul class="featured-list">
											<li>Системы автоматизации обслуживания</li>
											<li>Системы мониторинга</li>
											<li>Системы автоматизации инвентаризации</li>
										</ul>
										<p>Зачем тратить время и силы сотрудников на выполнение рутинных задач, если эту работу можно поручить компьютеру?</p>
										<p>Развитие технологий уже давно позволяет передать выполнение большого количества рутинных действий компьютеру, оставив человеку то, что у него получается лучше всего — работа над сложными проектами, требующими креативного подхода. Помимо прочего, автоматизация помогает и в работе над задачами, требующими больших ресурсов (например, обработка больших объёмов данных).</p>
										<p>Специалисты NetMechanic обладают большим опытом в разработке систем для автоматизации задач в области документооборота, диспетчерских служб, управленческого учета. Среди завершенных проектов компании — корпоративная социальная сеть, сервис моделирования спроса и обработки данных, а также медицинская информационная система.</p>
									</div>
								</div>
							</div>
						</section><!--Automatization Service 2 Cols Info Block Close-->

                        <!--Security Service Fullwidth Image Banner-->
                        <section id="security" style="background-image:url(<?=SITE_TEMPLATE_PATH?>/!custom_img/home/hero/fullscreen/protection-info.jpg);" class="fw-img-banner light-text space-top animation" data-animation="zoomIn" data-stellar-vertical-offset="-800" data-stellar-background-ratio="0.5" id="cabling">
                            <div class="overlay"></div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4">
                                        <h2 class="featured-heading" style="font-size: 275%;">Защита<br />информации</h2>
                                        <ul class="featured-list">
                                            <li style="color: #fff;">Аудит информационной защиты</li>
                                            <li style="color: #fff;">Системы уничтожения информации</li>
                                            <li style="color: #fff;">Системы хранения особо чувствительной информации</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-8 col-sm-8 double-space-top">
                                        <p><span style="font-size: 200%;">Мир делится на тех кто уже защищается и тех кто только будет защищаться</span></p>
                                        <p>Атаки киберпреступников могут привести к масштабным финансовым и репутационным потерям — NetMechanic помогает компаниям защищать свою инфраструктуру.</p>
                                        <p>Сбой в работе критически важных для бизнеса систем или утечка чувствительных данных могут разрушить репутацию компании и привести к ощутимым финансовым потерям. NetMechanic помогает организациям предотвращать утечки информации, а также бороться с попытками несанкционированного и непреднамеренного воздействия на корпоративные системы.</p>
                                        <p>Специалисты NetMechanic проводят аудиты информационной безопасности, а также занимаются практической защитой оборудования и программного обеспечения. Мы имеем несколько собственных решений обеспечивающих высокий уровень защиты корпоративных хранилищ данных и средств коммуникаций.</p>
                                    </div>
                                </div>
                            </div>
                        </section><!--Cabling Service Fullwidth Image Banner Close-->
<?php if(false) : ?>
                        <!--Security Service 2 Cols Info Block-->
						<section class="page-block space-top animation" data-animation="zoomIn" id="security">
							<div class="container">
								<div class="row">
									<div class="col-md-6 col-md-push-6 double-space-bottom"><div class="image-3d"><img src="<?=SITE_TEMPLATE_PATH?>/!custom_img/service_slider/rappel-772262_min.jpg" alt="Защита информации"/></div></div>
									<div class="col-md-6 col-md-pull-6 space-bottom">
										<h2 class="featured-heading" style="font-size: 300%;">Защита информации</h2>
										<ul class="featured-list">
											<li>Аудит информационной защиты</li>
											<li>Системы уничтожения информации</li>
											<li>Системы хранения особо чувствительной информации</li>
										</ul>
										<p><span style="font-size: 200%;">Мир делится на тех кто уже защищается и тех кто только будет защищаться</span></p>
										<p>Атаки киберпреступников могут привести к масштабным финансовым и репутационным потерям — NetMechanic помогает компаниям защищать свою инфраструктуру.</p>
										<p>Сбой в работе критически важных для бизнеса систем или утечка чувствительных данных могут разрушить репутацию компании и привести к ощутимым финансовым потерям. NetMechanic помогает организациям предотвращать утечки информации, а также бороться с попытками несанкционированного и непреднамеренного воздействия на корпоративные системы.</p>
										<p>Специалисты NetMechanic проводят аудиты информационной безопасности, а также занимаются практической защитой оборудования и программного обеспечения. Мы имеем несколько собственных решений обеспечивающих высокий уровень защиты корпоративных хранилищ данных и средств коммуникаций.</p>
									</div>
								</div>
							</div>
						</section><!--Security Service 2 Cols Info Block Close-->
<?php endif; ?>
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