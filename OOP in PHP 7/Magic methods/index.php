<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<h3>Магические методы</h3>
<p>Имена функций __construct(), __destruct(), __call(), __callStatic(), __get(), __set(), __isset(), __unset(),
 __sleep(), __wakeup(), __toString(), __invoke(), __set_state(), __clone() и __debugInfo() являются магическими в PHP.
 Не стоит называть свои методы этими именами, если вы не хотите использовать их магическую функциональность</p>
<?php
// магический метод clone
// работает с клонированным объектом
class User {
    private $name;
    private $city;
    private $id;

    function __construct($name, $city) {
        $this->name = $name;
        $this->city = $city;
    }

    function setId() {
        $this->id = $id;
    }


    public function __clone() {
        $this->id = 0;
    }
}

$user1 = new User ("Alexey", "Izevsk");
$user1 -> setId(1234);
$user2 = clone $user1; // user2 является клоном user1
var_dump($user1, $user2); // выводим информацию о переменных класса и видим, что произошло клонирование
?>
</body>
</html>
