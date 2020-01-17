<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
//Псевдопеременная $this доступна в том случае, если метод был вызван в контексте объекта.
// $this является ссылкой на вызываемый объект. Обычно это тот объект, которому принадлежит
// вызванный метод, но может быть и другой объект, если метод был вызван статически из контекста другого объекта.
// Начиная с PHP 7.0.0, вызов нестатического метода статическим способом из неподходящего контекста приведет к тому,
// что $this будет неопределен внутри метода.
class User {
    public $name;
    public $password;
    public $email;
    public $city;

    public function getName() {
        echo $this -> name;
        $this -> test();
    }

    public function test() {
        echo ' Test ';
    }
}

$user1 = new User();
$user1 -> name = " Alexey ";
$user1 -> getName();

$user2 = new User();
$user2 -> name = " Ivan ";
$user2 -> getName();

?>
</body>
</html>
