<?php  // если закоментировать редирект, то будет открываться эта страница, иначе будет открываться script.html
echo '
<meta http-equiv = "Refresh"
content = "0 ; URL = script.html">
';
exit();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>First page</h1>
</body>
</html>
