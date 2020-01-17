<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		echo date(" I ds FY h:i:s A");
		echo date(" Today d.m.y");
		$nextWeek = time() + (7*24*60*60);
		echo 'Now'.date(' Y-m-d')."\n";
		echo 'next'.date(' Y-m-d'. $nextWeek)."\n";

		setlocale(LC_ALL, "UTF-8");
		echo strftime("%B %Y года, %d число. %A, %H:%M");//выводит только на английском
	?>
	<?php
		// Вывод даты на русском
		$monthes = array(
		    1 => 'Января', 2 => 'Февраля', 3 => 'Марта', 4 => 'Апреля',
		    5 => 'Мая', 6 => 'Июня', 7 => 'Июля', 8 => 'Августа',
		    9 => 'Сентября', 10 => 'Октября', 11 => 'Ноября', 12 => 'Декабря'
		);
		echo(date('d ') . $monthes[(date('n'))] . date(' Y, H:i'));
		 
		// Вывод дня недели
		echo('<br />');
		$days = array(
		    'Воскресенье', 'Понедельник', 'Вторник', 'Среда',
		    'Четверг', 'Пятница', 'Суббота'
		);
		echo($days[(date('w'))] . date(', H:i'));
	?>

	<?php
	//выводит дату на день назад, день раньше 
		$time = strtotime("-1 day");
		$yest = date("Y-m-d", $time);
		echo $yest;
	 ?>
</body>
</html>
