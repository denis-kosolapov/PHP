<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<h3>Абстрактные классы</h3>
<p>Это класс, для которго не могут быть созданы его экземпляры. У абстрактного класса могут быть дочерние классы. Иными словами, можгл
создать заготовку на будущее, а потом уже создавать полноценные подклассы.</p>
<?php
abstract class User {
    public $name; // у него могу быть свои свойства
    public $status;

    abstract public function getStatus(); // у него могут быть свои методы, но они тоже абстрактные(виртуальные)
    //данный метод должен обязательно быть реализован в дочернем классе, иначе появится ошибка!
}

//а вот экземпляры создавать мы не можем и дальнейший код выведет ошибку
//$user1 = new user;

class Admin extends User { // а это уже вполне реальный класс :)
    public function getStatus() {
        echo "Admin";
    }
}

$user1 = new Admin();
$user1 -> getStatus();
?>
</body>
</html>
