<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Все ИТ-услуги, от ИТ-аутсорсинга до облачных решений, в одном месте");
$APPLICATION->SetPageProperty("description", "NetMechanic ABS предлагает ИТ-консалтинг, облачные сервисы, аутсорсинг технической поддержки, информационная защита, проектирование, монтаж и эксплуатация СКС");
?><!--Off-Canvas-->
<div class="off-canvas-wrap" data-offcanvas>
	<div class="inner-wrap">
		<?$APPLICATION->IncludeComponent("bitrix:main.include", "", Array("AREA_FILE_SHOW" => "file", "PATH" => "/include/menu_mobile_inc.php", "EDIT_TEMPLATE" => ""), false);?>
		
		<!--Layout-->
		<div class="site-layout"><!--If you add class "boxed" to .site-layout it wraps the whole document in a box, than you can simply add pattern background to body or leave it white. Please note in a "boxed" mode header doesn't stick to the top.-->
			<?$APPLICATION->IncludeComponent("bitrix:main.include", "", Array("AREA_FILE_SHOW" => "file", "PATH" => "/include/header_inc.php", "EDIT_TEMPLATE" => ""), false);?>
			
			<!--Page Content--><!-- InstanceBeginEditable name="content" -->
			<div class="page">
				<?$APPLICATION->IncludeComponent("bitrix:main.include", "", Array("AREA_FILE_SHOW" => "file", "PATH" => "/include/services_slider_inc.php", "EDIT_TEMPLATE" => ""), false);?>
				<?$APPLICATION->IncludeComponent("bitrix:main.include", "", Array("AREA_FILE_SHOW" => "file", "PATH" => "/include/services_work_inc.php", "EDIT_TEMPLATE" => ""), false);?>
				<?$APPLICATION->IncludeComponent("bitrix:main.include", "", Array("AREA_FILE_SHOW" => "file", "PATH" => "/include/services_form_inc.php", "EDIT_TEMPLATE" => ""), false);?>
			</div><!--Page Content Close-->
			
			<?$APPLICATION->IncludeComponent("bitrix:main.include", "", Array("AREA_FILE_SHOW" => "file", "PATH" => "/include/footer_inc.php", "EDIT_TEMPLATE" => ""), false);?>
		</div><!--Layout Close-->
		
		<!-- close the off-canvas menu -->
		<a class="exit-off-canvas"></a>
	</div>
</div><!--Off-Canvas Close-->

<?$APPLICATION->IncludeComponent("bitrix:main.include", "", Array("AREA_FILE_SHOW" => "file", "PATH" => "/include/sticky_buttons_inc.php", "EDIT_TEMPLATE" => ""), false);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>