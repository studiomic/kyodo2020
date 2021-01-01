// NAVIGATION FIXED
$(function() {
	var nav = $('.nav-bar');
	//表示位置
	var navTop = nav.offset().top+250;
	//ナビゲーションの高さ（シャドウの分だけ足してます）
	var navHeight = nav.height()+10;
	var showFlag = false;
	nav.css('top', -navHeight+'px');
	//ナビゲーションの位置まできたら表示
	$(window).scroll(function () {
		var winTop = $(this).scrollTop();
		if (winTop >= navTop) {
			if (showFlag == false) {
				showFlag = true;
				nav
					.addClass('fixed')
					.stop().animate({'top' : '0px'}, 200);
			}
		} else if (winTop <= navTop) {
			if (showFlag) {
				showFlag = false;
				nav.stop().animate({'top' : -navHeight+'px'}, 200, function(){
					nav.removeClass('fixed');
				});
			}
		}
	});
});


// CONTACT FORM VALIDATION
// $(function () {
// 	var validation = $("form")
// 		.exValidation({
// 			rules: {
// 				name: "chkName",
// 				// mailsubject: "chkSubject",
// 				// company: "chkCompany",
// 				// comment: "chkMessage",
// 				email: "chkMail chkemail chkhankaku",
// 			},
// 			errInsertPos: 'after',
// 			// errInsertPos: 'before',
// 			errPosition: 'fixed',
// 		});
// });

// TOP BUTTON
// $(function() {
// 	var topBtn = $('#pagetop');
// 	topBtn.hide();
// 	//スクロールが100に達したらボタン表示
// 	$(window).scroll(function () {
// 		if ($(this).scrollTop() > 1800) {
// 			topBtn.fadeIn();
// 		} else {
// 			topBtn.fadeOut();
// 		}
// 	});
// 	//スクロールしてトップ
// 	topBtn.click(function () {
// 		$('body,html').animate({
// 			scrollTop: 0
// 		}, 5000);
// 		return false;
// 	});
// });
