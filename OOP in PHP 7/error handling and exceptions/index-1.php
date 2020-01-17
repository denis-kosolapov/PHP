<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<h3>Обработка ошибок</h3>
<a href="http://php.net/manual/ru/book.errorfunc.php">обработка и логирование ошибок</a>
<?php
@require_once 'file.txt'; // знак @ игнорирует ошибку и не выводит ее в браузере
?>
</body>
</html>