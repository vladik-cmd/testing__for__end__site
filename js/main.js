$(function(){

	$('.header-btn').on('click', function(){
		$('.header-top__menu').addClass('active');
	});

	$('.close-btn').on('click', function() {
		$('.header-top__menu').removeClass('active')
	});

});