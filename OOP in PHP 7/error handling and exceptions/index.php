<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<h3>Исключения</h3>
<a href="http://php.net/manual/ru/language.exceptions.php">Исключения</a>
<?php
$file = 'name.php';
try {
    if (!file_exists($file)) {
        throw new Exception('<br> File not found');
    }
} catch(Exception $e) {
    echo$e ->getMessage();
    //так же можно создавать свои классы исключения
}
?>



<?php
class NewException extends Exception {
    try {

    } catch {

    }
}
?>
</body>
</html>
