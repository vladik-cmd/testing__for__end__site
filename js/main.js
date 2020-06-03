$(function(){
    $("#scroll").on("click","a", function (event) {
        event.preventDefault();
        var id  = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 1500);
    });

    $("#menu").on("click","a", function (event) {
        event.preventDefault();
        var id  = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 1500);
    });

    $("#btnup").on("click","a", function (event) {
        event.preventDefault();
        var id  = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 1500);
    });

    $('.btn').on('click', function(){
		$('.popup').addClass('active');
	});

	$('.popup-btn').on('click', function(){
		$('.popup').removeClass('active');
	});

	$('.popup-overlay').on('click', function(){
		$('.popup').removeClass('active');
	});

	$('.more-btn').on('click', function(){
		$('.skills-item').toggleClass('active');
	});

	$('.more-btn').on('click', function(){
		$('.more-btn').toggleClass('active');
	});
	
});


