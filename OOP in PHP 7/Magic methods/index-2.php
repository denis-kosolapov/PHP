<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<h3>Магические методы set и get</h3>
<p>Если переменная класса закрыта, то обращение к ней возможно только через открытые методы.
Эти методы перехватывают обращение к переменной. Таким образом можно регистрировать в объекте не существующую переменную
и обращаться к ней</p>
<?php
class GetSet {
    private $number = 1; // объявили переменную

    public function __get($name) { // ранее переменная $name не объявлялась
        echo "You get {$name}";
    }

    public function __set($name, $value) { // так жеи переменная $value
        echo "You set {$name} to ";
    }
}

$obj = new GetSet();
echo $obj->number;
echo $obj->number = 789; // Зато все выводится и работает :)
?>
</body>
</html>