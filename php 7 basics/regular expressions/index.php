<?php 
	//регулярные выражения
	if (preg_match("/php/i", "PHP is the web scripting language")) { // выводит success, если в документе есть php инлекс i обозначает, что регитр учитываться не будет
		echo "success";
	}else {
		echo "Вхождение не найдено";
	}
 ?>

 <?php 
	//регулярные выражения
	if (preg_match("\bweb\b/i", "PHP is the web scripting language")) { // \bweb\b обозначает, что будет идти поиск только слова web
		echo "success to";
	}else {
		echo "Вхождение не найдено";
	}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 

	 ?>
</body>
</html>
