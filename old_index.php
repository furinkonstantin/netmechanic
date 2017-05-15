<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("ИТ-аутсорсинг и облачные решения для бизнеса в Москве");
$APPLICATION->SetPageProperty("description", "Команда профессионалов предлагает свои услуги - ИТ-аутсорсинг, облачные решения, служба поддержки, автоматизация деятельности, защита информации, кабельные сети");
?><!--Off-Canvas-->
<div class="off-canvas-wrap" data-offcanvas>
	<div class="inner-wrap">
		<?$APPLICATION->IncludeComponent("bitrix:main.include", "", Array("AREA_FILE_SHOW" => "file", "PATH" => "/include/v1/menu_mobile_inc.php", "EDIT_TEMPLATE" => ""), false);?>
		
		<!--Layout-->
		<div class="site-layout"><!--If you add class "boxed" to .site-layout it wraps the whole document in a box, than you can simply add pattern background to body or leave it white. Please note in a "boxed" mode header doesn't stick to the top.-->
			<?$APPLICATION->IncludeComponent("bitrix:main.include", "", Array("AREA_FILE_SHOW" => "file", "PATH" => "/include/v1/header_inc.php", "EDIT_TEMPLATE" => ""), false);?>
			
			<!--Page Content--><!-- InstanceBeginEditable name="content" -->
			<div class="page">
			
				<!--Hero Static-->
				<section style="background-image: url(<?=SITE_TEMPLATE_PATH?>/!custom_img/home/hero/fullscreen/hero.jpg)" class="hero-static" data-stellar-background-ratio="0.5">
					<div class="overlay"></div>
					<div class="inner">
						<div class="content">
							<div class="container">
								<h1 style="font-size: 3em">ИТ-поддержка вашего бизнеса</h1>
								<span style="font-size: 2em; color: #fff;">Продаём время и золотые руки оптом и в розницу</span>
							</div>
						</div>
					</div>
				</section><!--Hero Static Close-->
				
				<!--Cubic Block-->
				<section class="page-block animation" data-animation="fadeInUp">
					<div class="container">
						<h3 class="heading center">Изобретаем будущее под ключ!<span></span></h3>
						<div class="row space-top">
							<div class="col-md-4 col-sm-4">
								<img style="margin-bottom: 12px;" class="center-block animation" data-animation="zoomIn" src="<?=SITE_TEMPLATE_PATH?>/!custom_img/home/cube.jpg" alt="NetMechanic"/>
							</div>
							<div class="col-md-8 col-sm-8">
								<p>Любая успешная и эффективная организация непременно использует современные информационные технологии. Наши ИТ-услуги призваны помочь развивать, эффективно управлять и надежно защищать компанию, которая стремится быть первой на своем рынке.</p>
								<p>Мы предприниматели, как и Вы, поэтому знаем, что время и ресурсы драгоценны, и что Вы должны быть сосредоточены на том, что на самом деле важно. Мы концентрируем внимание на информационных технологиях и с помощью наших услуг предлагаем обращать внимание на то, что выгодно и интересно для Вас. Используйте наш опыт и нашу увлеченность для достижения Вашего успеха.</p>
								<p>Не важно какие услуги Вы выбрали ‒ можете рассчитывать на индивидуальный подход, 100% отчетность в реальном времени и гарантию качества.</p>
							</div>
						</div>
					</div>
				</section><!--Cubic Block Close-->
				
				
				<?$APPLICATION->IncludeComponent("bitrix:main.include", "", Array("AREA_FILE_SHOW" => "file", "PATH" => "/include/v1/services_inc.php", "EDIT_TEMPLATE" => ""), false);?>
				<?$APPLICATION->IncludeComponent("bitrix:main.include", "", Array("AREA_FILE_SHOW" => "file", "PATH" => "/include/v1/clients_inc.php", "EDIT_TEMPLATE" => ""), false);?>
				<?//$APPLICATION->IncludeComponent("bitrix:main.include", "", Array("AREA_FILE_SHOW" => "file", "PATH" => "/include/v1/testimonials_inc.php", "EDIT_TEMPLATE" => ""), false);?>
				<?//$APPLICATION->IncludeComponent("bitrix:main.include", "", Array("AREA_FILE_SHOW" => "file", "PATH" => "/include/v1/digits_inc.php", "EDIT_TEMPLATE" => ""), false);?>
				<?$APPLICATION->IncludeComponent("bitrix:main.include", "", Array("AREA_FILE_SHOW" => "file", "PATH" => "/include/v1/partners_inc.php", "EDIT_TEMPLATE" => ""), false);?>
				<?$APPLICATION->IncludeComponent("bitrix:main.include", "", Array("AREA_FILE_SHOW" => "file", "PATH" => "/include/v1/demonstration_inc.php", "EDIT_TEMPLATE" => ""), false);?>
				<?$APPLICATION->IncludeComponent("bitrix:main.include", "", Array("AREA_FILE_SHOW" => "file", "PATH" => "/include/v1/discounts_inc.php", "EDIT_TEMPLATE" => ""), false);?>
				<?//$APPLICATION->IncludeComponent("bitrix:main.include", "", Array("AREA_FILE_SHOW" => "file", "PATH" => "/include/v1/certificates_inc.php", "EDIT_TEMPLATE" => ""), false);?>
				<?//$APPLICATION->IncludeComponent("bitrix:main.include", "", Array("AREA_FILE_SHOW" => "file", "PATH" => "/include/v1/team_inc.php", "EDIT_TEMPLATE" => ""), false);?>
				<?//$APPLICATION->IncludeComponent("bitrix:main.include", "", Array("AREA_FILE_SHOW" => "file", "PATH" => "/include/v1/hiring_inc.php", "EDIT_TEMPLATE" => ""), false);?>
				<?//$APPLICATION->IncludeComponent("bitrix:main.include", "", Array("AREA_FILE_SHOW" => "file", "PATH" => "/include/v1/interests_inc.php", "EDIT_TEMPLATE" => ""), false);?>
			</div><!--Page Content Close-->
			
			<?$APPLICATION->IncludeComponent("bitrix:main.include", "", Array("AREA_FILE_SHOW" => "file", "PATH" => "/include/v1/footer_inc.php", "EDIT_TEMPLATE" => ""), false);?>
		</div><!--Layout Close-->
		
		<!-- close the off-canvas menu -->
		<a class="exit-off-canvas"></a>
	</div>
</div><!--Off-Canvas Close-->

<?$APPLICATION->IncludeComponent("bitrix:main.include", "", Array("AREA_FILE_SHOW" => "file", "PATH" => "/include/v1/sticky_buttons_inc.php", "EDIT_TEMPLATE" => ""), false);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>