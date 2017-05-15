<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Test 4 cobrowsing");
?>Text here.... <br>
 <script type="text/javascript">
	(function(){
		var sitehelp_s = document.createElement('script');
		sitehelp_s.type = 'text/javascript';
		sitehelp_s.async = true;
		sitehelp_s.src = top.location.protocol + '//c.sitehelp.im/code.cgi?c=3380' + (top.location.protocol=='http:' ? '' : '&ssl=1') + '&rnd=' + Math.random();
		document.body.appendChild(sitehelp_s);
	})();
</script><br>
 <br>
 <?$APPLICATION->IncludeComponent(
	"bitrix:main.feedback",
	"",
	Array(
	)
);?><br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>