<?php
	$SITE_TITLE = 'Prokarandash - Он-лайн школа рисунка';
	$SITE_DESCR = '';

	if ( isset($_POST) ) {
		$name = htmlspecialchars(trim($_POST['name']));
		$phone = htmlspecialchars(trim($_POST['phone']));
		$mail = htmlspecialchars(trim($_POST['mail']));
		$content = htmlspecialchars(trim($_POST['content']));
		$second = htmlspecialchars(trim($_POST['second']));
		$price = htmlspecialchars(trim($_POST['price']));
		$price1 = htmlspecialchars(trim($_POST['price1']));
		$subject = $_POST['subject'] ? htmlspecialchars(trim($_POST['subject'])) : '';
		$to = 'rudolifrudolif@gmail.com';

		$headers = "From: $SITE_TITLE \r\n";
		$headers .= "Reply-To: ". $email . "\r\n";
		$headers .= 'MIME-Version: 1.0' . "\r\n";
		$headers .= "Content-Type: text/html; charset=utf-8\r\n";

		if ( $subject ) {
			$data = '<h1>'.$subject."</h1>";
		}
		
		if ( $name ) {
			$data .= 'Имя: '.$name."<br>";
		}
		
		if ( $phone ) {
			$data .= 'Телефон: '.$phone."<br>";
		}
		
		if ( $mail ) {
			$data .= 'Почта: '.$mail."<br>";
		}

		if ( $content ) {
			$data .= 'Сообщение: '.$content."<br>";
		}

		if ( $second ) {
			$data .= 'Участие: '.$second."<br>";
		}
		
		if ( $price ) {
			$data .= 'Участие: '.$price."<br>";
		}

		if ( $price1 ) {
			$data .= 'Участие: '.$price1."<br>";
		}


		$message = "<div style='background:#ccc;border-radius:10px;padding:20px;'>
				".$data."
				<br>\n
				<hr>\n
				<br>\n
				<small>это сообщение было отправлено с сайта ".$SITE_TITLE." - ".$SITE_DESCR.", отвечать на него не надо</small>\n</div>";
		$send = mail($to, $subject, $message, $headers);

		if ( $send ) {
			echo '';
		} else {
				echo '<div class="error">Ошибка отправки формы</div>';
		}

	}
	else {
			echo '<div class="error">Ошибка, данные формы не переданы.</div>';
	}
	die();
?>