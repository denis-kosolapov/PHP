<?php
namespace Home; // объявление пространства имен, кроме зарезервированных слов типа php
//при объявлении, в файле не должно быть HTML кода и пропуска строк только <?php!!!!!!
class User {
    public $name;
    public $password;
    public $email;
    public $city;

    function __construct($name,$password,$email,$city) {
        $this->name = $name;
        $this->password = $password;
        $this->email = $email;
        $this->city = $city;
    }

    function getInfo() {
        $information = "{$this->name}"."{$this->password}"."{$this->email}"."{$this->city}";
        return $information;
    }
}

$user1 = new User("Alex ", "123456 ", "alex@yandex.ru ", "Izevsk ");
echo $user1 -> getInfo();

namespace newClass\Home2;
{
    ///1234568789
}
//Пространства имен
//Это способ организации проектов. Позволяет организовать код как файловую систему. Позволяют изолировать классы, константы, функции.
//Используя пространства имен можно избежать конфликтов. Это имеющий имя фрагмент программы, содержащий в себе функции, константы и классы.

?>
