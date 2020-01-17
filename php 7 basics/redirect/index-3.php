<?php //пнример внутреннего редиректа. Однако браузер не будет видеть сам процесс перенаправления
	header("location: /script.html");
	exit();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Heloo World</h1>
</body>
</html>