<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<h3>Интерфейсы</h3>
<p>интерфейсы в php заменяет множественное наследование(один класс наследует сразу несколько классов)
Интерфейсы это просто шаблоны (структуры), которые, по факту, описывают какие константы и методы должен содержать
класс, который будет реализовывать интерфейс. Интерфейс не должен содержать реализацию указанных методов,
он содержит только переччисление того, что содержится в самом классе. В интерфейсе могут находится только объявления
этих методов, но никак не тела самих этмх методов.</p>
<p>Для интерфейсов, как и для абстракных классов, нельзя создавать экземпляры. В отличи от абстрактоного класса, в интерфейсе
необходимо опускать тело всех методов. А абстрактный метод может содержать реализацию всех методов. <h2>Для классов невозможно
множественное наследование в отличии от интерфейсов</h2></p>
<?php

interface FirstInterface {
    public function getName();
} // для интерфейса не могут быть созданы его экземпляры

interface SecondInterface {
    public function getStatus();
}

//интерфейсы поддерживают наследование

interface ThirdInterface extends FirstInterface, SecondInterface { // так реализуется наследование интерфейсов

}

class Test implements FirstInterface, SecondInterface { // так реализуются интерфейсы
    public $name = "Alexey ";
    public $status = "Admin ";

    public function getStatus() {
        echo $this->status;
    }

    public function getName() {
        echo $this->name;
    }
}

$user1 = new Test;
$user1->getStatus();
$user1->getName();
?>
</body>
</html>
