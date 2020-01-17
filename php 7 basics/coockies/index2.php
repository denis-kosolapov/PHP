<?php 
	$counter = isset($_COOKIE['counter']) ? $_COOKIE['counter']:0; // проверяем,есть ли куки с названием counter, если нет, то значение 0
	$counter++; // далее прибавляем каждый раз по 1
	setcookie("counter", $counter);
	echo "Вы посетили эту страницу $counter раз";
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 </head>
 <body>
	
 </body>
 </html>