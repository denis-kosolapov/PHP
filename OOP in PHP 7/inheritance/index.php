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
        //здесь добавляем переменную information, передадим ей значение и вернем ее через return
        $information = "{$this->name}" . "{$this->password}" . "{$this->email}" . "{$this->city}";
        return $information;
    }
}

$user1 = new User(" Alex", " 123456"," alex@yandex.ru", " Moscow" );
//var_export($user1); //выводит структуру конструктора
//echo $user1 -> getinfo(); // выводит данные на user1

//Класс User родительский, а класс Moderator дочерний
class Moderator extends User {  //пример наследования класса User
    //это новые свойства
    protected $info; // спецификатор protected обохначает что свойства и методы могут использоваться только внутри
    //самого класса и внутри дочернего класса. Наследование protected имеет private область видимости относительно
    //дочернего класса
    public $rights;

    public function __construct($name, $password, $email, $city, $info, $rights) //нажать ctrl+O и выбрать конструктор, для бытрого его создания
    {
        parent::__construct($name, $password, $email, $city);
        $this->info = $info;
        $this->rights = $rights;
    }

    function getinfo() {
        //здесь добавляем переменную information, передадим ей значение и вернем ее через return
        $information = parent::getinfo(); // parent получает из класса User, функцию getinfo
        $information .= "{$this->info}" . "{$this->rights}";// выражение .= обозначает добавление свойств к классу
        return $information;
    }
}

$moder = new Moderator("Andrey ", "654321 ", "alexey@gmail.com ", "Samara ", "Moderator ", "True");
echo $moder -> getinfo(); // наслежуется с прошлого класса

// Дочерний класс Moderator, наследует доступ ко всем методам класса User
//Каждый дочерний класс вызывает конструктор своего родительского класса прежде чем определить собственные свойства
//Дочерний класс это, обчно, спеуиализация родительского класса
//Не следует давать родительскому классу особые знания о дочерних классах
//
?>
</body>
</html>
