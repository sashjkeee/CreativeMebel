jQuery(function($) {
	timer();
	// Reviews
	$('.review-item').each(function() {
		
		var height = $(this).outerHeight(true);
		$(this).find('.review-name-inner').css('height', height - 260); // 260 = 220 pic height + 20 padding
		
	})
	

	// var tomorrow = new Date();
	// 	tomorrow.setHours(24,0,0,0);
	// $('.counter').countdown({
	// 	until: tomorrow,
	// 	layout: '<div class="counter-item"><b>30</b>{dl}</div>' +
	// 			'<div class="counter-item"><b>{hnn}</b>{hl}</div>' +
	// 			'<div class="counter-item"><b>{mnn}</b>{ml}</div>' +
	// 			'<div class="counter-item"><b>{snn}</b>{sl}</div>'
	// });
	function timer()
	{
		var now = new Date();
		var newDate = new Date((now.getMonth()+1)+"/"+now.getDate()+"/"+now.getFullYear()+" 23:59:59");
		var totalRemains = (newDate.getTime()-now.getTime());
		if (totalRemains>1)
		{
			var Days = (parseInt(parseInt(totalRemains/1000)/(24*3600)));
			var Hours = (parseInt((parseInt(totalRemains/1000) - Days*24*3600)/3600));
			var Min = (parseInt(parseInt((parseInt(totalRemains/1000) - Days*24*3600) - Hours*3600)/60));
			var Sec = parseInt((parseInt(totalRemains/1000) - Days*24*3600) - Hours*3600) - Min*60;
			if (Days<10){Days="0"+Days}
			if (Hours<10){Hours="0"+Hours}
			if (Min<10){Min="0"+Min}
			if (Sec<10){Sec="0"+Sec}
			$(".day").each(function() { $(this).text(Days); });
			$(".hour").each(function() { $(this).text(Hours); });
			$(".min").each(function() { $(this).text(Min); });
			$(".sec").each(function() { $(this).text(Sec); });
			setTimeout(timer, 1000);
		}
	}
	
	// Modal photos
	$('a[data-rel]').each(function() {$(this).attr('rel', $(this).data('rel'));});
	$('a[rel^=prettyPhoto]').prettyPhoto();
		
		
	// Mask phone
	$('.client-phone').mask('+9 (999) 999-99-99');
	
	
	// IE placeholders
	$('input[placeholder], textarea[placeholder]').placeholder();

	
	// Modals
	
		// Phone modal
		$('.open-phone-modal').click(function() {
			$('.si-overlay').css({'height': $(document).height(), 'width' : $(document).width()});
			$('.si-overlay, .phone-modal').fadeIn(700);
			$('.phone-modal .send-extra').val($(this).data('extra'));
			return false;
		});
			
		// Consult modal
		$('.open-consult-modal').click(function() {
			$('.si-overlay').css({'height': $(document).height(), 'width' : $(document).width()});
			$('.si-overlay, .consult-modal').fadeIn(700);
			$('.consult-modal .send-extra2').val($(this).data('extra'));
			return false;
		});
					
		// Consult2 modal
		$('.open-consult2-modal').click(function() {
			$('.si-overlay').css({'height': $(document).height(), 'width' : $(document).width()});
			$('.si-overlay, .consult2-modal').fadeIn(700);
			return false;
		});
							
		// Simple modal
		$('.open-simple-modal').click(function() {
			$('.si-overlay').css({'height': $(document).height(), 'width' : $(document).width()});
			$('.si-overlay, .simple-modal').fadeIn(700);
			return false;
		});
									
		// Call modal
		$('.open-call-modal').click(function() {
			$('.si-overlay').css({'height': $(document).height(), 'width' : $(document).width()});
			$('.si-overlay, .call-modal').fadeIn(700);
			return false;
		});
		
		// Consult3 modal
		$('.open-consult3-modal').click(function() {
			$('.si-overlay').css({'height': $(document).height(), 'width' : $(document).width()});
			$('.si-overlay, .consult3-modal').fadeIn(700);
			return false;
		});
					
		// Questions modal
		$('.open-questions-modal').click(function() {
			$('.si-overlay').css({'height': $(document).height(), 'width' : $(document).width()});
			$('.si-overlay, .questions-modal').fadeIn(700);
			return false;
		});
				
		// Privacy modal
		$('.open-privacy-modal').click(function() {
			$('.si-overlay').css({'height': $(document).height(), 'width' : $(document).width()});
			$('.si-overlay, .privacy-modal').fadeIn(700);
			return false;
		});
		
		
		$('.si-close').click(function() {
		
			$('.si-overlay').fadeOut(700);
			$('.si-modal').fadeOut(700);
			$('.si-success-modal').fadeOut(700);

			return false;
			
		})
			
		$('.si-overlay').click(function() {
		
			$('.si-overlay').fadeOut(700);
			$('.si-modal').fadeOut(700);
			$('.si-success-modal').fadeOut(700);
			
			return false;
			
		})
	
	
	// Form validate 
	$('input').each(function(){$(this).wrap('<span class="relative"></span>');})
	
	$('.send-form').submit(function() {
		
		var name = $(this).find('.client-name');
		var mail = $(this).find('.client-mail');
		var phone = $(this).find('.client-phone');
		
		send = 1;
		
		if (name.val() == '') {
			name.si_show_message('Укажите ваше имя');
			send = 0;
		}
				
		if (phone.size() > 0 && phone.val() == '') {
			phone.si_show_message('Укажите ваш телефон');
			send = 0;
		}
						
		if (mail.size() > 0 && mail.val() == '') {
			mail.si_show_message('Укажите ваш E-mail');
			send = 0;
		}
		
		if (send == 0) 
			return false;
		
		$.post($(this).prop('action'), $(this).serialize(), function(res) {
		
			if (res.success == 1) {

				$('.si-modal').fadeOut(500);
				$('.si-success-modal').fadeIn(500);
				$('.si-overlay').css({'height': $(document).height(), 'width' : $(document).width()}).fadeIn(500);
				
				name.val('');
				if (phone.size() > 0) phone.val('');
				if (mail.size() > 0) mail.val('');
				
				yaCounter25072484.reachGoal('target' + res.id);
				
				switch (res.id) {
				
					case 1: ga('send', 'event', 'Заявка на получение скидки 20%', 'Заявка на получение скидки 20% (1 форма)'); break;
					case 2: ga('send', 'event', 'Заявка на получение скидки 20%', 'Заявка на получение скидки 20% (2 форма)'); break;
					case 3: ga('send', 'event', 'Заявка на получение скидки 20%', 'Заявка на получение скидки 20% (3 форма)'); break;
					case 4: ga('send', 'event', 'Заявка на получение скидки 20%', 'Заявка на получение скидки 20% (4 форма)'); break;
					
					case 5: ga('send', 'event', 'Заявка на обратный звонок', 'Заявка на обратный звонок (верхняя кнопка)'); break;
					case 6: ga('send', 'event', 'Заявка на обратный звонок', 'Заявка на обратный звонок (нижняя кнопка)'); break;
					
					case 7: ga('send', 'event', 'Заявка на бесплатную консультацию дизайнера', 'Заявка на бесплатную консультацию дизайнера по категории'); break;
					case 8: ga('send', 'event', 'Заявка на бесплатную консультацию дизайнера', 'Заявка на бесплатную консультацию дизайнера с блока "Команда дизайнеров"'); break;
					case 11: ga('send', 'event', 'Заявка на бесплатную консультацию дизайнера', 'Заявка на бесплатную консультацию дизайнера с блока "Как мы работаем"'); break;
					
					case 9: ga('send', 'event', 'Заявка на консультацию менеджера', 'Заявка на консультацию менеджера'); break;
					
					case 10: ga('send', 'event', 'Заявка на выезд замерщика', 'Заявка на выезд замерщика'); break;
					
					case 12: ga('send', 'event', 'Вопрос менеджеру', 'Вопрос менеджеру'); break;
					
				}
				
				
			}else{
				alert(res.text);
			}
		
		}, 'json');
		
		return false;
	
	})	
	
})