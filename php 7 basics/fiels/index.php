<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div class="1">
	<?php 
		echo readfile("loren.txt"); // выводит текси и количество байт (вес текста)
	?>
	</div>
	<br><br>
	<div class="2">
	<?php
		$loren = fopen("loren.txt", "r") or die("не удалось"); // открывает файл для чтения
		//echo fread($loren, filesize("loren.txt")); // читает файл
		//fclose($loren); // закрывает файл

		echo fgets($loren, 100); // вывеси опеределенное количество байт

		while (!feof($loren)) {
			echo fgets($loren, 258); // функция feof считывает файл пока конец файла не будет достигнут
		}
	 ?>
	 </div>
	 <div class="3">
	<?php
		$hello = fopen("world.txt", "w"); //создает новый файл, даже если его нет
		$txt = "Можно сюда залить не только текст, но и статичный документ, хотя и скрипты можно выводить спокойно"; // функция записи в файл, вводим то, что будет записано
		fwrite($hello, $txt); //считывание файла
		fclose($hello);//закрытие файла
	 ?>
	 </div>
</body>
</html>
