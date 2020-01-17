<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php

class DestructtableClass {
    function  __construct()
    {
        print " Конструктор "; // вывод сообщения через print
        $this -> name = "DestructtableClass";
    }

    function __destruct()
    {
        print " Уничтожение " . $this -> name; // деструктор уничтожает объект
    }
}

$obj = new DestructtableClass(); //так можно вывести информацию о конструкторе и деконструкторе

?>
</body>
</html>