$(function () {

	h();
    $(window).resize(function() {
    	h();
    })

});

function h() {

	$('.clock-item .inner').each(function(indx, element) {
		var w_inner = $(element).outerWidth();
		$(element).height(w_inner);
	});

};