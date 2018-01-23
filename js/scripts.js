$(window).scroll(function() {
	if ($(document).scrollTop() > 1){
		$('nav').removeClass('opacity');
	} else {
		$('nav').addClass('opacity');
	}
});