<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php //область видимости объектов класса

class User { // Public делает объект видимым и его можно использовать вне класса
    public $name = "Имя";
    public $password = "Пароль";
    public $email = "Емайл";
    public $city = "Город";

    public function Hello() {
        echo "Hello {$this->name}";
    }
}

$admin = new User();
$admin->name="Alexey";
admin -> Hello();

//в результате программа выдаст Hello Alexey
?>
</body>
</html>
