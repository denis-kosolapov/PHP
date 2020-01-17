<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php 
class ShoppingCard { //сам класс

}

$product1 = new ShoppingCard(); // экземпляр класса
$product2 = new ShoppingCard();
$product3 = new ShoppingCard();

var_dump($product1 instanceof ShoppingCard); //выводит информацию об объекте класса
var_dump($product2 instanceof Card); // instanceof выводит true если объект является экземпляром класса, если нет -false
var_dump($product3);
?>
</body>
</html>
