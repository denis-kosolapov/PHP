<?php 
	$cookie_name = "user";
	$cookie_value = "cookie user";
	setcookie($cookie_name, $cookie_value, time() +864000) //имя кука, значение, и время жизни в секундах
	//кука располагается до начала документа HTML
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 </head>
 <body>
 	<?php 
 		if (!isset($_COOKIE[$cookie_name])) { //проверка на наличие глобальной переменной куки
 			echo "cookie named $cookie_name "; // выводим имя пользователя 
 			echo "cookie value $cookie_value"; // выводим значение
 		}
 	 ?>

 	<?php 
 		#setcookie($cookie_name, $cookie_value, time() -3600); //Удаление куков
 		if (count($_COOKIE)>0) {
 			echo "cookie are eneblade";
 		} else {
 			echo "cookie are disabled";
 		}
 	 ?>
 </body>
 </html>
