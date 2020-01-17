<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php

class User {
    public $name = "Имя";
    public $password = "Пароль";
    public $email = "Емайл";
    public $city = "Город";

    function getinfo() { //классификатор public, так как он устанавливается по умолчанию
        return "{$this->name}" . "{$this->surname}"; // через контантенацию
    }
}

$admin = new User();
$admin -> name = " Alexey";
$admin -> surname = " Ivanov";
echo "Пользователь: {$admin -> getinfo()}";
?>
</body>
</html>