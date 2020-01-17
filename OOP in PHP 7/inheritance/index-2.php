<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
class Test {
    protected $info;
}

class Test2 extends Test { //extends команда наследования класса
    public function test() {
        $this -> info = "info"; // передаем функции info класса Test строковое значение info (текстовое сообщение)
        echo $this -> info;
    }
}

$test2 = new Test2();
$test2 -> test();

$test2 -> info = "information";  // эта строка выдаст ошбку, при этом сообщение info будет выведено, так как protected
//позволяет использовать переменную/метод, но не изменять ее.
//----------------------------------------------------------------------------------------------------------------------
//можно явно запретить переопределение метода в дочерних классахпри помощи final:
//
//final class Test { // запрещение наследования от указанного класса
//    protected $info;
//}
//
//class Test2 extends Test {
//    final function test() { // запрещаем переопределение метода
//        $this -> info = "info";
//        echo $this -> info;
//    }
//}
//
//$test2 = new Test2();
//$test2 -> test();
//
//$test2 -> info = "information";
//?>
</body>
</html>