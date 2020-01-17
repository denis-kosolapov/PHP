<?php 
	session_start() // создание сессии
	//$_SESSION - ГЛОБАЛЬНАЯ ПЕРЕМЕННАЯ
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 </head>
 <body>
 	<?php 
 		$_SESSION["favcolor"] = "red"; //сщздание переменных сессии
 		$_SESSION["favpage"] = " home";

 		echo $_SESSION["favcolor"]; // вывод переменных сессии
 		echo $_SESSION["favpage"];

 		session_unset();
 		session_destroy();
 	 ?>
 </body>
 </html>
