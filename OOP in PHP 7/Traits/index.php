<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<h3>Трейты</h3>
<p>Трейты - это инструмет для повторного использования в классах, их еще называют примеси. Используется, если нужно объединить
общие методы для всех наследующих классов. Трейт - это механиз зповторного использования кода. Предназначен для формирования функционала
хорошо структурированным и последовательным образом. </p>
<?php
class Base {
    public function sayHello() {
        echo "Hello "; // двойные ковычки выводят текстовые данные строкового типа
        //одиниарные могут выводить функции и прочие типы данных
    }
}

trait sayWorld { //создадим трейт
    public function sayHello() { //создадим и дополним функцию
        parent::sayHello();
        echo "World ";
    }
}

class myHelloWorld extends Base { // теперь наследование
    use sayWorld; // и наследование функции
}

$obj = new myHelloWorld(); // теперь создаем экземпляр класса
$obj->sayHello(); // и обращаемся к функции
?>
</body>
</html>
