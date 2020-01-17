<?php
require_once 'index.php'; //подключаем файл
$obj = new \Home\User("Alexey ", "123456789 ", "alexey123@yandex.ru ", "Mojga ");
//во второй строке ссылаемся на класс User, в пространстве имен Home
//данные будут уже их этого файла
echo $obj->getInfo();
//для проверки перейти по адрксу файла

////пример импорта пространства имен
//use newClass\Home2 as Home;
////пример группирования
//use some\namespace\{ClassA,ClassB};
//use function some\namespace\{fn a, fn b};
//use const some\namespace\{fn a, fn b};
//?>