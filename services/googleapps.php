<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Google Apps for Work привлекательное решение для бизнеса");
$APPLICATION->SetPageProperty("description", "Быстрый, простой в использовании, работающий на любом устройстве и недорогой корпоративный облачный офисный пакет для совместной работы Google Apps for Work");
?><!--Off-Canvas-->
<div class="off-canvas-wrap" data-offcanvas>
	<div class="inner-wrap">
		<?$APPLICATION->IncludeComponent("bitrix:main.include", "", Array("AREA_FILE_SHOW" => "file", "PATH" => "/include/v1/menu_mobile_inc.php", "EDIT_TEMPLATE" => ""), false);?>
		
		<!--Layout-->
		<div class="site-layout"><!--If you add class "boxed" to .site-layout it wraps the whole document in a box, than you can simply add pattern background to body or leave it white. Please note in a "boxed" mode header doesn't stick to the top.-->
			<?$APPLICATION->IncludeComponent("bitrix:main.include", "", Array("AREA_FILE_SHOW" => "file", "PATH" => "/include/v1/header_inc.php", "EDIT_TEMPLATE" => ""), false);?>
			
			<!--Page Content--><!-- InstanceBeginEditable name="content" -->
			<div class="page">
				
				<section style="background-color: #f7f7f7;" class="info-block"><img src="<?=SITE_TEMPLATE_PATH?>/!custom_img/service_banner/googleappsforwork_banner2.jpg" alt="Google Apps for Work Banner"/></section>

				
			<!--Breadcrumbs-->
          <div class="container space-top">
          	<div class="row">
            	<div class="col-md-6 col-sm-6">
                <ol class="breadcrumb animation" data-animation="fadeInUp">
                  <li><a href="/">Главная</a></li>
                  <li><a href="/services/">ИТ-услуги и решения</a></li>
                  <li class="active">Google Apps for Work</li>
                </ol> 
              </div>
            </div>
          </div><!--Breadcrumbs Close-->
		  
		          	<!--Single Portfolio-->
          <section class="page-block">
          	<div class="container">
              <div class="row space-bottom">
                <div class="col-md-6 col-md-push-6 space-bottom animation" data-animation="zoomIn">
                  
                  <!--Slider-->
                	<div class="master-slider ms-skin-light-6 round-skin" id="portfolioSlider">
						<div class="ms-slide animation" data-animation="zoomIn">
							<img src="<?=SITE_TEMPLATE_PATH?>/masterslider/blank.gif" data-src="/services/img/googleappsforwork.jpg" alt="Google Apps for Work"/>
						</div>
					</div>
                </div>
				
                <div class="col-md-6 col-md-pull-6 animation" data-animation="fadeInUp">
                  <h4 class="text-primary">Бизнес-приложения с полной интеграцией</h4>
                  <h2 class="post-title">Google Apps For Work</h2>
                  <div class="block-devider">
					<p>Это корпоративный облачный офисный пакет, который предлагает вам и вашей команде множество новых возможностей для <b>совместной работы</b> в Интернете <b>в любое время, в любом месте</b> и <b>на любом устройстве</b> при уровне <b>безопасности и надежности</b>, который раньше могли себе позволить лишь немногие.</p>
					<h5>Доступ к данным, где бы вы ни находились</h5>
					<p>Работайте в любом месте на любом устройстве – компьютере, планшете или телефоне. Составьте коммерческое предложение в офисе, перечитайте его по дороге к клиенту и внесите финальные правки с телефона за несколько минут до начала встречи – все это в Документах. Используйте рабочее время по максимуму. <i>(Gmail, Диск, Документы)</i></p>
					<h5>Безопасность устройств и данных</h5>
					<p>В Календаре можно легко запланировать совещание, быстро выбрав время, удобное для всех. Вы получите напоминание о видеовстрече по электронной почте и сможете без труда присоединиться к ней, чтобы общаться в Hangouts. Сэкономьте время на планировании и используйте его, чтобы вместе с коллегами довести презентацию до совершенства. <i>(Gmail, Hangouts, Календарь, Презентации)</i></p>
					<h5>Эффективная работа в команде</h5>
					<p>Предоставьте коллегам доступ к файлам в Таблицах и вместе редактируйте их в режиме реального времени. Последняя версия документов всегда доступна на Диске, так что вам не придется тратить время на пересылку файлов по электронной почте. <i>(Диск, Таблицы, Hangouts)</i></p>
					<p>Попробуйте 30-дневную бесплатную версию Google Apps<br>Без кредитной карты, без установки ПО<br><a class="btn btn-primary" href="https://www.google.ru/a/signup/">Начать</a></p>
				</div>
                  <div class="block-devider project-details">
                    <h5>Выгоды для бизнеса</h5>
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
                  <div class="block-devider">
                  	<div class="row">
                    	<div class="col-md-12 project-details">
                    		<div class="row">
                          <div class="col-md-6 col-sm-6">
                            <h5>Поставщик</h5>
                            <p>Google Inc.</p>
                            <h5>Координатор от NetMechanic</h5>
                            <p>Богданов Кирилл</p>
                          </div>
                          <div class="col-md-6 col-sm-6">
                            <h5>Статус NetMechanic</h5>
                            <p>Авторизированный реселлер c 12.2012</p>
                          </div>
                        </div>
                    	</div>
                    </div>
                  </div>
                  
                  <!--Project Meta-->
                  <div class="project-details meta">
                  	<div class="date"></div>
                    <a class="btn btn-primary" href="https://www.google.com/work/apps/business/">Официальный сайт</a>
                  </div>
                </div>
              </div>
            </div>
          </section><!--Single Portfolio Close-->
		  
		            <!--Product Specs / Tabs Widget-->
          <section class="page-block gray-bg animation" data-animation="fadeInUp">
          	<div class="container">
              <!--Nav Tabs-->
              <ul class="nav-tabs" role="tablist">
                <!--<li ><a href="#details" role="tab" data-toggle="tab"><span>01</span>Дополнительные материалы</a></li>-->
                <li class="active"><a href="#partner" role="tab" data-toggle="tab"><span>02</span>Партнер Google</a></li>
                <!--<li><a href="#reviews" role="tab" data-toggle="tab"><span>03</span>Отзывы</a></li>
				<li><a href="#projects" role="tab" data-toggle="tab"><span>04</span>Выполненые проекты</a></li>-->
              </ul>
              <!--Tabs Content-->
              <div class="tab-content">
                <!--<div class="tab-pane fade" id="details">
                	<div class="row">
                		<div class="col-md-6">
							<div class="embed-responsive embed-responsive-16by9 space-bottom">
								<iframe width="560" height="315" src="https://www.youtube.com/embed/ZLPmgcpi0wI" frameborder="0" allowfullscreen></iframe>
							</div>
						</div>
                		<div class="col-md-6">
                    	<h3 class="heading">Дополнительное описание<span></span></h3>
                      <p>Ссылки на дополнительные материалы</p>
                    </div>
                	</div>
					<div class="row">
						<div class="embed-responsive embed-responsive-16by9 space-bottom">
							<iframe src="https://docs.google.com/presentation/d/18USkZmu02ibxqLc-NOyuuvwj-REuxnSL_T6oVGNnMbg/embed?start=true&loop=true&delayms=3000" frameborder="0" width="560" height="315" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>
						</div>
					</div>
                </div>-->
                <div class="tab-pane fade in active" id="partner">
                	<div class="page-heading">
						<h3>Мы партнеры Google<span></span></h3>
								<p>Развивайте свой бизнес с помощью квалифицированных партнеров. Партнерами Google становятся лучшие компании. Таким специалистам можно доверять.</p>
								<p>Вы - мастер своего дела, а мы мастера ИТ. Поручите управление вашими информационными технологиями нам и сосредоточтесь на развитии собственного бизнеса.</p>
								<p>Мы знаем все о новых возможностях Google Apps for Work, подтверждаем свою квалификацию сертификатами.</p>
								<p>Мы имеем реальный опыт участия во множестве проектов внедрения Google Apps for Work, от команд в пять человек до международных гигантов.</p>
								<p>Мы работаем напрямую с Google, получаем материалы и инструменты от разработчиков, участвуем в специальных мероприятиях и тренингах. Мы на шаг впереди конкурентов.</p>
                	</div>
                </div>
                <div class="tab-pane fade" id="reviews">
                	<div class="page-heading center">
                		<h3>Отзывы<span></span></h3>
                    <p>Отзывы клиентов.</p>
                	</div>
                </div>
                <div class="tab-pane fade" id="projects">
                	<div class="page-heading center">
                		<h3>Выполненые проекты<span></span></h3>
                    <p>Описание последнего из выполненых проектов и ссылки на все предыдущие выполненные проекты.</p>
                	</div>
                </div>
              </div>
            </div>
          </section><!--Product Specs Close-->
          
          <!--Packages-->
          <!--<section class="page-block">
          	<div class="container">
          		<div class="page-heading center animation" data-animation="fadeInUp">
          			<h2>Пакеты услуг</h2>
          			<h3>Возможность экономить средства<span></span></h3>
          		</div>
              <div class="package-carousel animation" data-animation="fadeInUp">
              	<div class="item animation" data-animation="zoomIn">
                	<a class="product" href="#">
                  	<img src="<?=SITE_TEMPLATE_PATH?>/img/shop/packages/01.jpg" alt="01"/>
                    <div class="plus">+</div>
                  </a>
                  <a class="product" href="#">
                  	<img src="<?=SITE_TEMPLATE_PATH?>/img/shop/packages/02.jpg" alt="02"/>
                  </a>
                  <div class="package">
                    <div class="equal">=</div>
                  	<img src="<?=SITE_TEMPLATE_PATH?>/img/shop/packages/03.jpg" alt="03"/>
                  </div>
                  <div class="clearfix"></div>
                  <footer>
                    <span class="discount">520 $</span>
                    <span class="price">399 $</span>
                    <br><br>
                    <a class="btn btn-md btn-primary btn-center" href="#"><i class="fa fa-plus left"></i>Купить комплект</a>
                  </footer>
                </div>
              	<div class="item">
                  <a class="product" href="#">
                  	<img src="<?=SITE_TEMPLATE_PATH?>/img/shop/packages/05.jpg" alt="05"/>
                    <div class="plus">+</div>
                  </a>
                	<a class="product" href="#">
                  	<img src="<?=SITE_TEMPLATE_PATH?>/img/shop/packages/04.jpg" alt="04"/>
                  </a>
                  <div class="package">
                  	<img src="<?=SITE_TEMPLATE_PATH?>/img/shop/packages/03.jpg" alt="03"/>
                    <div class="equal">=</div>
                  </div>
                  <div class="clearfix"></div>
                  <footer>
                    <span class="discount">480 $</span>
                    <span class="price">335 $</span>
                    <br><br>
                    <a class="btn btn-md btn-primary btn-center" href="#"><i class="fa fa-plus left"></i>Купить комплект</a>
                  </footer>
                </div>
              </div>
          	</div>
          </section>-->
          
          <!--Other Projects-->
          <!--<section class="page-block gray-bg animation" data-animation="fadeInUp">
          	<div class="container">
              <div class="page-heading center">
                <h3>Связанные ИТ-услуги и решения</h3>
                <p>Обратите внимание.</p>
              </div>
              <div class="row">
              	<div class="col-lg-3 col-md-6">
                	<div class="thumbnail-3d animation" data-animation="zoomIn">
                  	<div class="inner">
                      <div class="overlay">
                      	<div class="info">
                          <h4>Microsoft Office 365</h4>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                          <a class="btn btn-primary" href="#">Подробнее</a>
                        </div>
                      </div>
                      <img src="<?=SITE_TEMPLATE_PATH?>/img/portfolio/th01.jpg" alt="Project01"/>
                    </div>
                  </div>
                </div>
              	<div class="col-lg-3 col-md-6">
                	<div class="thumbnail-3d animation" data-animation="zoomIn">
                  	<div class="inner">
                      <div class="overlay">
                      	<div class="info">
                          <h4>Управление мобильными устройствами</h4>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                          <a class="btn btn-primary" href="#">Подробнее</a>
                        </div>
                      </div>
                      <img src="<?=SITE_TEMPLATE_PATH?>/img/portfolio/th02.jpg" alt="Project02"/>
                    </div>
                  </div>
                </div>
              	<div class="col-lg-3 col-md-6">
                	<div class="thumbnail-3d animation" data-animation="zoomIn">
                  	<div class="inner">
                      <div class="overlay">
                        <div class="info">
                          <h4>Тренинги по внедрению GA</h4>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                          <a class="btn btn-primary" href="#">Подробнее</a>
                        </div>
                      </div>
                      <img src="<?=SITE_TEMPLATE_PATH?>/img/portfolio/th03.jpg" alt="Project03"/>
                    </div>
                  </div>
                </div>
              	<div class="col-lg-3 col-md-6">
                	<div class="thumbnail-3d animation" data-animation="zoomIn">
                  	<div class="inner">
                      <div class="overlay">
                      	<div class="info">
                          <h4>Внедрение GA</h4>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                          <a class="btn btn-primary" href="#">Подробнее</a>
                        </div>
                      </div>
                      <img src="<?=SITE_TEMPLATE_PATH?>/img/portfolio/th04.jpg" alt="Project04"/>
                    </div>
                  </div>
                </div>
              </div>
          	</div>
          </section>-->
				
				
				<?$APPLICATION->IncludeComponent("bitrix:main.include", "", Array("AREA_FILE_SHOW" => "file", "PATH" => "/include/v1/services_form_inc.php", "EDIT_TEMPLATE" => ""), false);?>
			</div><!--Page Content Close-->
			
			<?$APPLICATION->IncludeComponent("bitrix:main.include", "", Array("AREA_FILE_SHOW" => "file", "PATH" => "/include/v1/footer_inc.php", "EDIT_TEMPLATE" => ""), false);?>
		</div><!--Layout Close-->
		
		<!-- close the off-canvas menu -->
		<a class="exit-off-canvas"></a>
	</div>
</div><!--Off-Canvas Close-->

<?$APPLICATION->IncludeComponent("bitrix:main.include", "", Array("AREA_FILE_SHOW" => "file", "PATH" => "/include/v1/sticky_buttons_inc.php", "EDIT_TEMPLATE" => ""), false);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>