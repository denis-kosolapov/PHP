<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<h3>Статические свойства и методы</h3>
<p>Статические свойства класса это свойства к которым можно обратиться без создания объектов в контексте самого класса </p>
<?php
class user {
    public static $name; //тип доступа public, статическое свойство static, доступ к статическому объекту производится через класс
    //экземпляр объекта при этом не нужен. Теперь можно использовать имя класса.
    public static function hello() {
        //статический метод для функции hello
        echo "Hello ".self::$name." "; //так можно обратиться к переменной $name
    }
}
user::$name="Alexey"; //задание свойству значения
echo user::$name; //вывод значения
user::hello(); // при этом дополнительно выводить результат функции $name не нужно! оно уже выведено ранее

//воторой варинт вывода
//class user {
//    public static $name;
//    public static function hello() {
//        echo "Hello ";
//        return self::$name." ";
//    }
//}
//user::$name="Alexey";
//echo user::$name;
//echo user::hello();

//в статических методах нельзя использовать переменную $this!!!
?>
</body>
</html>
