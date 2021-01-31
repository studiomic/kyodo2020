// scroll
// $(function() {

$(window).scroll(function() {
  var windowH = $(window).height(),//ウィンドウの高さを取得
  scrollY = $(window).scrollTop();//スクロール量を取得

	$('#mixBG1').each(function() {
		var elPosition = $(this).offset().top;
		if (scrollY > elPosition - windowH) {
			$(this).addClass('fadeInBB');
		} else {
			$(this).removeClass('fadeInBB');
		}
	});

  $('#headline1').each(function() {
    var elPosition = $(this).offset().top;
    if (scrollY > elPosition - windowH) {
      $(this).addClass('fadeInX');
		} else {
			$(this).removeClass('fadeInX');
    }
  });

	$('#mixBG2').each(function() {
		var elPosition = $(this).offset().top;
		if (scrollY > elPosition - windowH) {
			$(this).addClass('fadeInBB');
		} else {
			$(this).removeClass('fadeInBB');
		}
	});



	$('#headline2').each(function() {
    var elPosition = $(this).offset().top;
    if (scrollY > elPosition - windowH) {
      $(this).addClass('fadeInX');
    } else {
       $(this).removeClass('fadeInX');
    }
  });

	$('#mixBG3').each(function() {
		var elPosition = $(this).offset().top;
		if (scrollY > elPosition - windowH) {
			$(this).addClass('fadeInBB');
		} else {
			$(this).removeClass('fadeInBB');
		}
	});


	$('#headline3').each(function() {
    var elPosition = $(this).offset().top;
    if (scrollY > elPosition - windowH) {
      $(this).addClass("fadeInX");
    } else {
       $(this).removeClass('fadeInX');
    }
  });
});
