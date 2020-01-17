<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
//Начиная с версии PHP 5.3.0, стало возможным обратиться к классу с помощью переменной.
// Значение переменной не должно быть ключевым словом (например, self, parent или static).

//Проще говоря $this это обращение к методам и свойствам в контексте объекта,
//а self это обращение к статическим свойствам и методам в контексте класса

//статические методы и свойства определяются на уровне класса
class User {
    private static $name;
    public static function setName($name1) { //метод set - магический метод, нужно читать мануал на php.net
        self::$name = $name1;
    }
    public static function getName() {
        return self::$name;
    }
}
User::setName('Ivan'); //имя можно менять динамически, например из базы данных
echo User::getName();
?>
</body>
</html>