<?php 
	//mail("esywebmoney@yandex.ru", "tema", "line_1 \n line_2\n line_3"); пример отправки

	$to = "esuwebmoney@yandex.ru";
	$subjekt = " Заголовок письма";
	$massage = " Текст письма";

	$headers = "Conten-type:text/html; charset = UTF-8 \r\n"; // тип письма html/text и кодировка
	$headers .="from: huy.h2010@yandex.ru"; // от кого пришо письмо
	$headers = "Replay to huy.h2010@yandex.ru"; // ответить на письмо

	mail($to, $subjekt, $message, $headers);
 ?>
