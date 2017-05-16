
</div>
					<!--Page Close-->

					<!--Footer-->
					<div class="footer animation" data-animation="zoomIn">
					    <!-- Footer Subscribe -->
					    <div class="footer-subscribe-widget light-version">
					        <div class="container">
					        </div>
					    </div>
					    <div class="footer-bg" style="background-image:url(<?=OLD_TEMPLATE_PATH?>!custom_img/home/hero/fullscreen/footer.jpg);">
						    <div class="container space-top">
						        <div class="row">
						            <!--Featured Posts-->
						            <div class="col-sm-7 col-xs-12">
                                        <?$APPLICATION->IncludeComponent(
	"bitrix:map.yandex.view", 
	".default", 
	array(
		"INIT_MAP_TYPE" => "MAP",
		"MAP_DATA" => "a:4:{s:10:\"yandex_lat\";d:55.8401011471848;s:10:\"yandex_lon\";d:37.491809423278816;s:12:\"yandex_scale\";i:16;s:10:\"PLACEMARKS\";a:1:{i:0;a:3:{s:3:\"LON\";d:37.491809423278816;s:3:\"LAT\";d:55.8401011471912;s:4:\"TEXT\";s:64:\"Россия, Москва, Головинское шоссе, 5\";}}}",
		"MAP_WIDTH" => "655",
		"MAP_HEIGHT" => "320",
		"CONTROLS" => array(
			0 => "ZOOM",
			1 => "SMALLZOOM",
		),
		"OPTIONS" => array(
			0 => "ENABLE_SCROLL_ZOOM",
			1 => "ENABLE_DBLCLICK_ZOOM",
			2 => "ENABLE_DRAGGING",
		),
		"MAP_ID" => "yam_1",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>
		            				</div>
						            <!--Contact Info-->
						            <div class="col-sm-5 col-xs-12">
						                <?
                                            $APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/v3/contacts.php"), false);
                                        ?>
						            </div>
						        </div>
						    </div>
					    </div>
					    <!--Copyright-->
					    <div class="copyright text-center">
					        <div class="container">
					            <?
                                    $APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/v3/copyrights.php"), false);
                                ?>
					            <?
                                    $APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/v3/social_links.php"), false);
                                ?>
					        </div>
					    </div>
					</div>
				<!--Footer Close-->

			</div>
			<!--Layout Close-->

			<!-- close the off-canvas menu -->
			<a class="exit-off-canvas"></a>

		</div>
	</div>
	<!--Off-Canvas Close-->

	<!--Sticky Buttons-->
		<div class="sticky-btns animation" data-animation="zoomIn">
			<span id="scrollTop-btn"><i class="fa fa-chevron-up"></i></span>
		</div>
	<!--Sticky Buttons Close-->
		<?
            $APPLICATION->AddHeadScript(OLD_TEMPLATE_PATH. "js/libs/jquery-1.11.1.min.js");
            $APPLICATION->AddHeadScript(OLD_TEMPLATE_PATH. "js/libs/jquery.easing.min.js");
            $APPLICATION->AddHeadScript(OLD_TEMPLATE_PATH. "js/plugins/bootstrap.min.js");
            $APPLICATION->AddHeadScript(OLD_TEMPLATE_PATH. "js/plugins/bootstrap-datepicker.js");
            $APPLICATION->AddHeadScript(OLD_TEMPLATE_PATH. "js/plugins/smoothscroll.js");
            $APPLICATION->AddHeadScript(OLD_TEMPLATE_PATH. "js/plugins/utilities.js");
            $APPLICATION->AddHeadScript(OLD_TEMPLATE_PATH. "js/plugins/foundation.min.js");
            $APPLICATION->AddHeadScript(OLD_TEMPLATE_PATH. "js/plugins/jquery.placeholder.js");
            $APPLICATION->AddHeadScript(OLD_TEMPLATE_PATH. "js/plugins/icheck.min.js");
            $APPLICATION->AddHeadScript(OLD_TEMPLATE_PATH. "js/plugins/jquery.validate.min.js");
            $APPLICATION->AddHeadScript(OLD_TEMPLATE_PATH. "js/plugins/waypoints.min.js");
            $APPLICATION->AddHeadScript(OLD_TEMPLATE_PATH. "js/plugins/isotope.min.js");
            $APPLICATION->AddHeadScript(OLD_TEMPLATE_PATH. "js/plugins/masterslider.min.js");
            $APPLICATION->AddHeadScript(OLD_TEMPLATE_PATH. "js/plugins/owl.carousel.min.js");
            $APPLICATION->AddHeadScript(OLD_TEMPLATE_PATH. "js/plugins/lightGallery.min.js");
            $APPLICATION->AddHeadScript(OLD_TEMPLATE_PATH. "js/plugins/jquery.stellar.min.js");
            $APPLICATION->AddHeadScript(OLD_TEMPLATE_PATH. "js/plugins/jquery.parallax.min.js");
            $APPLICATION->AddHeadScript(OLD_TEMPLATE_PATH. "js/plugins/chart.min.js");
            $APPLICATION->AddHeadScript(OLD_TEMPLATE_PATH. "js/plugins/jquery-numerator.js");
            $APPLICATION->AddHeadScript(OLD_TEMPLATE_PATH. "js/plugins/jquery.countdown.min.js");
            $APPLICATION->AddHeadScript(OLD_TEMPLATE_PATH. "js/plugins/jquery.easypiechart.min.js");
            $APPLICATION->AddHeadScript(OLD_TEMPLATE_PATH. "js/plugins/jquery.nouislider.min.js");
            $APPLICATION->AddHeadScript(OLD_TEMPLATE_PATH. "js/plugins/card.min.js");
            $APPLICATION->AddHeadScript(OLD_TEMPLATE_PATH. "js/scripts.js");
            $APPLICATION->AddHeadScript(MAIN_TEMPLATE_PATH. "js/common.js");
        ?>
        <!-- Yandex.Metrika counter -->
		<script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter25368896 = new Ya.Metrika({ id:25368896, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/25368896" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
        <!-- Google Analytics counter -->
        <script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o), m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');ga('create', 'UA-30568723-1', 'auto');ga('send', 'pageview');</script>
</body><!--Body Close-->
</html>