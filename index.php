<?php session_start(); ?>
<?php header('Content-Type: text/html; charset=utf-8'); ?>
<?php header('X-UA-Compatible: IE=edge,chrome=1'); ?>
<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">

	
	<head>
	

		<!-- Meta information (content-type + mobile mod) -->
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
		
	
		<!-- Favicon -->
		<link rel="icon" href="./favicon.ico" type="image/x-icon" />
		<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon" />
		
		
		<!-- Fonts -->
		
		
		
		<!-- CSS styles -->
		<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" />


		<!-- Inlcude jQuery framework from Google CDN or local copy + jQuery migrate -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"> </script>
		<script type="text/javascript">/* <![CDATA[ */ window.jQuery || document.write('<script src="js/jquery.js" type="text/javascript">\x3C/script>') /* ]]> */</script>
		<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js" type="text/javascript"> </script>
		
		
		<!-- JS Scripts -->
		<script src="js/plugins_all.js" type="text/javascript"> </script>

		
		<!-- IE -->
		<!--[if IE]> <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" /> <![endif]-->
		<!--[if IE]> <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->
  
		
		<!-- Page title -->
		<title>Mr. Doors | Шкафы-купе и корпусная мебель на заказ по индивидуальным проектам</title>
	
  
</head>


<body>
<div id="global-wrapper">
	
	<!-- Start: Header -->
	
	<header>
	<div class="centered">
		
		
		<!-- Logo -->
		<a href="http://www.mebel.ru/" id="logo"></a>
		
		
		<!-- Top phone -->
		<div class="top-phone"> 
			<span class="icon phone-icon"></span> +7 495 <b>374-60-43</b><br />
			<a href="#" class="open-phone-modal" data-extra="1">Заказать звонок</a>
		</div>
		
		
		<!-- Title -->
		<h1>
			<span>Шкафы-купе и корпусная мебель</span><br />
			<span class="small">на заказ по индивидуальным проектам</span>
		</h1>
		
		
		<!-- Action -->
		<div class="header-action">
		
			<h1>
				<span>Дизайнерские решения для гостиной, прихожей, спальни,</span><br />
				<span>кабинета и детской комнаты</span>
			</h1>
			
			
			<!-- Page form -->
			
			<div class="form-block">
				
				<!-- Left -->
				<div class="left">
					
					
					<!-- Title -->
					<div class="brown-line"></div>
					
					<h2>Оставьте заявку<br />прямо сейчас</h2>
				
					<b>и <span class="color-brown">получите скидку 20%</span></b><br />
					на классическую мебель
					
					
					<!-- Counter -->
					<div class="counter-wrapper">
						
						до конца акции:<br />
						
						<div class="counter">
						
							<div class="counter-item">
								<b class="day">00</b>
								дней
							</div>
												
							<div class="counter-item">
								<b class="hour">11</b>
								часов
							</div>
												
							<div class="counter-item">
								<b class="min">43</b>
								минуты
							</div>
												
							<div class="counter-item">
								<b class="sec ">34</b>
								секунды
							</div>
						
						</div>
						
					</div>
				
				</div>
				
				
				<!-- Right -->
				<div class="right">
				
					<form action="send.php" method="post" class="send-form page-form">
					
						<div class="form-title">
						
							Оставить заявку<br />
							<span>на <b>получение скидки 20%</b></span>
						
						</div>
					
						<input type="text" name="client_name" class="client-name" placeholder="ваше имя" tabindex="1" /><br />
						<input type="text" name="client_mail" class="client-mail" placeholder="ваш e-mail" tabindex="2" /><br />
						<input type="text" name="client_phone" class="client-phone" placeholder="ваш телефон" tabindex="3" /><br />
							
						<input type="hidden" name="send_type" class="send-type" value="1" />
						<input type="hidden" name="send_extra" class="send-extra" value="1" />
						<input type="hidden" name="landing_type" class="landing-type" value="mebelcreative.ru" />

						<input type="submit" value="Получить скидку" tabindex="4" />
					
					</form>
				
				</div>
				
				
				<!-- Discount -->
				<div class="discount"></div>
			
			</div>
		
		</div>
		
	</div>
	</header>
	
	<!-- End: Header -->
	
	
	<!-- Start: Catalog -->
	
	<article id="catalog">
		
		
		<!-- Title -->
		<div class="block-title catalog-title cre-animate" data-animation="slide-in-from-right" data-speed="1000" data-delay="0" data-offset="90%" data-easing="easeOutBack"></div>
		
		<h1 class="cre-animate" data-animation="slide-in-from-left" data-speed="1000" data-delay="0" data-offset="90%" data-easing="easeOutBack">
			<b>Индивидуальные</b> решения<br />
			<span>для вашего дома</span>
		</h1>
		
		
		<!-- Row 1 -->
		<div id="catalog1">
			
			
			<!-- Single -->
			<div class="catalog-item">
				
				<!-- Title -->
				<h2>Шкафы-купе</h2>
				
				<div class="catalog-item-inner">
					
					<img src="images/catalog/1.jpg" alt="" class="catalog-image" />
					
					<div class="catalog-description">
					<div class="catalog-description-inner">
						
						Экономия пространства, <br />
						вместительность и стильный <br />
						внешний вид
					
					</div>
						<div class="catalog-description-arrow"></div>
					</div>
					
					<div class="catalog-order">
					
						<button class="order-big open-consult-modal" data-extra="Шкафы-купе">Заказать бесплатную<br />консультацию</button><br />
						
						Подбор вариантов и расчёт цены
					
					</div>
					
				</div>
			
			</div>
					
			<!-- Single -->
			<div class="catalog-item">
				
				<!-- Title -->
				<h2>Гостиные</h2>
				
				<div class="catalog-item-inner">
					
					<img src="images/catalog/2.jpg" alt="" class="catalog-image" />
					
					<div class="catalog-description">
					<div class="catalog-description-inner">
						
						Эстетика, функциональность<br />
						и оригинальный дизайн
					
					</div>
						<div class="catalog-description-arrow"></div>
					</div>
					
					<div class="catalog-order">
					
						<button class="order-big open-consult-modal" data-extra="Гостиные">Заказать бесплатную<br />консультацию</button><br />
						
						Подбор вариантов и расчёт цены
					
					</div>
					
				</div>
			
			</div>
					
			<!-- Single -->
			<div class="catalog-item">
				
				<!-- Title -->
				<h2>Детские комнаты</h2>
				
				<div class="catalog-item-inner">
					
					<img src="images/catalog/3.jpg" alt="" class="catalog-image" />
					
					<div class="catalog-description">
					<div class="catalog-description-inner">
						
						Комфорт, безопасность<br />
						и надёжность
						
					</div>
						<div class="catalog-description-arrow"></div>
					</div>
					
					<div class="catalog-order">
					
						<button class="order-big open-consult-modal" data-extra="Детские комнаты">Заказать бесплатную<br />консультацию</button><br />
						
						Подбор вариантов и расчёт цены
					
					</div>
					
				</div>
			
			</div>
		
		</div>
			
			
		<!-- Row 2 -->
		<div id="catalog2">
			
			
			<!-- Single -->
			<div class="catalog-item">
				
				<!-- Title -->
				<h2>Спальни</h2>
				
				<div class="catalog-item-inner">
					
					<img src="images/catalog/4.jpg" alt="" class="catalog-image" />
					
					<div class="catalog-description">
					<div class="catalog-description-inner">
						
						Изысканная атмосфера<br />
						спокойствия, уюта<br />
						и уединённости 
					
					</div>
						<div class="catalog-description-arrow"></div>
					</div>
					
					<div class="catalog-order">
					
						<button class="order-big open-consult-modal" data-extra="Спальни">Заказать бесплатную<br />консультацию</button><br />
						
						Подбор вариантов и расчёт цены
					
					</div>
					
				</div>
			
			</div>
					
			<!-- Single -->
			<div class="catalog-item">
				
				<!-- Title -->
				<h2>Прихожие</h2>
				
				<div class="catalog-item-inner">
					
					<img src="images/catalog/5.jpg" alt="" class="catalog-image" />
					
					<div class="catalog-description">
					<div class="catalog-description-inner">
						
						Гостеприимность и визитная<br />
						карточка каждого дома 
					
					</div>
						<div class="catalog-description-arrow"></div>
					</div>
					
					<div class="catalog-order">
					
						<button class="order-big open-consult-modal" data-extra="Прихожие">Заказать бесплатную<br />консультацию</button><br />
						
						Подбор вариантов и расчёт цены
					
					</div>
					
				</div>
			
			</div>
					
			<!-- Single -->
			<div class="catalog-item">
				
				<!-- Title -->
				<h2>Гардеробные</h2>
				
				<div class="catalog-item-inner">
					
					<img src="images/catalog/6.jpg" alt="" class="catalog-image" />
					
					<div class="catalog-description">
					<div class="catalog-description-inner">
						
						Каждая вещь на своём месте<br />
						и в идеальном состоянии 
						
					</div>
						<div class="catalog-description-arrow"></div>
					</div>
					
					<div class="catalog-order">
					
						<button class="order-big open-consult-modal" data-extra="Гардеробные">Заказать бесплатную<br />консультацию</button><br />
						
						Подбор вариантов и расчёт цены
					
					</div>
					
				</div>
			
			</div>
		
		</div>
					
			
		<!-- Row 2 -->
		<div id="catalog3">
			
			
			<!-- Single -->
			<div class="catalog-item">
				
				<!-- Title -->
				<h2>Кабинеты</h2>
				
				<div class="catalog-item-inner">
					
					<img src="images/catalog/7.jpg" alt="" class="catalog-image" />
					
					<div class="catalog-description">
					<div class="catalog-description-inner">
						
						Удобство в работе и статус<br />
						успешного и респектабельного<br />
						человека
					
					</div>
						<div class="catalog-description-arrow"></div>
					</div>
					
					<div class="catalog-order">
					
						<button class="order-big open-consult-modal" data-extra="Кабинеты">Заказать бесплатную<br />консультацию</button><br />
						
						Подбор вариантов и расчёт цены
					
					</div>
					
				</div>
			
			</div>
					
			<!-- Single -->
			<div class="catalog-item">
				
				<!-- Title -->
				<h2>Библиотеки</h2>
				
				<div class="catalog-item-inner">
					
					<img src="images/catalog/8.jpg" alt="" class="catalog-image" />
					
					<div class="catalog-description">
					<div class="catalog-description-inner">
						
						Идеальные условия хранения<br />
						вашей коллекции книг и деловых<br />
						бумаг 
					
					</div>
						<div class="catalog-description-arrow"></div>
					</div>
					
					<div class="catalog-order">
					
						<button class="order-big open-consult-modal" data-extra="Библиотеки">Заказать бесплатную<br />консультацию</button><br />
						
						Подбор вариантов и расчёт цены
					
					</div>
					
				</div>
			
			</div>
				
		</div>
		
		
		
	</article>
	
	<!-- End: Catalog -->
	
	
	<!-- Start: Benefit -->
	
	<article id="benefit">
	<div class="centered">
	
		<!-- Title -->
		<div class="block-title benefit-title cre-animate" data-animation="slide-in-from-right" data-speed="1000" data-delay="0" data-offset="90%" data-easing="easeOutBack"></div>
		
		<h1 class="cre-animate" data-animation="slide-in-from-left" data-speed="1000" data-delay="0" data-offset="90%" data-easing="easeOutBack">
			Почему <b>8 670 клиентов</b> выбрали нас<br />
			<span>за 16 лет работы</span>
		</h1>
	
		
		<!-- Benefits -->
		<div class="benefits">
			
			
			<!-- Single -->
			<div class="benefit-item">
			
				<div class="benefit-icon i-1"></div>
				
				<h3>50<br />специалистов</h3>
			
				выполнят даже самые<br />
				сложные<br />
				художественные<br />
				и технические проекты
			
			</div>
					
			<!-- Single -->
			<div class="benefit-item">
			
				<div class="benefit-icon i-2"></div>
				
				<h3>Собственное<br />производство</h3>
			
				позволяет<br />
				поддерживать<br />
				невысокие цены<br />
				при неизменном<br />
				качестве
			
			</div>
							
			<!-- Single -->
			<div class="benefit-item">
			
				<div class="benefit-icon i-3"></div>
				
				<h3>КРЕДИТ 0%<br />и рассрочка</h3>
			
				сделает вашу покупку<br />
				доступнее
			
			</div>
									
			<!-- Single -->
			<div class="benefit-item">
			
				<div class="benefit-icon i-4"></div>
				
				<h3>Мебель<br />за 9 дней</h3>
			
				Оперативное<br />
				изготовление мебели<br />
				в срок<br />
				от 9 дней
			
			</div>
											
			<!-- Single -->
			<div class="benefit-item">
			
				<div class="benefit-icon i-5"></div>
				
				<h3>до 100 лет<br />гарантии</h3>
			
				на мебель для всех<br />
				жилых зон — до 5 лет 
			
			</div>
		
		</div>
	
	</div>
	</article>
	
	<!-- End: Benefit -->
	
	
	<!-- Start: Form 1 -->
	
	<article class="promo-form" id="promo1">
		
			<!-- Page form -->
			
			<div class="form-block">
				
				<!-- Left -->
				<div class="left">
					
					
					<!-- Title -->
					<div class="brown-line"></div>
					
					<h2>Оставьте заявку<br />прямо сейчас</h2>
				
					<b>и <span class="color-brown">получите скидку 20%</span></b><br />
					на классическую мебель
					
					
					<!-- Counter -->
					<div class="counter-wrapper">
						
						до конца акции:<br />
						
						<div class="counter">
						
							<div class="counter-item">
								<b class="day">00</b>
								дней
							</div>
												
							<div class="counter-item">
								<b class="hour">11</b>
								часов
							</div>
												
							<div class="counter-item">
								<b class="min">43</b>
								минуты
							</div>
												
							<div class="counter-item">
								<b class="sec ">34</b>
								секунды
							</div>
						
						</div>
						
					</div>
				
				</div>
				
				
				<!-- Right -->
				<div class="right">
				
					<form action="send.php" method="post" class="send-form page-form">
					
						<div class="form-title">
						
							Оставить заявку<br />
							<span>на <b>получение скидки 20%</b></span>
						
						</div>
					
						<input type="text" name="client_name" class="client-name" placeholder="ваше имя" tabindex="5" /><br />
						<input type="text" name="client_mail" class="client-mail" placeholder="ваш e-mail" tabindex="6" /><br />
						<input type="text" name="client_phone" class="client-phone" placeholder="ваш телефон" tabindex="7" /><br />
							
						<input type="hidden" name="send_type" class="send-type" value="1" />
						<input type="hidden" name="send_extra" class="send-extra" value="2" />
						<input type="hidden" name="landing_type" class="landing-type" value="mebelcreative.ru" />

						<input type="submit" value="Получить скидку" tabindex="8" class="cre-animate" data-animation="slide-up-from-bottom" data-speed="1000" data-delay="0" data-offset="90%" data-easing="easeOutBack" />
					
					</form>
				
				</div>
				
				
				<!-- Discount -->
				<div class="discount"></div>
				
				<div class="clear"></div>
			
			</div>
		
	</article>
	
	<!-- End: Form 1 -->
	
	
	<!-- Start: Team -->
	
	<article id="team">
		
		<!-- Title -->
		<div class="block-title team-title cre-animate" data-animation="slide-in-from-right" data-speed="1000" data-delay="0" data-offset="90%" data-easing="easeOutBack"></div>
		
		<h1 class="cre-animate" data-animation="slide-in-from-left" data-speed="1000" data-delay="0" data-offset="90%" data-easing="easeOutBack">
			<b>Команда</b> дизайнеров
		</h1>
		
		
		<!-- Single -->
		<div class="team-item">
			
			<img src="images/team/1.jpg" alt="" class="team-image" />
			
			<div class="team-name">Галина</div>
			
		</div>
				
		<!-- Single -->
		<div class="team-item">
			
			<img src="images/team/2.jpg" alt="" class="team-image" />
			
			<div class="team-name">Ирина</div>
			
		</div>
				
		<!-- Single -->
		<div class="team-item">
			
			<img src="images/team/3.jpg" alt="" class="team-image" />
			
			<div class="team-name">Дарья</div>
			
		</div>
		
		<br />
		
				
		<!-- Single -->
		<div class="team-item">
			
			<img src="images/team/4.jpg" alt="" class="team-image" />
			
			<div class="team-name">Анастасия</div>
			
		</div>
						
		<!-- Single -->
		<div class="team-item">
			
			<img src="images/team/5.jpg" alt="" class="team-image" />
			
			<div class="team-name">Яна</div>
			
		</div>
						
		<!-- Single -->
		<div class="team-item">
			
			<img src="images/team/6.jpg" alt="" class="team-image" />
			
			<div class="team-name">Юлианна</div>
			
		</div>
						
		<!-- Single -->
		<div class="team-item">
			
			<img src="images/team/7.jpg" alt="" class="team-image" />
			
			<div class="team-name">Елена</div>
			
		</div>
						
		<!-- Single -->
		<div class="team-item">
			
			<img src="images/team/8.jpg" alt="" class="team-image" />
			
			<div class="team-name">Николай</div>
			
		</div>
		
		<br />
		
				
		<!-- Single -->
		<div class="team-item">
			
			<img src="images/team/9.jpg" alt="" class="team-image" />
			
			<div class="team-name">Анастасия</div>
			
		</div>
						
		<!-- Single -->
		<div class="team-item">
			
			<img src="images/team/10.jpg" alt="" class="team-image" />
			
			<div class="team-name">Екатерина</div>
			
		</div>
						
		<!-- Single -->
		<div class="team-item">
			
			<img src="images/team/11.jpg" alt="" class="team-image" />
			
			<div class="team-name">Мария</div>
			
		</div>
						
		<!-- Single -->
		<div class="team-item">
			
			<img src="images/team/12.jpg" alt="" class="team-image" />
			
			<div class="team-name">Надежда</div>
			
		</div>
						
		<!-- Single -->
		<div class="team-item">
			
			<img src="images/team/13.jpg" alt="" class="team-image" />
			
			<div class="team-name">Николай</div>
			
		</div>
		
		<div class="clear"></div>
		
		<!-- Button -->
		<button class="long open-consult2-modal cre-animate" data-animation="slide-up-from-bottom" data-speed="1000" data-delay="0" data-offset="90%" data-easing="easeOutBack">Получить бесплатную консультацию дизайнера</button>
		
		
	</article>
	
	<!-- End: Team -->
	
	
	<!-- Start: Awards -->
	
	<article id="award">
		
		
		<!-- Title -->
		<div class="block-title awards-title cre-animate" data-animation="slide-down-from-top" data-speed="1000" data-delay="0" data-offset="90%" data-easing="easeOutBack"></div>
		
		<h1 class="cre-animate" data-animation="scale-up" data-speed="1000" data-delay="0" data-offset="90%" data-easing="easeOutBack">
			Наши <b>награды</b>
		</h1>
		
		
		<!-- Images -->
		<div class="award-images">
			<img src="images/awards/1.png" alt="" class="award-image" />
			<img src="images/awards/2.png" alt="" class="award-image" />
			<img src="images/awards/3.png" alt="" class="award-image" />
		</div>
		
	</article>
	
	<!-- End: Awards -->
	
	
	<!-- Start: How -->
	
	<article id="work">
	<div class="centered">
	
		<!-- Title -->
		<div class="block-title work-title cre-animate" data-animation="slide-in-from-right" data-speed="1000" data-delay="0" data-offset="90%" data-easing="easeOutBack"></div>
		
		<h1 class="cre-animate" data-animation="slide-in-from-left" data-speed="1000" data-delay="0" data-offset="90%" data-easing="easeOutBack">
			Как <b>мы работаем</b>
		</h1>
		
		
		<!-- Single -->
		<div class="work-item i-1">
			
			<div class="work-icon i-1"></div>
			
			<h3>
				Вы <br />
				оставляете<br />
				заявку на<br />
				сайте
			</h3>

			<button class="small open-simple-modal work-button">Оставить заявку</button>
			<div class="work-line"></div>
			
			<div class="work-arrow"></div>
			
		</div>
				
		<!-- Single -->
		<div class="work-item i-2">
			
			<div class="work-icon i-2"></div>
			
			<h3>
				Производим<br /> замер
			</h3>
			
			Наш специалист<br />
			проводит идеально<br />
			точные замеры<br />
			помещения
			

			<button class="small open-call-modal work-button">Вызвать замерщика</button>
			<div class="work-line"></div>
			
			<div class="work-arrow"></div>
			
		</div>
					
		<!-- Single -->
		<div class="work-item i-3">
			
			<div class="work-icon i-3"></div>
			
			<h3>
				Делаем эскиз
			</h3>
			
			Дизайнер<br />
			разрабатывает эскиз<br />
			мебельной<br />
			композиции для<br />
			вашего интерьера
			

			<button class="small-long open-consult3-modal work-button">Получить консультацию дизайнера</button>
			<div class="work-line big"></div>
			
			<div class="work-arrow"></div>
			
		</div>
						
		<!-- Single -->
		<div class="work-item i-4">
			
			<div class="work-icon i-4"></div>
			
			<h3>
				Изготавливаем<br />мебель
			</h3>
			
			Мы изготавливаем<br />
			комплект или предмет<br />
			мебели<br />
			в единственном<br />
			экземпляре

			<div class="work-arrow"></div>
			
		</div>
							
		<!-- Single -->
		<div class="work-item i-5">
			
			<div class="work-icon i-5"></div>
			
			<h3>
				Устанавливаем<br />мебель
			</h3>
			
			Профессиональные<br />
			сборщики<br />
			устанавливают мебель<br />
			в вашей квартире

		</div>
	
	</div>	
	</article>
	
	<!-- End: How -->
	
	
	<!-- Start: Form 2 -->
	
	<article class="promo-form" id="promo2">
		
			<!-- Page form -->
			
			<div class="form-block">
				
				<!-- Left -->
				<div class="left">
					
					
					<!-- Title -->
					<div class="brown-line"></div>
					
					<h2>Оставьте заявку<br />прямо сейчас</h2>
				
					<b>и <span class="color-brown">получите скидку 20%</span></b><br />
					на классическую мебель 
					
					
					<!-- Counter -->
					<div class="counter-wrapper">
						
						до конца акции:<br />
						
						<div class="counter">
						
							<div class="counter-item">
								<b class="day">00</b>
								дней
							</div>
												
							<div class="counter-item">
								<b class="hour">11</b>
								часов
							</div>
												
							<div class="counter-item">
								<b class="min">43</b>
								минуты
							</div>
												
							<div class="counter-item">
								<b class="sec ">34</b>
								секунды
							</div>
						
						</div>
						
					</div>
				
				</div>
				
				
				<!-- Right -->
				<div class="right">
				
					<form action="send.php" method="post" class="send-form page-form">
					
						<div class="form-title">
						
							Оставить заявку<br />
							<span>на <b>получение скидки 20%</b></span>
						
						</div>
					
						<input type="text" name="client_name" class="client-name" placeholder="ваше имя" tabindex="9" /><br />
						<input type="text" name="client_mail" class="client-mail" placeholder="ваш e-mail" tabindex="10" /><br />
						<input type="text" name="client_phone" class="client-phone" placeholder="ваш телефон" tabindex="11" /><br />
							
						<input type="hidden" name="send_type" class="send-type" value="1" />
						<input type="hidden" name="send_extra" class="send-extra" value="3" />
						<input type="hidden" name="landing_type" class="landing-type" value="mebelcreative.ru" />

						<input type="submit" value="Получить скидку" tabindex="12" class="cre-animate" data-animation="slide-up-from-bottom" data-speed="1000" data-delay="0" data-offset="90%" data-easing="easeOutBack" />
					
					</form>
				
				</div>
				
				
				<!-- Discount -->
				<div class="discount"></div>
				
				<div class="clear"></div>
			
			</div>
		
	</article>
	
	<!-- End: Form 2 -->
	
	
	<!-- Start: Projects -->
	
	<article id="project">
	<div class="centered">
	
		<!-- Title -->
		<div class="block-title project-title cre-animate" data-animation="slide-in-from-right" data-speed="1000" data-delay="0" data-offset="90%" data-easing="easeOutBack"></div>
		
		<h1 class="cre-animate" data-animation="slide-in-from-left" data-speed="1000" data-delay="0" data-offset="90%" data-easing="easeOutBack">
			Выполненные <b>проекты</b>
		</h1>
		
		
		<!-- Single -->
		<div class="project-item">
			
			<div class="project-photos">
				<img src="images/projects/1/1.jpg" alt="" /> <br />
				<img src="images/projects/1/2.jpg" alt="" /> <br />
				<img src="images/projects/1/3.jpg" alt="" /> <br />
			</div>
			
			<div class="project-text">
				
				<div class="project-title">
					Благородное гостеприимство<br />
					прихожей 
				</div>
				
				<h4>Задача</h4>
					
					<p>
						Создать гармоничный интерьер и компактную композицию для прихожей в итальянском стиле, сочетая в дизайне несколько цветов, декоров и функций.
					</p>
									
				<h4>Решение</h4>
				
					<p>
						При разработке дизайн-проекта мы выбрали сочетание высокой эстетики и функциональности, классического итальянского стиля и контрастных цветов мебели. 
					</p>
					
					<p>
						Мы создали композицию для прихожей на основе стоек «Лофт 24» со встроенной светодиодной подсветкой. На четырёх стойках, помимо корпуса из ламинированной плиты декора «Вишня Амаретто», закреплены открытые полки, подставки для обуви, вешалка и выдвижной ящик. Зеркало расположено на стене между стойками. Корпуса дополнены распашными фасадами со вставками из декоративного зеркала. 
					</p>
		 
				<h4>Результат</h4>
										
					<p>
						Сдержанное благородство интерьера, комфорт и функциональность прихожей ощущаются в каждой детали. 
					</p>

				<h4>Комментарий заказчика</h4>
					
					<p>
						«В нашей прихожей так уютно, что теперь нам намного приятнее возвращаться домой и принимать гостей! Все отмечают изысканный и эффектный дизайн мебели».
					</p>
					
					<p>
						Ирина и Павел, семейная пара 
					</p>
								
			</div>
			
		</div>
			
			
		<!-- Single -->
		<div class="project-item even">
			
			<div class="project-photos">
				<img src="images/projects/2/1.jpg" alt="" /> <br />
				<img src="images/projects/2/2.jpg" alt="" /> <br />
				<img src="images/projects/2/3.jpg" alt="" /> <br />
			</div>
			
			<div class="project-text">
				
				<div class="project-title">
					Современный взгляд на рабочее<br />
					пространство 
				</div>
				
				<h4>Задача</h4>
					
					<p>
						Разработать дизайн-проект классического кабинета с оригинальными современными решениями.
					</p>
									
				<h4>Решение</h4>
				
					<p>
						Одним из основных акцентов этой композиции являются стеллажные модули, закрытые распашными рамными фасадами со вставками из декоративного стекла «Беж Кьяро», украшенные декоративной раскладкой. В левой части на тумбе мы установили две открытые полки с рельефным торцевым профилем на оригинальных полкодержателях. Рядом на стене расположили зеркало в декоративной раме. Справа установлили тумбу для оргтехники и письменный стол, в нише над ними – навесные полки. Верхняя полка закрыта раздвижными рамочными фасадами со вставками из прозрачного стекла. Открытая полка крепится к стене с помощью полкодержателей «Пиноккио».
					</p>

				<h4>Результат</h4>
										
					<p>
						Золотистые древесные тона, декоративные раскладки на фасадах и множество других элементов придают стилю выразительность и благородное изящество, при этом полностью сохраняют функциональность кабинета.
					</p>

				<h4>Комментарий заказчика</h4>
					
					<p>
						«Атмосфера кабинета помогает не просто настроиться на рабочий лад, а насладиться процессом!» 
					</p>
					
					<p>
						Сергей Лебедев, бизнесмен
					</p>
								
			</div>
			
		</div>
				
				
		<!-- Single -->
		<div class="project-item">
			
			<div class="project-photos">
				<img src="images/projects/3/1.jpg" alt="" /> <br />
				<img src="images/projects/3/2.jpg" alt="" /> <br />
				<img src="images/projects/3/3.jpg" alt="" /> <br />
			</div>
			
			<div class="project-text">
				
				<div class="project-title">
					Стильное место для отдыха<br />
					и релаксации 
				</div>
				
				<h4>Задача</h4>
					
					<p>
						Разработать дизайн-проект классического кабинета с оригинальными современными решениями.
					</p>
									
				<h4>Решение</h4>
				
					<p>
						При разработке интерьера спальни мы создали ощущение простора, безопасности и комфорта. Двуспальная кровать с двумя прикроватными тумбами, туалетный столик с зеркалом, комод и вместительный шкаф гармонично размещены в пространстве. При этом почти у каждого предмета мебели есть свой маленький секрет: как по волшебству кровать превращается в дополнительную систему хранения, а объёмный шкаф может вместить даже самую обширную коллекцию одежды и аксессуаров. 
					</p>

				<h4>Результат</h4>
										
					<p>
						Интерьер этой просторной спальни навевает спокойствие и настраивает на расслабление. Удивительные возможности, скрытые в каждом придмете интерьера, будут радовать хозяев снова и снова. 
					</p>

				<h4>Комментарий заказчика</h4>
					
					<p>
						«Мы в восторге от нашей спальни! Интерьер с лёгкой ненавязчивой и романтической аурой полностью соответствует нашим представлениям о спокойном отдыхе и расслаблении». 
					</p>
					
					<p>
						Максим и Елена, семейная пара 
					</p>
								
			</div>
			
		</div>
	
	</div>
	</article>
	
	<!-- End: Projects -->
	
	
	<!-- Start: Reviews -->
	
	<article id="reviews">
	<div class="centered">
	
		<!-- Title -->
		<div class="block-title reviews-title cre-animate" data-animation="slide-in-from-right" data-speed="1000" data-delay="0" data-offset="90%" data-easing="easeOutBack"></div>
		
		<h1 class="cre-animate" data-animation="slide-in-from-left" data-speed="1000" data-delay="0" data-offset="90%" data-easing="easeOutBack">
			<b>Отзывы</b> наших клиентов 
		</h1>
		
		
		<!-- Single -->
		<div class="review-item">
			
			<!-- Author info -->
			<div class="review-author">
				
				<img src="images/reviews/1.jpg" alt="" class="review-photo" />
				
				<div class="review-name">
				<div class="review-name-inner">
				
					<b>Ольга Лукьянцева,</b><br />
					бухгалтер<br />
					<span class="review-city">г. Подольск</span> 
				
				</div>
				</div>
				
			</div>
			
			<!-- Text -->
			<div class="review-text">
			
				<div class="review-title">
					«Всё тщательно продумали и превзошли<br />
					наши ожидания»
				</div>
				
				<p>
					Заказываем мебель в компании «Креатив» уже второй раз и очень довольны.
				</p>
				
				<p>
					Во-первых, потому что это официальные представители Mr.Doors, во-вторых, менеджеры культурные, вежливые, обходительные 
				</p>
				
				<p>
					Дизайнеры очень долго нами занимались! Всё тщательно продумали, учли все нюансы и превзошли наши ожидания. 
				</p>
				
				<p>
					Теперь все спрашивают, где купить такую мебель, на что мы с гордостью отвечаем, что это эксклюзив! 
				</p>

			</div>
			
		</div>
			
		<!-- Single -->
		<div class="review-item">
			
			<!-- Author info -->
			<div class="review-author">
				
				<img src="images/reviews/2.jpg" alt="" class="review-photo" />
				
				<div class="review-name">
				<div class="review-name-inner">
				
					<b>Сергей и Анна<br />Голятины,</b><br />
					<span class="review-city">г. Москва</span> 
				
				</div>
				</div>
				
			</div>
			
			<!-- Text -->
			<div class="review-text">
			
				<div class="review-title">
					«Теперь будем заказывать мебель только<br />
					в этой компании.... »
				</div>
				

				<p>
					После продолжительных поисков мебели для спальни и прихожей решили остановить свой выбор на мебели производства Mr.Doors и не прогадали. 
				</p>
				
				<p>
					Долго не могли определиться со стилем, постоянно звонили, что-то меняли. Понравилось, у компании есть проверенные представители – студия «Креатив», к нам относились с понимаем и уважением, внимательно консультировали. Ведь хотелосьвсё по высшему разряду, и так оно и вышло!
				</p>
				
				<p>
					Особую благодарность выражаем бригаде сборщиков. Воспитанные, некурящие, знающие своё дело на 5+.  
				</p>
				
				<p>
					Теперь будем заказывать мебель только в этой компании.
				</p>
				
			</div>
			
		</div>
				
		<!-- Single -->
		<div class="review-item">
			
			<!-- Author info -->
			<div class="review-author">
				
				<img src="images/reviews/3.jpg" alt="" class="review-photo" />
				
				<div class="review-name">
				<div class="review-name-inner">
				
					<b>Вера Сибирёва,</b><br />
					пенсионерка<br />
					<span class="review-city">г. Москва</span> 
				
				</div>
				</div>
				
			</div>
			
			<!-- Text -->
			<div class="review-text">
			
				<div class="review-title">
					«Даже не могла представить,<br />
					что такая красота в итоге получится!»
				</div>
				
				<p>
					Только что собрали мне замечательный шкаф-купе. Глядя на его эскиз, я даже не могла представить, что такая красота в итоге получится! 
				</p>
				
				<p>
					Мало того, что всё сделано в лучшем виде и вовремя, так ребята ещё и поразили меня аккуратностью: и за собой всё убрали, и упаковочный мусор весь вынесли сами. Такого мне ещё не встречалось! Всем знакомым теперь буду рекомендовать мебель Mr.Doors от компании «Креатив». 
				</p>
				
			</div>
			
		</div>
					
		<!-- Single -->
		<div class="review-item">
			
			<!-- Author info -->
			<div class="review-author">
				
				<img src="images/reviews/4.jpg" alt="" class="review-photo" />
				
				<div class="review-name">
				<div class="review-name-inner">
				
					<b>Ирина Евсеева,</b><br />
					администратор<br />
					<span class="review-city">г. Красногорск</span> 
				
				</div>
				</div>
				
			</div>
			
			<!-- Text -->
			<div class="review-text">
			
				<div class="review-title">
					«Всё сделали быстро, красиво и легко»
				</div>
				
				<p>
					Mr.Doors – фирму «Креатив» и всех её сотрудников!! 
				</p>
								
				<p>
					Начиная с замера и заканчивая установкой гардеробной, всё сделали быстро, красиво и легко.
				</p>
								
				<p>
					Ясно объясняли, вовремя собрали. И ещё хотела отдельно сказать огромное спасибо дизайнеру Николаю за его талант, терпение и идеи, как всё грамотно и удобно разместить. Спасибо вам! Исполнили мою давнюю мечту. 
				</p>

			</div>
			
		</div>
	
	</div>
	</article>
	
	<!-- End: Reviews -->
	
	
	<!-- Start: Form 3 -->
	
	<article class="promo-form" id="promo3">
		
			<!-- Page form -->
			
			<div class="form-block">
				
				<!-- Left -->
				<div class="left">
					
					
					<!-- Title -->
					<div class="brown-line"></div>
					
					<h2>Оставьте заявку<br />прямо сейчас</h2>
				
					<b>и <span class="color-brown">получите скидку 20%</span></b><br />
					на классическую мебель 
					
					
					<!-- Counter -->
					<div class="counter-wrapper">
						
						до конца акции:<br />
						
						<div class="counter">
						
							<div class="counter-item">
								<b class="day">00</b>
								дней
							</div>
												
							<div class="counter-item">
								<b class="hour">11</b>
								часов
							</div>
												
							<div class="counter-item">
								<b class="min">43</b>
								минуты
							</div>
												
							<div class="counter-item">
								<b class="sec ">34</b>
								секунды
							</div>
						
						</div>
						
					</div>
				
				</div>
				
				
				<!-- Right -->
				<div class="right">
				
					<form action="send.php" method="post" class="send-form page-form">
					
						<div class="form-title">
						
							Оставить заявку<br />
							<span>на <b>получение скидки 20%</b></span>
						
						</div>
					
						<input type="text" name="client_name" class="client-name" placeholder="ваше имя" tabindex="13" /><br />
						<input type="text" name="client_mail" class="client-mail" placeholder="ваш e-mail" tabindex="14" /><br />
						<input type="text" name="client_phone" class="client-phone" placeholder="ваш телефон" tabindex="15" /><br />
							
						<input type="hidden" name="send_type" class="send-type" value="1" />
						<input type="hidden" name="send_extra" class="send-extra" value="4" />
						<input type="hidden" name="landing_type" class="landing-type" value="mebelcreative.ru" />

						<input type="submit" value="Получить скидку" tabindex="16" class="cre-animate" data-animation="slide-up-from-bottom" data-speed="1000" data-delay="0" data-offset="90%" data-easing="easeOutBack" />
					
					</form>
				
				</div>
				
				
				<!-- Discount -->
				<div class="discount"></div>
				
				<div class="clear"></div>
			
			</div>
		
	</article>
	
	<!-- End: Form 3 -->
	
	
	<!-- Start: Contacts -->
	
	<article id="maps">
	<div class="centered">
	
		<!-- Title -->
		<div class="block-title maps-title cre-animate" data-animation="slide-in-from-right" data-speed="1000" data-delay="0" data-offset="90%" data-easing="easeOutBack"></div>
		
		<h1 class="cre-animate" data-animation="slide-in-from-left" data-speed="1000" data-delay="0" data-offset="90%" data-easing="easeOutBack">
			<b>Наши салоны</b> в Москве
		</h1>
		
		
		<!-- Single -->
		<div class="map-item">
		
			<div class="map-description">
			
				<span class="icon adress-icon"></span>
				
				<div class="map-description-text">
					Нахимовский проспект,<br />
					д. 24,  ТЦ «Экспострой»,<br />
					пав. 3  сектор В,<br />
					место 435
				</div>
			
			</div>
		
			<script type="text/javascript" charset="utf-8" src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=47HxRxUgt-x6ty1vh_hq-i6CiCc0UpMK&amp;width=229&amp;height=229"></script>
		
		</div>
			
		<!-- Single -->
		<div class="map-item">
		
			<div class="map-description">
			
				<span class="icon adress-icon"></span>
				
				<div class="map-description-text">
					Каширское шоссе, д. 19,<br />
					кор.2, 3-й этаж,<br />
					павильон 3-44
				</div>
			
			</div>
		
			<script type="text/javascript" charset="utf-8" src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=ZMuvdnC8lw5J36UalJs6c9mBtmUEs3le&amp;width=229&amp;height=229"></script>
			
		</div>
				
		<!-- Single -->
		<div class="map-item">
		
			<div class="map-description">
			
				<span class="icon adress-icon"></span>
				
				<div class="map-description-text">
					пр-т Маршала Жукова,<br />
					д. 52
				</div>
			
			</div>
		
			<script type="text/javascript" charset="utf-8" src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=did14lB_ljEeNS6ZcK9heVei2MFdo3Yh&amp;width=229&amp;height=229"></script>
			
		</div>
					
		<!-- Single -->
		<div class="map-item">
		
			<div class="map-description">
			
				<span class="icon adress-icon"></span>
				
				<div class="map-description-text">
					Калужское шоссе, 41 км<br />
					МКАД, Торговый центр<br />
					Славянский стан, пав.32
				</div>
			
			</div>
		
			<script type="text/javascript" charset="utf-8" src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=HtjuyDFqh42TLBet0Em3ot7AurmtjL-_&amp;width=229&amp;height=229"></script>
			
		</div>
	
	</div>
	</article>
	
	<!-- End: Contacts -->
	
	
	<!-- Start: Questions -->
	
	<article id="questions">
		
		<h1>Остались <b>вопросы?</b></h1>
		
		<a href="#" class="open-questions-modal cre-animate" data-animation="slide-up-from-bottom" data-speed="1000" data-delay="0" data-offset="90%" data-easing="easeOutBack">Задайте их нашему менеджеру</a>
		
	</article>
	
	<!-- End: Questions -->
	
	
	<!-- Start: Footer -->
	
	<footer>
	<div class="centered">

	
		<!-- Footer phone -->
		<div class="footer-phone"> 
			<span class="icon phone-icon"></span> +7 495 <b>374-60-43</b><br />
			<a href="#" class="open-phone-modal" data-extra="2">Заказать звонок</a>
		</div>
		
		
		<!-- Creator -->
		<div class="creator">
			<a href="/" target="_blank"><img src="images/logo_footer.png" alt="logo footer" /></a>
		</div>

		
		<div class="privacy">
			<a href="#" class="open-privacy-modal">Пользовательское соглашение</a>
		</div>
	
	</div>
	</footer>
	
	<!-- End: Footer -->
	
	
	<!-- Start: Modals -->
	
	
		<!-- Overlay -->
		<div class="si-overlay"></div>
		
		
		<!-- Success modal -->
		<div class="si-success-modal">
			
			<a href="#" class="si-close"></a>
			
			<h1>Спасибо за оставленную заявку</h1>
			
			<h2>Наш менеджер свяжется с вами в ближайшее время</h2>
			
		</div>
		
		
		<!-- Phone modal -->
		<div class="si-modal phone-modal">
			
			<a href="#" class="si-close"></a>
			
			<form action="send.php" method="post" class="send-form modal-form">
			
				<div class="form-title">
				
					Заказать звонок<br />
					
					<span>
						<b>Оставьте заявку</b><br />
						и мы вам обязательно перезвоним
					</span>
				
				</div>
			
				<input type="text" name="client_name" class="client-name" placeholder="ваше имя" /><br />
				<input type="text" name="client_phone" class="client-phone" placeholder="ваш телефон" /><br />
					
				<input type="hidden" name="send_type" class="send-type" value="2" />
				<input type="hidden" name="send_extra" class="send-extra" value="1" />
				<input type="hidden" name="send_extra2" class="send-extra2" value="1" />
				<input type="hidden" name="landing_type" class="landing-type" value="mebelcreative.ru" />

				<input type="submit" value="Заказать звонок" />
			
			</form>
			
		</div>
			
		<!-- Consult modal -->
		<div class="si-modal consult-modal">
			
			<a href="#" class="si-close"></a>
			
			<form action="send.php" method="post" class="send-form modal-form">
			
				<div class="form-title">
				
					Бесплатная консультация дизайнера<br />
					
					<span>
						<b>Заполните форму заявки,</b><br />
						чтобы получить бесплатную консультацию дизайнера 
					</span>
				
				</div>
			
				<input type="text" name="client_name" class="client-name" placeholder="ваше имя" /><br />
				<input type="text" name="client_mail" class="client-mail" placeholder="ваш e-mail" /><br />
				<input type="text" name="client_phone" class="client-phone" placeholder="ваш телефон" /><br />
					
				<input type="hidden" name="send_type" class="send-type" value="3" />
				<input type="hidden" name="send_extra" class="send-extra" value="1" />
				<input type="hidden" name="send_extra2" class="send-extra2" value="1" />
				<input type="hidden" name="landing_type" class="landing-type" value="mebelcreative.ru" />

				<input type="submit" value="Получить консультацию" />
			
			</form>
			
		</div>
				
		<!-- Consult2 modal -->
		<div class="si-modal consult2-modal">
			
			<a href="#" class="si-close"></a>
			
			<form action="send.php" method="post" class="send-form modal-form">
			
				<div class="form-title">
				
					Бесплатная консультация дизайнера<br />
					
					<span>
						<b>Заполните форму заявки,</b><br />
						чтобы получить бесплатную консультацию дизайнера 
					</span>
				
				</div>
			
				<input type="text" name="client_name" class="client-name" placeholder="ваше имя" /><br />
				<input type="text" name="client_mail" class="client-mail" placeholder="ваш e-mail" /><br />
				<input type="text" name="client_phone" class="client-phone" placeholder="ваш телефон" /><br />
					
				<input type="hidden" name="send_type" class="send-type" value="4" />
				<input type="hidden" name="send_extra" class="send-extra" value="1" />
				<input type="hidden" name="send_extra2" class="send-extra2" value="1" />
				<input type="hidden" name="landing_type" class="landing-type" value="mebelcreative.ru" />

				<input type="submit" value="Получить консультацию" />
			
			</form>
			
		</div>
					
		<!-- Simple modal -->
		<div class="si-modal simple-modal">
			
			<a href="#" class="si-close"></a>
			
			<form action="send.php" method="post" class="send-form modal-form">
			
				<div class="form-title">
				
					Заявка на консультацию менеджера<br />
					
					<span>
						<b>Оставьте заявку,</b><br />
						и наш менеджер свяжется с вами<br /> в течение 15 минут 
					</span>
				
				</div>
			
				<input type="text" name="client_name" class="client-name" placeholder="ваше имя" /><br />
				<input type="text" name="client_mail" class="client-mail" placeholder="ваш e-mail" /><br />
				<input type="text" name="client_phone" class="client-phone" placeholder="ваш телефон" /><br />
					
				<input type="hidden" name="send_type" class="send-type" value="5" />
				<input type="hidden" name="send_extra" class="send-extra" value="1" />
				<input type="hidden" name="send_extra2" class="send-extra2" value="1" />
				<input type="hidden" name="landing_type" class="landing-type" value="mebelcreative.ru" />

				<input type="submit" value="Оставить заявку" />
			
			</form>
			
		</div>
						
		<!-- Call modal -->
		<div class="si-modal call-modal">
			
			<a href="#" class="si-close"></a>
			
			<form action="send.php" method="post" class="send-form modal-form">
			
				<div class="form-title">
				
					Вызов замерщика<br />
					
					<span>
						<b>Заполните форму заявки,</b><br />
						чтобы наш специалист произвел<br />
						все необходимые замеры 
					</span>
				
				</div>
			
				<input type="text" name="client_name" class="client-name" placeholder="ваше имя" /><br />
				<input type="text" name="client_mail" class="client-mail" placeholder="ваш e-mail" /><br />
				<input type="text" name="client_phone" class="client-phone" placeholder="ваш телефон" /><br />
					
				<input type="hidden" name="send_type" class="send-type" value="6" />
				<input type="hidden" name="send_extra" class="send-extra" value="1" />
				<input type="hidden" name="send_extra2" class="send-extra2" value="1" />
				<input type="hidden" name="landing_type" class="landing-type" value="mebelcreative.ru" />

				<input type="submit" value="Оставить заявку" />
			
			</form>
			
		</div>
							
		<!-- Consult3 modal -->
		<div class="si-modal consult3-modal">
			
			<a href="#" class="si-close"></a>
			
			<form action="send.php" method="post" class="send-form modal-form">
			
				<div class="form-title">
				
					Бесплатная консультация дизайнера<br />
					
					<span>
						<b>Заполните форму заявки,</b><br />
						чтобы получить бесплатную консультацию дизайнера 
					</span>
				
				</div>
			
				<input type="text" name="client_name" class="client-name" placeholder="ваше имя" /><br />
				<input type="text" name="client_mail" class="client-mail" placeholder="ваш e-mail" /><br />
				<input type="text" name="client_phone" class="client-phone" placeholder="ваш телефон" /><br />
					
				<input type="hidden" name="send_type" class="send-type" value="7" />
				<input type="hidden" name="send_extra" class="send-extra" value="1" />
				<input type="hidden" name="send_extra2" class="send-extra2" value="1" />
				<input type="hidden" name="landing_type" class="landing-type" value="mebelcreative.ru" />

				<input type="submit" value="Оставить заявку" />
			
			</form>
			
		</div>
								
		<!-- Questions modal -->
		<div class="si-modal questions-modal">
			
			<a href="#" class="si-close"></a>
			
			<form action="send.php" method="post" class="send-form modal-form">
			
				<div class="form-title">
				
					Вопрос менеджеру<br />
					
					<span>
						<b>Оставьте заявку,</b><br />
						и наш менеджер свяжется с вами<br /> в течение 15 минут 
					</span>
				
				</div>
			
				<input type="text" name="client_name" class="client-name" placeholder="ваше имя" /><br />
				<input type="text" name="client_mail" class="client-mail" placeholder="ваш e-mail" /><br />
				<input type="text" name="client_phone" class="client-phone" placeholder="ваш телефон" /><br />
				<textarea name="client_message" class="client-message" placeholder="ваш вопрос" cols="10" rows="5"></textarea>
				
				<input type="hidden" name="send_type" class="send-type" value="8" />
				<input type="hidden" name="send_extra" class="send-extra" value="1" />
				<input type="hidden" name="send_extra2" class="send-extra2" value="1" />
				<input type="hidden" name="landing_type" class="landing-type" value="mebelcreative.ru" />

				<input type="submit" value="Оставить заявку" />
			
			</form>
			
		</div>
	
									
		<!-- Privacy modal -->
		<div class="si-modal privacy-modal">

			<h1>Политика конфиденциальности</h1>
			
			<p>
				Администрация данной посадочной страницы (Лэндинг) не может передать или раскрыть информацию предоставленную пользователем (далее Пользователь) при регистрации и использовании функций сайта третьим лицам, кроме случаев, описанных законодательством страны, на территории которой пользователь ведет свою деятельность.
			</p>
			
			<p>
				Для регистрации на посадочной странице, пользователь обязан внести некоторую персональную информацию. Для проверки предоставленных данных, посадочная страница оставляет за собой право потребовать доказательства идентичности в онлайн или офлайн режимах.
			</p>
			
			<p>
				Лэндинг использует личную информацию Пользователя для обслуживания и для улучшения качества предоставляемых услуг. Часть персональной информации может быть предоставлена банку или платежной системе, в случае, если предоставление этой информации обусловлено процедурой перевода средств платежной системе, услугами которой Пользователь желает воспользоваться. Лэндинг прилагает все усилия для сбережения в сохранности личных данных Пользователя. Личная информация может быть раскрыта в случаях, описанных законодательством, либо когда администрация сочтет подобные действия необходимыми для соблюдения юридической процедуры, судебного распоряжения или легального процесса необходимого для работы Пользователя с Лэндингом. В других случаях, ни при каких условиях, информация, которую Пользователь передает Лэндингу, не будет раскрыта третьим лицам.
			</p>
			
		</div>
	
	
	
	<script type="text/javascript" src="js/main.js"> </script>   
   
	<?php include('si-engine.php'); ?>
	
	<!-- Yandex.Metrika informer --><a href="https://metrika.yandex.ru/stat/?id=26016102&amp;from=informer" target="_blank" rel="nofollow"><img src="//bs.yandex.ru/informer/26016102/3_1_FFFFFFFF_EFEFEFFF_0_pageviews" style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" onclick="try{Ya.Metrika.informer({i:this,id:26016102,lang:'ru'});return false}catch(e){}"/></a><!-- /Yandex.Metrika informer -->
	
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-51648909-1', 'auto');
    ga('send', 'pageview');

  </script>
  
	<!--

		Проект: Mr. Doors | Шкафы-купе и корпусная мебель на заказ по индивидуальным проектам
		Создатель: Маркетинговое агенство "Mokselle" - http://mokselle.ru/
		Технический специалист: Морев Максим (SeaInside (ex. MopuC)) - https://fl.ru/users/MopuC/
		Дата: 25.05.2014
		Версия: 1.0

	-->
	
</div>	
</body>
</html>