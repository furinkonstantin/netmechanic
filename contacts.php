<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Контакты NetMechanic ABS: адрес, телефон и форма обратной связи. Будьте на связи.");
$APPLICATION->SetTitle("Контакты NetMechanic ABS.");
?><!--Off-Canvas-->
<div class="off-canvas-wrap" data-offcanvas="">
	<div class="inner-wrap">
		 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"EDIT_TEMPLATE" => "",
		"PATH" => "include/v1/menu_mobile_inc.php"
	)
);?> <!--Layout-->
		<div class="site-layout">
			 <!--If you add class "boxed" to .site-layout it wraps the whole document in a box, than you can simply add pattern background to body or leave it white. Please note in a "boxed" mode header doesn't stick to the top.--> <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"EDIT_TEMPLATE" => "",
		"PATH" => "include/v1/header_inc.php"
	)
);?> <!--Page Content--><!-- InstanceBeginEditable name="content" -->
			<div class="page">
				 <!--Content Block--> <section class="page-block space-top">
				<div class="container animation" data-animation="fadeInUp">
					<div class="page-heading center">
						<h2>Будьте на связи</h2>
						<h3>Страстные люди. Яркие идеи. Идеальная реализация.</h3>
					</div>
				</div>
 </section>
				<!--Google Map-->
				<div class="google-map h-350 space-top animation" data-animation="fadeInUp" data-location="Новая Басманная ул., 16к4, Москва" data-zoom="16">
					 <!--Insert Location in data-location, insert map zoom in data-zoom-->
					<div id="map-canvas">
					</div>
				</div>
				 <!--Google Map Close--> <section class="page-block space-top double-space-bottom">
				<div class="container">
					<div class="row double-space-top">
						<div class="col-md-6 col-sm-6">
							<div class="page-heading center animation" data-animation="fadeInUp">
								<h3>Контакты</h3>
							</div>
							<div class="row center-mobile space-bottom">
								<div class="col-md-6 col-sm-6 animation" data-animation="fadeInUp">
									<h4 class="bold-weight">Адрес:</h4>
									<p>
										 125212, Россия, Москва, Головинское шоссе, д.5А, БЦ "Водный" офис 14024<br>
									</p>
									<h4 class="bold-weight">График работы:</h4>
									<p>
										 Офис - по рабочим дням с 10 до 18
									</p>
									<p>
										 Служба поддержки клиентов - круглосуточно и без выходных
									</p>
								</div>
								<div class="col-md-6 col-sm-6 animation" data-animation="fadeInUp">
									<h4 class="bold-weight">E-mail:</h4>
									<p>
 <a href="mailto:info@netmechanic.ru">info@netmechanic.ru</a>
									</p>
									<h4 class="bold-weight">Телефоны:</h4>
									<p>
										 +7 495 225 33 75<br>
									</p>
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="page-heading center animation" data-animation="fadeInUp">
								<h3>Напишите нам</h3>
							</div>
							<form method="post" class="contact-form">
								<div class="row animation" data-animation="fadeInUp">
									<div class="form-group col-md-6 col-sm-6">
 <label class="sr-only" for="name"></label> <input kl_virtual_keyboard_secure_input="on" class="form-control input-lg" name="name" id="name" placeholder="Ваше имя" required="" type="text">
									</div>
									<div class="form-group col-md-6 col-sm-6">
 <label class="sr-only" for="email"></label> <input class="form-control input-lg" name="email" id="email" placeholder="Email" required="" type="email">
									</div>
								</div>
								<div class="row animation" data-animation="fadeInUp">
									<div class="form-group col-md-12 col-sm-12">
 <label class="sr-only" for="message"></label> <textarea class="form-control input-lg" name="message" id="message" rows="3" placeholder="Сообщение" required=""></textarea>
									</div>
								</div>
 <input class="btn btn-md btn-primary btn-center animation" data-animation="fadeInUp" value="Отправить" type="submit">
							</form>
						</div>
					</div>
				</div>
 </section>
			</div>
			 <!--Page Content Close--> <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"EDIT_TEMPLATE" => "",
		"PATH" => "include/v1/footer_inc.php"
	)
);?>
		</div>
		 <!--Layout Close--> <!-- close the off-canvas menu --> <a class="exit-off-canvas" ></a>
	</div>
</div>
<!--Off-Canvas Close-->
<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"EDIT_TEMPLATE" => "",
		"PATH" => "include/sticky_buttons_inc.php"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>