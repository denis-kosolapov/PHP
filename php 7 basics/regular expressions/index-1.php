<?php
	//извлечение доменного имени 
	preg_match('@^(?:http://)?([^/]+)@i',
	"http://www.php.net/index.html", $matches);
	$host = $matches[1];

	preg_match('/[^.]+\.[^.]+$/', $host, $matches); //знак доллара означает конец строки 
	echo "Доменное имя:{$matches[0]}\n";
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