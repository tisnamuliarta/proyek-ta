$(document).ready(function() {
	$('.btn-toggle').click(function () {
		$('.navbar-mobile').toggleClass('visible');
    });
	$('.close').click(function() {
        $('.navbar-mobile').removeClass('visible');
    });
});