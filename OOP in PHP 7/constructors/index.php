<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php

class User {
    public $name;
    public $password;
    public $email;
    public $city;

    //конструктор
    function __construct($name, $password, $email, $city) {
        $this->name = $name;
        $this->password = $password;
        $this->email = $email;
        $this->city = $city;
    }

    function getinfo() {
        return "{$this->name}" . "{$this->password}" . "{$this->email}" . "{$this->city}";
    }
}

$user1 = new User(" Alex", " 123456"," alex@yandex.ru", " Moscow" );
//var_export($user1); //выводит структуру конструктора
echo $user1 -> getinfo(); // выводит данные на user1
?>
</body>
</html>
