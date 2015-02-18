<?php

    $email_to 	=   'mokselleweb@yandex.ru, kreativ-2004@mail.ru'; 			// Можно несколько, через запятую
	//$email_to 	=   'zverskiy@yandex.ru'; 			// тестовый email
    $email_from	=   'no-reply@mebelcreative.ru'; 							// E-mail отправителя, в духе no-reply@site.com
    $keyword	=   'Mr.DOORS'; 											// Ключевое слово (вставляется в начало темы письма)
	
	
	function si_create_message($title, $data) {
		
		$time = date('d.m.Y в H:i');
	
		$message = "
			<!doctype html>
				<html>
					<head>
						<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
						<title>$title</title>
						<style>
							div, p, span, strong, b, em, i, a, li, td {
								-webkit-text-size-adjust: none;
							}
							td{vertical-align:middle}
						</style>
					</head>
					
					<body>
						
						<table width='500' cellspacing='0' cellpadding='5' border='1' bordercolor='1' style='border:solid 1px #000;border-collapse:collapse;'>
							<caption align='center' bgcolor='#dededd' style='background:#dededd'>$title</caption>";				
							
			foreach ($data as $key => $val) {
				
				if ($val != '')
					$message .= '<tr><td bgcolor="#efeeee" style="background:#efeeee">' . $key . ':</td><td>' . $val . '</td>';
				
			}			
			
			$message .= "<tr><td bgcolor='#efeeee' style='background:#efeeee'>Дата:</td><td>$time</td></tr><tr><td bgcolor='#efeeee' style='background:#efeeee'>IP:</td><td>$_SERVER[REMOTE_ADDR]</td></tr></table></body></html>";
			
		return $message;
			
	}
	
	
	
    $name     	=   $_POST['client_name'];  
    $phone    	=   isset($_POST['client_phone']) ? $_POST['client_phone'] : 'не указан';
    $mail    	=  	isset($_POST['client_mail']) ? $_POST['client_mail'] : 'не указан';
    $message    =  	isset($_POST['client_message']) ? $_POST['client_message'] : 'не указано';
	
	if (empty($name) || empty($phone))
		die(json_encode(array('success' => 0, 'text' => 'Заполните все поля')));

	$type = intval($_POST['send_type']);
	$extra = intval($_POST['send_extra']);
	$extra2 = $_POST['send_extra2'];
	
	$text = '';
	$code = 0;
	
		switch ($type) {
		
			case 1: 
				
				$mail_theme = 'Заявка на получение скидки 20%';
				
				$text .= 'Заявка на получение скидки 20%';
				
				switch ($extra) {
				
					case 1 :
						$text .= ' с первой формы';
						$code = 1;
					break;
					
					case 2 :
						$text .= ' со второй формы';
						$code = 2;
					break;
									
					case 3 :
						$text .= ' с третьей формы';
						$code = 3;
					break;
													
					case 4 :
						$text .= ' с четвертой формы';
						$code = 4;
					break;
				
				}
				
			break;
			
			case 2:

				$mail_theme = 'Заявка на обратный звонок';
				$text = 'Заявка на обратный звонок';
			
				switch ($extra) {
				
					case 1 :
						$text .=  ' с верхней кнопки';
						$code = 5;
					break;
					
					case 2 :
						$text .=  ' с ниженей кнопки';
						$code = 6;
					break;

				}
				
			break;
			
			case 3:
				
				$mail_theme = 'Заявка на бесплатную консультацию дизайнера';
				$text = 'Заявка на бесплатную консультацию дизайнера по категории "' . $extra2 . '"';
				
				$code = 7;
				
			break;
			
			case 4:
				
				$mail_theme = 'Заявка на бесплатную консультацию дизайнера';
				$text = 'Заявка на бесплатную консультацию дизайнера с блока "Команда дизайнеров"';
				
				$code = 8;
				
			break;
			
			case 5:
				
				$mail_theme = 'Заявка на консультацию менеджера';
				$text = 'Заявка на консультацию менеджера';
				
				$code = 9;
				
			break;
			
			case 6:
				
				$mail_theme = 'Заявка на выезд замерщика';
				$text = 'Заявка на выезд замерщика';
				
				$code = 10;
				
			break;
			
			case 7:
				
				$mail_theme = 'Заявка на бесплатную консультацию дизайнера';
				$text = 'Заявка на бесплатную консультацию дизайнера с блока "КАК МЫ РАБОТАЕМ"';
				
				$code = 11;
				
			break;
			
			case 8:
				
				$mail_theme = 'Вопрос менеджеру';
				$text = 'Вопрос менеджеру';
				
				$code = 12;
				
			break;

		}
		
		
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n";
    $headers .= "From: " . $email_from . "\r\n";
    $headers .= "Reply-To: $name\r\n";
    
	$params = array(
					'Тема' => $text,
					'Имя' => $name,
					'Телефон' => $phone,
					'E-mail' => $mail,
					'Статистическая информация о заявке' => $_POST['si_engine'],
					'UTM-метки' => $_POST['si_utm'],
					'Тип лэндинга' => $_POST['landing_type'],
					);
					
	if ($type == 8) {
	
		$params = array(
					'Тема' => $text,
					'Имя' => $name,
					'Телефон' => $phone,
					'E-mail' => $mail,
					'Вопрос' => nl2br(htmlspecialchars($message)),
					'Статистическая информация о заявке' => $_POST['si_engine'],
					'UTM-метки' => $_POST['si_utm'],
					'Тип лэндинга' => $_POST['landing_type'],
					);
	
	}
	
	
	$text = si_create_message($mail_theme, $params);

	
    if(mail($email_to, $keyword . ' | ' . $mail_theme, $text, $headers)){

        echo json_encode(array('success' => 1, 'id' => $code));
		
    }else{
	
       echo json_encode(array('success' => 0, 'text' => 'Не удалось отправить сообщение'));
		
    }
?>